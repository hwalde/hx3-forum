<?php
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
use businesslogic\PageList;
use businesslogic\PageListBuilder;
use businesslogic\thread\ReducedThreadRecord;
use businesslogic\thread\ReducedThreadRecordList;
use businesslogic\thread\ThreadRepository;

class DetailService
{
    const MAXIMUM_THREADS_PER_PAGE = 100;

    /** @var ForumRepository */
    private $forumRepository;

    /** @var ThreadRepository */
    private $threadRepository;

    /** @var ForumPaginationService */
    private $paginationService;

    public function __construct(ForumRepository $forumRepository, ThreadRepository $threadRepository, ForumPaginationService $paginationService)
    {
        $this->forumRepository = $forumRepository;
        $this->threadRepository = $threadRepository;
        $this->paginationService = $paginationService;
    }

    public function getDetail(int $forumId, int $pageNumber) : Detail
    {
        $forum = $this->forumRepository->selectById($forumId);
        $detail = new Detail();
        $detail->setForumId($forum->getForumId());
        $detail->setForumTitle($forum->getTitle());
        $detail->setSubForumList($this->getSubForumList($forum->getForumId()));
        $detail->setThreadList($this->getThreadList($forum, $pageNumber));
        $detail->setPageList($this->getPageList($forumId, $forum->getUrlPath(), $pageNumber));
        $detail->setPaginationPageList($this->paginationService->getPageList($forumId));
        return $detail;
    }

    private function getSubForumList(int $forumId) : DetailSubForumList
    {
        $threadList = $this->forumRepository->selectAllByParentId($forumId);

        $list = new DetailSubForumList();
        $this->hydrateSubForumList($list, $threadList);
        return $list;
    }

    private function hydrateSubForumList(DetailSubForumList $subForumList, ForumRecordList $forumRecordList): void
    {
        /** @var ForumRecord $forumRecord */
        foreach ($forumRecordList as $forumRecord) {
            $detail = new DetailSubForum();
            $this->hydrateSubForum($detail, $forumRecord);
            $subForumList[] = $detail;
        }
    }

    private function hydrateSubForum(DetailSubForum $detail, ForumRecord $forumRecord): void
    {
        $detail->setTitle($forumRecord->getTitle());
        $detail->setUrl($forumRecord->getUrlPath());
        $detail->setDescription($forumRecord->getDescription());
    }

    private function getThreadList(ForumRecord $forumRecord, int $pageNumber) : DetailThreadList
    {
        $pageNumber--;
        if($pageNumber < 0) {
            throw new \InvalidArgumentException('Minimum allowed pageNumber is 1');
        }
        $offset = self::MAXIMUM_THREADS_PER_PAGE*$pageNumber;
        $limit = self::MAXIMUM_THREADS_PER_PAGE;
        $threadList = $this->threadRepository->selectOfForum($forumRecord->getForumId(), $limit, $offset);

        $list = new DetailThreadList();
        $this->hydrateDetailThreadList($list, $threadList, $forumRecord);
        return $list;
    }

    private function hydrateDetailThreadList(DetailThreadList $detailThreadList,
                                             ReducedThreadRecordList $threadRecordList,
                                             ForumRecord $forumRecord): void
    {
        /** @var ReducedThreadRecord $thread */
        foreach ($threadRecordList as $thread) {
            $detail = new DetailThread();
            $this->hydrateDetailThread($detail, $thread, $forumRecord);
            $detailThreadList[] = $detail;
        }
    }

    private function hydrateDetailThread(DetailThread $detail,
                                         ReducedThreadRecord $threadRecord,
                                         ForumRecord $forumRecord): void
    {
        $detail->setTitle($threadRecord->getTitle());
        $detail->setUrl($forumRecord->getUrlPath().$threadRecord->getUrlPathPart());
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