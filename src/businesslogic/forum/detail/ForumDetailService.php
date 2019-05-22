<?php declare(strict_types=1);
/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace businesslogic\forum\detail;

use businesslogic\forum\ForumRecord;
use businesslogic\forum\ForumRecordList;
use businesslogic\forum\ForumRepository;
use businesslogic\forum\pagination\ForumPaginationService;
use businesslogic\PageList;
use businesslogic\PageListBuilder;
use businesslogic\thread\ReducedThreadRecord;
use businesslogic\thread\ReducedThreadRecordList;
use businesslogic\thread\ThreadRepository;

class ForumDetailService
{
    const MAXIMUM_THREADS_PER_PAGE = 100;

    /** @var ForumRepository */
    private $forumRepository;

    /** @var ThreadRepository */
    private $threadRepository;

    public function __construct(ForumRepository $forumRepository,
                                ThreadRepository $threadRepository)
    {
        $this->forumRepository = $forumRepository;
        $this->threadRepository = $threadRepository;
    }

    public function getDetail(int $forumId) : ForumDetail
    {
        $forum = $this->forumRepository->selectById($forumId);
        $detail = new ForumDetail();
        $detail->setForumId($forum->getForumId());
        $detail->setForumTitle($forum->getTitle());
        $detail->setForumUrl($forum->getUrlPath());
        return $detail;
    }

    public function getSubForumList(int $forumId) : ForumDetailSubForumList
    {
        $threadList = $this->forumRepository->selectAllByParentId($forumId);

        $list = new ForumDetailSubForumList();
        $this->hydrateSubForumList($list, $threadList);
        return $list;
    }

    private function hydrateSubForumList(ForumDetailSubForumList $subForumList, ForumRecordList $forumRecordList): void
    {
        /** @var ForumRecord $forumRecord */
        foreach ($forumRecordList as $forumRecord) {
            $detail = new ForumDetailSubForum();
            $this->hydrateSubForum($detail, $forumRecord);
            $subForumList[] = $detail;
        }
    }

    private function hydrateSubForum(ForumDetailSubForum $detail, ForumRecord $forumRecord): void
    {
        $detail->setTitle($forumRecord->getTitle());
        $detail->setUrl($forumRecord->getUrlPath());
        $detail->setDescription($forumRecord->getDescription());
    }

    public function getThreadList(int $forumId, string $forumUrl, int $pageNumber) : ForumDetailThreadList
    {
        $pageNumber--;
        if($pageNumber < 0) {
            throw new \InvalidArgumentException('Minimum allowed pageNumber is 1');
        }
        $offset = self::MAXIMUM_THREADS_PER_PAGE*$pageNumber;
        $limit = self::MAXIMUM_THREADS_PER_PAGE;
        $threadList = $this->threadRepository->selectOfForum($forumId, $limit, $offset);

        $list = new ForumDetailThreadList();
        $this->hydrateDetailThreadList($list, $threadList, $forumUrl);
        return $list;
    }

    private function hydrateDetailThreadList(ForumDetailThreadList $detailThreadList,
                                             ReducedThreadRecordList $threadRecordList,
                                             string $forumUrl): void
    {
        /** @var ReducedThreadRecord $thread */
        foreach ($threadRecordList as $thread) {
            $detail = new ForumDetailThread();
            $this->hydrateDetailThread($detail, $thread, $forumUrl);
            $detailThreadList[] = $detail;
        }
    }

    private function hydrateDetailThread(ForumDetailThread $detail,
                                         ReducedThreadRecord $threadRecord,
                                         string $forumUrl): void
    {
        $detail->setTitle($threadRecord->getTitle());
        $detail->setUrl($forumUrl.$threadRecord->getUrlPathPart());
        $detail->setCreatorUserName($threadRecord->getPostUserName());
        $detail->setLastPostUserName($threadRecord->getLastPoster());
    }

    public function getPageList(int $forumId, string $forumUrl, int $pageNumber): PageList
    {
        $threadCount = $this->threadRepository->countThreadsOfForum($forumId);
        $pageCount = intdiv($threadCount, self::MAXIMUM_THREADS_PER_PAGE);
        if($threadCount%self::MAXIMUM_THREADS_PER_PAGE > 0) {
            $pageCount++;
        }
        $builder = new PageListBuilder($pageNumber);
        if($pageCount>0) {
            $builder->addPage($forumUrl);
        }
        for($i = 1; $i<$pageCount; $i++) {
            $builder->addPage($forumUrl.'/'.($i+1));
        }
        return $builder->build();
    }
}