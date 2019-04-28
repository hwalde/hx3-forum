<?php
/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace businesslogic\forum\detail;

use businesslogic\thread\ThreadRecord;
use generated\Thread;
use function POOQ\select;
use function POOQ\value;

class DetailThreadRepository
{
    public function selectOfForum(int $forumId) : DetailThreadList
    {
        $t = Thread::as('t');
        /** @var ThreadRecord[] $threadList */
        $threadList = select($t->title(), $t->lastPoster(), $t->postUserName(), $t->replyCount(), $t->threadId())
            ->from($t)
            ->where($t->forumId()->eq(value($forumId)))
            ->order($t->threadId()->desc())
            ->limit(10)
            ->offset(0)
            ->fetchAll()
            ->into($t);

        $list = new DetailThreadList();
        foreach ($threadList as $thread) {
            $detail = new DetailThread();
            $detail->setTitle($thread->getTitle());
            $detail->setUrl('todo');
            $detail->setCreatorUserName($thread->getPostUserName());
            $detail->setLastPostUserName($thread->getLastPoster());
            $list[] = $detail;
        }
        return $list;
    }
}