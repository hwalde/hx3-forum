<?php
/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace generated;

use POOQ\Record;

class GeneratedForumPermissionRecord implements Record {
    
    /** @var $forumPermissionOd int */
    private $forumPermissionOd;
    
    /** @var $forumId int */
    private $forumId;
    
    /** @var $userGroupId int */
    private $userGroupId;
    
    /** @var $forumPermissions int */
    private $forumPermissions;
    
    public function hasForumPermissionOd(): bool
    {
        return isset($this->forumPermissionOd);
    }    

    /**
     * @return int
     */
    public function getForumPermissionOd() : int
    {
        return $this->forumPermissionOd;
    }

    /**
     * @param int $forumPermissionOd
     */
    public function setForumPermissionOd(int $forumPermissionOd)
    {
        $this->forumPermissionOd = $forumPermissionOd;
    }
    
    public function hasForumId(): bool
    {
        return isset($this->forumId);
    }    

    /**
     * @return int
     */
    public function getForumId() : int
    {
        return $this->forumId;
    }

    /**
     * @param int $forumId
     */
    public function setForumId(int $forumId)
    {
        $this->forumId = $forumId;
    }
    
    public function hasUserGroupId(): bool
    {
        return isset($this->userGroupId);
    }    

    /**
     * @return int
     */
    public function getUserGroupId() : int
    {
        return $this->userGroupId;
    }

    /**
     * @param int $userGroupId
     */
    public function setUserGroupId(int $userGroupId)
    {
        $this->userGroupId = $userGroupId;
    }
    
    public function hasForumPermissions(): bool
    {
        return isset($this->forumPermissions);
    }    

    /**
     * @return int
     */
    public function getForumPermissions() : int
    {
        return $this->forumPermissions;
    }

    /**
     * @param int $forumPermissions
     */
    public function setForumPermissions(int $forumPermissions)
    {
        $this->forumPermissions = $forumPermissions;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): ForumPermission
    {
        return new ForumPermission();
    }
}