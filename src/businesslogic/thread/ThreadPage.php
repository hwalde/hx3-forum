<?php declare(strict_types=1);
/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace businesslogic\thread;

use businesslogic\Page;
use businesslogic\PageList;
use businesslogic\thread\detail\ThreadDetail;
use businesslogic\thread\posts\ThreadPost;
use businesslogic\thread\posts\ThreadPostList;

class ThreadPage
{
    /** @var ThreadDetail */
    private $threadDetail;

    /** @var ThreadPostList */
    private $threadPostList;

    /** @var PageList */
    private $pageList;

    /** @var PageList */
    private $paginationPageList;

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