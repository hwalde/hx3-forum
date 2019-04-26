<?php

/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
namespace businesslogic\forum;
 
use generated\GeneratedForumPermissionRecordList;
 
class ForumPermissionRecordList extends GeneratedForumPermissionRecordList {

    public function containsPermissionsForForum(int $forumId) : bool
    {
        /** @var ForumPermissionRecord $permission */
        foreach ($this as $permission) {
            if($permission->getForumId() == $forumId) {
                return true;
            }
        }
        return false;
    }

    /**
     * @param int $forumId
     * @return ForumPermissionRecord[]
     */
    public function listPermissionsForForum(int $forumId) : ForumPermissionRecordList
    {
        $permissionList = new ForumPermissionRecordList();

        /** @var ForumPermissionRecord $permission */
        foreach ($this as $permission) {
            if($permission->getForumId() == $forumId) {
                $permissionList[] = $permission;
            }
        }
        return $permissionList;
    }

}