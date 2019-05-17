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

use businesslogic\forum\detail\ForumPaginationService;
use businesslogic\forum\ForumRecord;
use businesslogic\Page;
use businesslogic\PageList;

class ThreadPaginationService
{
    /** @var ForumPaginationService */
    private $forumPaginationService;

    /** @var ThreadRepository */
    private $repository;

    public function __construct(ForumPaginationService $forumPaginationService, ThreadRepository $repository)
    {
        $this->forumPaginationService = $forumPaginationService;
        $this->repository = $repository;
    }

    /**
     * @param int $threadId
     * @return Page[]
     */
    public function getPageList(int $threadId, int $pageNumber) : PageList
    {
        /** @var ThreadRecord $threadRecord */
        /** @var ForumRecord $forumRecord */
        list($threadRecord, $forumRecord) = $this->repository->selectById($threadId);
        $list = $this->forumPaginationService->getPageList($threadRecord->getForumId());
        $urlPath = $forumRecord->getUrlPath() .$threadRecord->getUrlPathPart();
        if($pageNumber>1) {
            $urlPath.='/'.$pageNumber;
        }
        $list[] = new Page($threadRecord->getTitle(), $urlPath);
        return $list;
    }
}