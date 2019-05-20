<?php declare(strict_types=1);
/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
namespace businesslogic\forum;
 
use generated\GeneratedForumRecordList;
 
class ForumRecordList extends GeneratedForumRecordList {

    /**
     * @return int[]
     */
    public function extractForumIds(): array
    {
        $idList = [];
        /** @var ForumRecord $forum */
        foreach ($this as $forum) {
            $idList[] = $forum->getForumId();
        }
        return $idList;
    }

    /**
     * @return int[]
     */
    public function extractForumIdIncludingAllAncestors(): array
    {
        $idList = [];
        /** @var ForumRecord $forum */
        foreach ($this as $forum) {
            $idList[] = $forum->getForumId();
            $idList = array_merge($idList, $forum->getParentIdList());
        }
        return $idList;
    }

}