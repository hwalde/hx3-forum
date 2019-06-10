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

use POOQ\RecordValue;
use POOQ\Record;

class GeneratedModeratorUserGroupRecord implements Record {
    
    /** @var $moderatorUserGroupId RecordValue */
    protected $moderatorUserGroupId;
    
    /** @var $userGroupId RecordValue */
    protected $userGroupId;
    
    /** @var $forumId RecordValue */
    protected $forumId;
    
    /** @var $permissions RecordValue */
    protected $permissions;

    public function __construct() {
		$this->moderatorUserGroupId = new RecordValue();
		$this->userGroupId = new RecordValue();
		$this->forumId = new RecordValue();
		$this->permissions = new RecordValue();
    }
    
    public function hasModeratorUserGroupId(): bool
    {
        return $this->moderatorUserGroupId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getModeratorUserGroupId() : int
    {
        return $this->moderatorUserGroupId->getValue();
    }

    /**
     * @param int $moderatorUserGroupId
     */
    public function setModeratorUserGroupId(int $moderatorUserGroupId)
    {
        $this->moderatorUserGroupId->setChanged(true);
        $this->moderatorUserGroupId->setValue($moderatorUserGroupId);
    }
    
    public function hasUserGroupId(): bool
    {
        return $this->userGroupId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getUserGroupId() : int
    {
        return $this->userGroupId->getValue();
    }

    /**
     * @param int $userGroupId
     */
    public function setUserGroupId(int $userGroupId)
    {
        $this->userGroupId->setChanged(true);
        $this->userGroupId->setValue($userGroupId);
    }
    
    public function hasForumId(): bool
    {
        return $this->forumId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getForumId() : int
    {
        return $this->forumId->getValue();
    }

    /**
     * @param int $forumId
     */
    public function setForumId(int $forumId)
    {
        $this->forumId->setChanged(true);
        $this->forumId->setValue($forumId);
    }
    
    public function hasPermissions(): bool
    {
        return $this->permissions->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPermissions() : int
    {
        return $this->permissions->getValue();
    }

    /**
     * @param int $permissions
     */
    public function setPermissions(int $permissions)
    {
        $this->permissions->setChanged(true);
        $this->permissions->setValue($permissions);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): ModeratorUserGroup
    {
        return new ModeratorUserGroup();
    }
}