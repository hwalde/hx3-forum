<?php declare(strict_types=1);
/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace businesslogic\forum;

use businesslogic\forum\detail\ForumDetail;
use businesslogic\forum\detail\ForumDetailSubForum;
use businesslogic\forum\detail\ForumDetailSubForumList;
use businesslogic\forum\detail\ForumDetailThread;
use businesslogic\forum\detail\ForumDetailThreadList;
use businesslogic\Page;
use businesslogic\PageList;

class ForumDetailPage
{
    /** @var ForumDetail */
    private $detail;

    /** @var ForumDetailSubForumList */
    private $subForumList;

    /** @var ForumDetailThreadList */
    private $threadList;

    /** @var PageList */
    private $pageList;

    /** @var PageList */
    private $paginationPageList;

    public function __construct()
    {
        $this->subForumList = new ForumDetailSubForumList();
    }

    /**
     * @return ForumDetail
     */
    public function getDetail(): ForumDetail
    {
        return $this->detail;
    }

    /**
     * @param ForumDetail $detail
     */
    public function setDetail(ForumDetail $detail): void
    {
        $this->detail = $detail;
    }

    /**
     * @return ForumDetailSubForum[]
     */
    public function getSubForumList(): ForumDetailSubForumList
    {
        return $this->subForumList;
    }

    public function setSubForumList(ForumDetailSubForumList $subForumList): void
    {
        $this->subForumList = $subForumList;
    }

    /**
     * @return ForumDetailThread[]
     */
    public function getThreadList(): ForumDetailThreadList
    {
        return $this->threadList;
    }

    public function setThreadList(ForumDetailThreadList $threadList): void
    {
        $this->threadList = $threadList;
    }

    /**
     * @return Page[]
     */
    public function getPageList(): PageList
    {
        return $this->pageList;
    }

    public function setPageList(PageList $pageList): void
    {
        $this->pageList = $pageList;
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