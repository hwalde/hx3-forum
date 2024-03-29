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

use generated\Forum;
use generated\GeneratedThreadRepository;
use generated\Thread;
use generated\ThreadAlias;
use POOQ\Condition;
use function POOQ\select;
use function POOQ\selectCount;
use function POOQ\value;

class ThreadRepository extends GeneratedThreadRepository {

    /**
     * @param int $forumId
     * @return ReducedThreadRecord[]
     */
    public function selectOfForum(int $forumId, int $limit, int $offset) : ReducedThreadRecordList
    {
        $t = Thread::as('t');

        $threadIsVisible = $this->threadIsVisibleCondition($t);
        $forumIdMatches = $t->forumId()->eq(value($forumId));

        /** @var ThreadRecord[] $threadList */
        $threadRecordList = select($t->title(), $t->lastPoster(), $t->postUserName(), $t->replyCount(), $t->threadId())
            ->from($t)
            ->where($forumIdMatches ->and($threadIsVisible))
            ->order($t->threadId()->desc())
            ->limit($limit)
            ->offset($offset)
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

    /**
     * @param int $threadId
     * @return array(ThreadRecord, ForumRecord)
     */
    public function selectById(int $threadId): array
    {
        $t = Thread::as('t');
        $f = Forum::as('f');

        $threadIdMatches = $t->threadId()->eq(value($threadId));
        $threadIsVisible = $this->threadIsVisibleCondition($t);

        $result =  select($t, $f->title(), $f->forumId(), $f->parentId())
            ->from($t)
            ->innerJoin($f)->on($t->forumId()->eq($f->forumId()))
            ->where($threadIdMatches->and($threadIsVisible))
            ->fetch();

        return [$result->into($t), $result->into($f)];
    }

    public function countThreadsOfForum(int $forumId): int
    {
        $t = new ThreadAlias('t');
        $postIsVisible = $this->threadIsVisibleCondition($t);
        return (int)selectCount()
            ->from($t)
            ->where($t->forumId()->eq(value($forumId))->and($postIsVisible))
            ->fetchOne();
    }

}