<?php declare(strict_types=1);
/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace businesslogic\thread\detail;

use businesslogic\forum\ForumRecord;
use businesslogic\thread\ThreadRecord;
use businesslogic\thread\ThreadRepository;

class ThreadDetailService
{
    /** @var ThreadRepository */
    private $repository;

    public function __construct(ThreadRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getThreadDetail(int $threadId) : ThreadDetail
    {
        /** @var ThreadRecord $threadRecord */
        /** @var ForumRecord $forumRecord */
        list($threadRecord, $forumRecord) = $this->repository->selectById($threadId);

        $detail = new ThreadDetail();

        $detail->setThreadId($threadRecord->getThreadId());
        $detail->setTitle($threadRecord->getTitle());
        $detail->setUrl($forumRecord->getUrlPath().$threadRecord->getUrlPathPart());

        return $detail;
    }

}