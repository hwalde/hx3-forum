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
use businesslogic\thread\Thread;
use businesslogic\thread\ThreadRecord;
use businesslogic\thread\ThreadRecordList;
use businesslogic\thread\ThreadRepository;
use generated\Forum;
use generated\SubscribeForumRepository;
use util\Limit;
use util\Order;

class DetailService
{
    /** @var ForumRepository */
    private $forumRepository;

    /** @var ThreadRepository */
    private $threadRepository;

    public function __construct(ForumRepository $forumRepository, ThreadRepository $threadRepository)
    {
        $this->forumRepository = $forumRepository;
        $this->threadRepository = $threadRepository;
    }

    public function getDetail(int $id) : Detail
    {
        $forum = $this->forumRepository->selectById($id);
        $detail = new Detail();
        $detail->setForumId($forum->getForumId());
        $detail->setForumTitle($forum->getTitle());
        $detail->setSubForumList($this->getSubForumList($forum->getForumId()));
        $detail->setThreadList($this->getThreadList($forum->getForumId()));
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
        $detail->setUrl('todo');
        $detail->setDescription($forumRecord->getDescription());
    }

    private function getThreadList(int $forumId) : DetailThreadList
    {
        $threadList = $this->threadRepository->selectOfForum($forumId);

        $list = new DetailThreadList();
        $this->hydrateDetailThreadList($list, $threadList);
        return $list;
    }

    private function hydrateDetailThreadList(DetailThreadList $detailThreadList, ThreadRecordList $threadRecordList): void
    {
        /** @var ThreadRecord $thread */
        foreach ($threadRecordList as $thread) {
            $detail = new DetailThread();
            $this->hydrateDetailThread($detail, $thread);
            $detailThreadList[] = $detail;
        }
    }

    private function hydrateDetailThread(DetailThread $detail, ThreadRecord $threadRecord): void
    {
        $detail->setTitle($threadRecord->getTitle());
        $detail->setUrl('todo');
        $detail->setCreatorUserName($threadRecord->getPostUserName());
        $detail->setLastPostUserName($threadRecord->getLastPoster());
    }
}