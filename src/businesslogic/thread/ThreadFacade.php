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

use businesslogic\thread\detail\ThreadDetailService;
use businesslogic\thread\posts\ThreadPostsService;

class ThreadFacade
{
    /** @var ThreadDetailService */
    private $threadDetailService;

    /** @var ThreadPostsService */
    private $threadPostsService;

    /** @var ThreadPaginationService */
    private $threadPaginationService;

    public function __construct(ThreadDetailService $threadDetailService,
                                ThreadPostsService $threadPostsService,
                                ThreadPaginationService $threadPaginationService)
    {
        $this->threadDetailService = $threadDetailService;
        $this->threadPostsService = $threadPostsService;
        $this->threadPaginationService = $threadPaginationService;
    }

    public function getThreadPage(int $threadId, int $pageNumber) : ThreadPage
    {
        $page = new ThreadPage();
        $detail = $this->threadDetailService->getThreadDetail($threadId);
        $page->setThreadDetail($detail);
        $page->setThreadPostList(
            $this->threadPostsService->getThreadPostList($threadId, $pageNumber)
        );
        $page->setPageList(
            $this->threadPostsService->getPageList($threadId, $detail->getUrl(), $pageNumber)
        );
        $page->setPaginationPageList(
            $this->threadPaginationService->getPageList($threadId, $pageNumber)
        );
        return $page;
    }
}