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

class GeneratedUserGroupRequestRecord implements Record {
    
    /** @var $usergrouprequestid int */
    protected $usergrouprequestid;
    
    /** @var $userId int */
    protected $userId;
    
    /** @var $userGroupId int */
    protected $userGroupId;
    
    /** @var $reason string */
    protected $reason;
    
    /** @var $dateLine int */
    protected $dateLine;
    
    public function hasUsergrouprequestid(): bool
    {
        return isset($this->usergrouprequestid);
    }    

    /**
     * @return int
     */
    public function getUsergrouprequestid() : int
    {
        return $this->usergrouprequestid;
    }

    /**
     * @param int $usergrouprequestid
     */
    public function setUsergrouprequestid(int $usergrouprequestid)
    {
        $this->usergrouprequestid = $usergrouprequestid;
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
    
    public function hasReason(): bool
    {
        return isset($this->reason);
    }    

    /**
     * @return string
     */
    public function getReason() : string
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     */
    public function setReason(string $reason)
    {
        $this->reason = $reason;
    }
    
    public function hasDateLine(): bool
    {
        return isset($this->dateLine);
    }    

    /**
     * @return int
     */
    public function getDateLine() : int
    {
        return $this->dateLine;
    }

    /**
     * @param int $dateLine
     */
    public function setDateLine(int $dateLine)
    {
        $this->dateLine = $dateLine;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): UserGroupRequest
    {
        return new UserGroupRequest();
    }
}