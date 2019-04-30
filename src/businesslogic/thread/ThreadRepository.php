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
     * @param int $forumId
     * @return ReducedThreadRecord[]
     */
    public function selectOfForum(int $forumId) : ReducedThreadRecordList
    {
        $t = Thread::as('t');

        /** @var ThreadRecord[] $threadList */
        $threadRecordList = select($t->title(), $t->lastPoster(), $t->postUserName(), $t->replyCount(), $t->threadId())
            ->from($t)
            ->where($t->forumId()->eq(value($forumId)))
            ->order($t->threadId()->desc())
            ->limit(10)
            ->offset(0)
            ->fetchAll()
            ->into($t);

        return new ReducedThreadRecordList($threadRecordList);
    }

}