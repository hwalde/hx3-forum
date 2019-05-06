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
        $record = $this->repository->selectById($threadId);

        $detail = new ThreadDetail();

        $detail->setThreadId($record->getThreadId());
        $detail->setTitle($record->getTitle());

        return $detail;
    }

}