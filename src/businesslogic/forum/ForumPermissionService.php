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


class ForumPermissionService
{
    /** @var ForumPermissionRepository */
    private $repository;

    public function __construct(ForumPermissionRepository $repository)
    {
        $this->repository = $repository;
    }

    public function removeNotPermittedForumsFromList(ForumRecordList $subForumList) : ForumRecordList
    {
        $newList = new ForumRecordList();

        $permissionList = $this->repository->selectAllOfForumIdList(
            $subForumList->extractForumIdIncludingAllAncestors()
        );

        /** @var ForumRecord $forum */
        foreach ($subForumList as $forum) {
            if(!$forum->getOptionsObject()->isActive()) {
                continue;
            }

            if($this->isForumPermitted($permissionList, $forum)) {
                $newList[] = $forum;
            }
        }
        return $newList;
    }

    private function isForumPermitted(ForumPermissionRecordList $permissionList, ForumRecord $forum): bool
    {
        $permissionsOfCurrentForumList = $this->getPermissionListForForum($permissionList, $forum);
        if(count($permissionsOfCurrentForumList) === 0) {
            return true;
        }
        /** @var ForumPermissionRecord $permission */
        foreach ($permissionsOfCurrentForumList as $permission) {
            if ($permission->canView() && $permission->getUserGroupId() == 1) {
                return true;
            }
        }
        return false;
    }

    private function getPermissionListForForum(ForumPermissionRecordList $permissionList, ForumRecord $forum) : ForumPermissionRecordList
    {
        foreach ($forum->getParentIdList() as $id) {
            if (!$permissionList->containsPermissionsForForum((int)$id)) {
                continue;
            }
            return $permissionList->listPermissionsForForum((int)$id);
        }
        return new ForumPermissionRecordList();
    }
}