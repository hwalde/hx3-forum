<?php declare(strict_types=1);
/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace businesslogic\forum\pagination;

use businesslogic\forum\ForumRepository;
use businesslogic\Page;
use businesslogic\PageList;

class ForumPaginationService
{
    /** @var ForumRepository */
    private $repository;

    public function __construct(ForumRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param int $forumId
     * @return Page[]
     */
    public function getPageList(int $forumId) : PageList
    {
        $list = new PageList();
        foreach ($this->repository->selectAllPaginationList($forumId) as $forumPaginationRecord) {
            $list[]  = new Page($forumPaginationRecord->getTitle(), $forumPaginationRecord->getUrlPath());
        }
        return $list;
    }
}