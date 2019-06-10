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

class GeneratedForumPermissionRecord implements Record {
    
    /** @var $forumPermissionOd RecordValue */
    protected $forumPermissionOd;
    
    /** @var $forumId RecordValue */
    protected $forumId;
    
    /** @var $userGroupId RecordValue */
    protected $userGroupId;
    
    /** @var $forumPermissions RecordValue */
    protected $forumPermissions;

    public function __construct() {
		$this->forumPermissionOd = new RecordValue();
		$this->forumId = new RecordValue();
		$this->userGroupId = new RecordValue();
		$this->forumPermissions = new RecordValue();
    }
    
    public function hasForumPermissionOd(): bool
    {
        return $this->forumPermissionOd->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getForumPermissionOd() : int
    {
        return $this->forumPermissionOd->getValue();
    }

    /**
     * @param int $forumPermissionOd
     */
    public function setForumPermissionOd(int $forumPermissionOd)
    {
        $this->forumPermissionOd->setChanged(true);
        $this->forumPermissionOd->setValue($forumPermissionOd);
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
    
    public function hasForumPermissions(): bool
    {
        return $this->forumPermissions->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getForumPermissions() : int
    {
        return $this->forumPermissions->getValue();
    }

    /**
     * @param int $forumPermissions
     */
    public function setForumPermissions(int $forumPermissions)
    {
        $this->forumPermissions->setChanged(true);
        $this->forumPermissions->setValue($forumPermissions);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): ForumPermission
    {
        return new ForumPermission();
    }
}