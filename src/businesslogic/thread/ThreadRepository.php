<?php

/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
namespace businesslogic\thread;
 
use generated\GeneratedThreadRepository;
use generated\Thread;
use function POOQ\select;
use function POOQ\value;

class ThreadRepository extends GeneratedThreadRepository {

    /**
     * @todo: Use interface as return type (to tell the user which fields are in the reduces set)
     * @param int $forumId
     * @return ThreadRecord[]
     */
    public function selectOfForum(int $forumId) : ThreadRecordList
    {
        $t = Thread::as('t');
        /** @var ThreadRecord[] $threadList */
        return select($t->title(), $t->lastPoster(), $t->postUserName(), $t->replyCount(), $t->threadId())
            ->from($t)
            ->where($t->forumId()->eq(value($forumId)))
            ->order($t->threadId()->desc())
            ->limit(10)
            ->offset(0)
            ->fetchAll()
            ->into($t);
    }

}