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

class GeneratedModeratorRecord implements Record {
    
    /** @var $moderatorId int */
    private $moderatorId;
    
    /** @var $userId int */
    private $userId;
    
    /** @var $forumId int */
    private $forumId;
    
    /** @var $permissions int */
    private $permissions;
    
    /** @var $importModeratorId int */
    private $importModeratorId;
    
    /** @var $moderatorUserGroupId int */
    private $moderatorUserGroupId;
    
    /** @var $modUserGroupId int */
    private $modUserGroupId;
    
    /** @var $permissions2 int */
    private $permissions2;
    
    public function hasModeratorId(): bool
    {
        return isset($this->moderatorId);
    }    

    /**
     * @return int
     */
    public function getModeratorId() : int
    {
        return $this->moderatorId;
    }

    /**
     * @param int $moderatorId
     */
    public function setModeratorId(int $moderatorId)
    {
        $this->moderatorId = $moderatorId;
    }
    
    public function hasUserId(): bool
    {
        return isset($this->userId);
    }    

    /**
     * @return int
     */
    public function getUserId() : int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId(int $userId)
    {
        $this->userId = $userId;
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
    
    public function hasImportModeratorId(): bool
    {
        return isset($this->importModeratorId);
    }    

    /**
     * @return int
     */
    public function getImportModeratorId() : int
    {
        return $this->importModeratorId;
    }

    /**
     * @param int $importModeratorId
     */
    public function setImportModeratorId(int $importModeratorId)
    {
        $this->importModeratorId = $importModeratorId;
    }
    
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
    
    public function hasModUserGroupId(): bool
    {
        return isset($this->modUserGroupId);
    }    

    /**
     * @return int
     */
    public function getModUserGroupId() : int
    {
        return $this->modUserGroupId;
    }

    /**
     * @param int $modUserGroupId
     */
    public function setModUserGroupId(int $modUserGroupId)
    {
        $this->modUserGroupId = $modUserGroupId;
    }
    
    public function hasPermissions2(): bool
    {
        return isset($this->permissions2);
    }    

    /**
     * @return int
     */
    public function getPermissions2() : int
    {
        return $this->permissions2;
    }

    /**
     * @param int $permissions2
     */
    public function setPermissions2(int $permissions2)
    {
        $this->permissions2 = $permissions2;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Moderator
    {
        return new Moderator();
    }
}