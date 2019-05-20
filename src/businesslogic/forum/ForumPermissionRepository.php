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
 
use generated\ForumPermission;
use generated\GeneratedForumPermissionRepository;
use function POOQ\select;

class ForumPermissionRepository extends GeneratedForumPermissionRepository {

    /**
     * @param int[] $forumIdList
     * @return ForumPermissionRecord[]
     */
    public function selectAllOfForumIdList(array $forumIdList) : ForumPermissionRecordList {
        return select(ForumPermission::class)
            ->from(ForumPermission::class)
            ->where(ForumPermission::forumId()->in($forumIdList))
            ->fetchAll()
            ->into(ForumPermission::class);
    }

}