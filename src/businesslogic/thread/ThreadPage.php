<?php


namespace businesslogic\thread;


use businesslogic\thread\detail\ThreadDetail;
use businesslogic\thread\posts\ThreadPost;
use businesslogic\thread\posts\ThreadPostList;

class ThreadPage
{
    /** @var ThreadDetail */
    private $threadDetail;

    /** @var ThreadPostList */
    private $threadPostList;

    /**
     * @return ThreadPost[]
     */
    public function getThreadPostList(): ThreadPostList
    {
        return $this->threadPostList;
    }

    public function setThreadPostList(ThreadPostList $threadPostList): void
    {
        $this->threadPostList = $threadPostList;
    }

    public function getThreadDetail(): ThreadDetail
    {
        return $this->threadDetail;
    }

    public function setThreadDetail(ThreadDetail $threadDetail): void
    {
        $this->threadDetail = $threadDetail;
    }
}