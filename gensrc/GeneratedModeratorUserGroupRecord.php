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

class GeneratedModeratorUserGroupRecord implements Record {
    
    /** @var $moderatorUserGroupId int */
    protected $moderatorUserGroupId;
    
    /** @var $userGroupId int */
    protected $userGroupId;
    
    /** @var $forumId int */
    protected $forumId;
    
    /** @var $permissions int */
    protected $permissions;
    
    public function hasModeratorUserGroupId(): bool
    {
        return isset($this->moderatorUserGroupId);
    }    

    /**
     * @return int
     */
    public function getModeratorUserGroupId() : int
    {
        return $this->moderatorUserGroupId;
    }

    /**
     * @param int $moderatorUserGroupId
     */
    public function setModeratorUserGroupId(int $moderatorUserGroupId)
    {
        $this->moderatorUserGroupId = $moderatorUserGroupId;
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
    
    public function hasPermissions(): bool
    {
        return isset($this->permissions);
    }    

    /**
     * @return int
     */
    public function getPermissions() : int
    {
        return $this->permissions;
    }

    /**
     * @param int $permissions
     */
    public function setPermissions(int $permissions)
    {
        $this->permissions = $permissions;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): ModeratorUserGroup
    {
        return new ModeratorUserGroup();
    }
}