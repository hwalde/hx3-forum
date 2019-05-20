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

use businesslogic\forum\detail\Detail;
use businesslogic\forum\detail\DetailService;
use businesslogic\forum\overview\Overview;
use businesslogic\forum\overview\OverviewService;

class ForumFacade
{
    /** @var OverviewService */
    private $overviewService;

    /** @var DetailService */
    private $detailService;

    public function __construct(OverviewService $overviewService, DetailService $detailService)
    {
        $this->overviewService = $overviewService;
        $this->detailService = $detailService;
    }

    public function getOverview() : Overview
    {
        return $this->overviewService->getOverview();
    }

    public function getDetail(int $forumId, int $pageNumber) : Detail
    {
        return $this->detailService->getDetail($forumId, $pageNumber);
    }
}