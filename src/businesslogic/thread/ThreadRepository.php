<?php  declare(strict_types=1);
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
use generated\ThreadAlias;
use POOQ\Condition;
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

        $threadIsVisible = $this->threadIsVisibleCondition($t);
        $forumIdMatches = $t->forumId()->eq(value($forumId));

        /** @var ThreadRecord[] $threadList */
        $threadRecordList = select($t->title(), $t->lastPoster(), $t->postUserName(), $t->replyCount(), $t->threadId())
            ->from($t)
            ->where($forumIdMatches ->and($threadIsVisible))
            ->order($t->threadId()->desc())
            ->limit(10)
            ->offset(0)
            ->fetchAll()
            ->into($t);

        return new ReducedThreadRecordList($threadRecordList);
    }

    private function threadIsVisibleCondition(ThreadAlias $thread): Condition
    {
        $isVisible = $thread->visible()->isNotNull()->and(
            $thread->visible()->eq(value(1))
        );
        return $isVisible;
    }

    public function selectById(int $threadId): ThreadRecord
    {
        $t = Thread::as('t');

        $threadIdMatches = $t->threadId()->eq(value($threadId));
        $threadIsVisible = $this->threadIsVisibleCondition($t);

        return select($t)
            ->from($t)
            ->where($threadIdMatches->and($threadIsVisible))
            ->fetch()
            ->into($t);
    }

}