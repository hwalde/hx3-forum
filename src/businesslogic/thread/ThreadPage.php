<?php


namespace businesslogic\thread;


use businesslogic\thread\posts\ThreadPost;
use businesslogic\thread\posts\ThreadPostList;

class ThreadPage
{
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
}