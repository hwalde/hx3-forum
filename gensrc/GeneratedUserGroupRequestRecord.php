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

class GeneratedUserGroupRequestRecord implements Record {
    
    /** @var $usergrouprequestid RecordValue */
    protected $usergrouprequestid;
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $userGroupId RecordValue */
    protected $userGroupId;
    
    /** @var $reason RecordValue */
    protected $reason;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;

    public function __construct() {
		$this->usergrouprequestid = new RecordValue();
		$this->userId = new RecordValue();
		$this->userGroupId = new RecordValue();
		$this->reason = new RecordValue();
		$this->dateLine = new RecordValue();
    }
    
    public function hasUsergrouprequestid(): bool
    {
        return $this->usergrouprequestid->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getUsergrouprequestid() : int
    {
        return $this->usergrouprequestid->getValue();
    }

    /**
     * @param int $usergrouprequestid
     */
    public function setUsergrouprequestid(int $usergrouprequestid)
    {
        $this->usergrouprequestid->setChanged(true);
        $this->usergrouprequestid->setValue($usergrouprequestid);
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
    
    public function hasReason(): bool
    {
        return $this->reason->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getReason() : string
    {
        return $this->reason->getValue();
    }

    /**
     * @param string $reason
     */
    public function setReason(string $reason)
    {
        $this->reason->setChanged(true);
        $this->reason->setValue($reason);
    }
    
    public function hasDateLine(): bool
    {
        return $this->dateLine->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getDateLine() : int
    {
        return $this->dateLine->getValue();
    }

    /**
     * @param int $dateLine
     */
    public function setDateLine(int $dateLine)
    {
        $this->dateLine->setChanged(true);
        $this->dateLine->setValue($dateLine);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): UserGroupRequest
    {
        return new UserGroupRequest();
    }
}