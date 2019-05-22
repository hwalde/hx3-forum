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

use businesslogic\forum\detail\ForumDetailService;
use businesslogic\forum\pagination\ForumPaginationService;
use businesslogic\forum\overview\ForumOverviewService;

class ForumFacade
{
    /** @var ForumOverviewService */
    private $overviewService;

    /** @var ForumDetailService */
    private $detailService;

    /** @var ForumPaginationService */
    private $paginationService;

    public function __construct(ForumOverviewService $overviewService, ForumDetailService $detailService, ForumPaginationService $paginationService)
    {
        $this->overviewService = $overviewService;
        $this->detailService = $detailService;
        $this->paginationService = $paginationService;
    }

    public function getOverviewPage() : ForumOverviewPage
    {
        $page = new ForumOverviewPage();
        $page->setGroupList($this->overviewService->getForumGroupList());
        return $page;
    }

    public function getDetailPage(int $forumId, int $pageNumber) : ForumDetailPage
    {
        $page = new ForumDetailPage();
        $detail = $this->detailService->getDetail($forumId);
        $page->setDetail($detail);
        $page->setSubForumList($this->detailService->getSubForumList($forumId));
        $page->setThreadList($this->detailService->getThreadList($forumId, $detail->getForumUrl(), $pageNumber));
        $page->setPageList($this->detailService->getPageList($forumId, $detail->getForumUrl(), $pageNumber));
        $page->setPaginationPageList($this->paginationService->getPageList($forumId));
        return $page;
    }
}