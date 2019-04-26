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
use businesslogic\forum\ForumRepository;
use businesslogic\thread\Thread;
use generated\Forum;
use generated\SubscribeForumRepository;
use util\Limit;
use util\Order;

class DetailService
{
    /** @var ForumRepository */
    private $repository;

    /** @var DetailThreadRepository */
    private $detailThreadRepository;

    public function __construct(ForumRepository $repository, DetailThreadRepository $detailThreadRepository)
    {
        $this->repository = $repository;
        $this->detailThreadRepository = $detailThreadRepository;
    }

    public function getDetail(int $id) : Detail
    {
        $forum = $this->repository->selectById($id);
        $detail = new Detail();
        $detail->setForumId($forum->getForumId());
        $detail->setForumTitle($forum->getTitle());
        $detail->setSubForumList(new DetailSubForumList());
        $detail->setThreadList($this->getThreadList($detail));
        $this->hydrateSubForumList($detail);
        return $detail;
    }

    private function hydrateSubForumList(Detail $detail)
    {
        // todo
    }

    private function getThreadList(Detail $detail) : DetailThreadList
    {
        $detailThreadList = $this->detailThreadRepository->selectOfForum($detail->getForumId());
        return $detailThreadList;
    }
}