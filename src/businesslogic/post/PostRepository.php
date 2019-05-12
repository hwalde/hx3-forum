<?php

/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
namespace businesslogic\post;
 
use generated\GeneratedPostRepository;
use generated\PostAlias;
use function POOQ\select;
use function POOQ\value;

class PostRepository extends GeneratedPostRepository {

    /**
     * @param int $threadId
     * @param int $limit
     * @param int $offset
     * @return PostRecord[]
     */
    public function selectAllFromThread(int $threadId, int $limit, int $offset) : PostRecordList
    {
        $p = new PostAlias('p');
        $isVisible = $p->visible()->eq(value(1))->and(
            $p->reportThreadId()->isNull()->or($p->reportThreadId()->eq(value(0)))
        );
        return select($p)
            ->from($p)
            ->where($p->threadId()->eq(value($threadId))->and($isVisible))
            ->order($p->postId()->asc())
            ->limit($limit)
            ->offset($offset)
            ->fetchAll()
            ->into($p);

    }

}