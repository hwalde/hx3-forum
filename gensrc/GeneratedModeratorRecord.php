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

class GeneratedModeratorRecord implements Record {
    
    /** @var $moderatorId RecordValue */
    protected $moderatorId;
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $forumId RecordValue */
    protected $forumId;
    
    /** @var $permissions RecordValue */
    protected $permissions;
    
    /** @var $importModeratorId RecordValue */
    protected $importModeratorId;
    
    /** @var $moderatorUserGroupId RecordValue */
    protected $moderatorUserGroupId;
    
    /** @var $modUserGroupId RecordValue */
    protected $modUserGroupId;
    
    /** @var $permissions2 RecordValue */
    protected $permissions2;

    public function __construct() {
		$this->moderatorId = new RecordValue();
		$this->userId = new RecordValue();
		$this->forumId = new RecordValue();
		$this->permissions = new RecordValue();
		$this->importModeratorId = new RecordValue();
		$this->moderatorUserGroupId = new RecordValue();
		$this->modUserGroupId = new RecordValue();
		$this->permissions2 = new RecordValue();
    }
    
    public function hasModeratorId(): bool
    {
        return $this->moderatorId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getModeratorId() : int
    {
        return $this->moderatorId->getValue();
    }

    /**
     * @param int $moderatorId
     */
    public function setModeratorId(int $moderatorId)
    {
        $this->moderatorId->setChanged(true);
        $this->moderatorId->setValue($moderatorId);
    }
    
    public function hasUserId(): bool
    {
        return $this->userId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getUserId() : int
    {
        return $this->userId->getValue();
    }

    /**
     * @param int $userId
     */
    public function setUserId(int $userId)
    {
        $this->userId->setChanged(true);
        $this->userId->setValue($userId);
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
    
    public function hasImportModeratorId(): bool
    {
        return $this->importModeratorId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getImportModeratorId() : int
    {
        return $this->importModeratorId->getValue();
    }

    /**
     * @param int $importModeratorId
     */
    public function setImportModeratorId(int $importModeratorId)
    {
        $this->importModeratorId->setChanged(true);
        $this->importModeratorId->setValue($importModeratorId);
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
    
    public function hasModUserGroupId(): bool
    {
        return $this->modUserGroupId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getModUserGroupId() : int
    {
        return $this->modUserGroupId->getValue();
    }

    /**
     * @param int $modUserGroupId
     */
    public function setModUserGroupId(int $modUserGroupId)
    {
        $this->modUserGroupId->setChanged(true);
        $this->modUserGroupId->setValue($modUserGroupId);
    }
    
    public function hasPermissions2(): bool
    {
        return $this->permissions2->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPermissions2() : int
    {
        return $this->permissions2->getValue();
    }

    /**
     * @param int $permissions2
     */
    public function setPermissions2(int $permissions2)
    {
        $this->permissions2->setChanged(true);
        $this->permissions2->setValue($permissions2);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Moderator
    {
        return new Moderator();
    }
}