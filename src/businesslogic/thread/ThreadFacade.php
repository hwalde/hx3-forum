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


use businesslogic\thread\posts\ThreadPostsService;

class ThreadFacade
{
    /** @var ThreadPostsService */
    private $threadPostsService;

    public function __construct(ThreadPostsService $threadPostsService)
    {
        $this->threadPostsService = $threadPostsService;
    }

    public function getThreadPage(int $threadId, int $pageNumber) : ThreadPage
    {
        $page = new ThreadPage();
        $threadPostList = $this->threadPostsService->getThreadPostList($threadId, $pageNumber);
        $page->setThreadPostList($threadPostList);
        return $page;
    }
}