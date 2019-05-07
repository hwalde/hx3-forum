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


use businesslogic\Page;
use businesslogic\PageList;

class Detail
{
    /** @var int */
    private $forumId;

    /** @var string */
    private $forumTitle;

    /** @var DetailSubForumList */
    private $subForumList;

    /** @var DetailThreadList */
    private $threadList;

    /** @var PageList */
    private $paginationPageList;

    public function __construct()
    {
        $this->subForumList = new DetailSubForumList();
    }

    public function getForumId(): int
    {
        return $this->forumId;
    }

    public function setForumId(int $forumId): void
    {
        $this->forumId = $forumId;
    }

    public function getForumTitle(): string
    {
        return $this->forumTitle;
    }

    public function setForumTitle(string $forumTitle): void
    {
        $this->forumTitle = $forumTitle;
    }

    /**
     * @return DetailSubForum[]
     */
    public function getSubForumList(): DetailSubForumList
    {
        return $this->subForumList;
    }

    public function setSubForumList(DetailSubForumList $subForumList): void
    {
        $this->subForumList = $subForumList;
    }

    /**
     * @return DetailThread[]
     */
    public function getThreadList(): DetailThreadList
    {
        return $this->threadList;
    }

    public function setThreadList(DetailThreadList $threadList): void
    {
        $this->threadList = $threadList;
    }

    /**
     * @return Page[]
     */
    public function getPaginationPageList(): PageList
    {
        return $this->paginationPageList;
    }

    public function setPaginationPageList(PageList $paginationList): void
    {
        $this->paginationPageList = $paginationList;
    }
}