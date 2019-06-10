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

class GeneratedUserGroupLeaderRecord implements Record {
    
    /** @var $usergroupleaderid RecordValue */
    protected $usergroupleaderid;
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $userGroupId RecordValue */
    protected $userGroupId;

    public function __construct() {
		$this->usergroupleaderid = new RecordValue();
		$this->userId = new RecordValue();
		$this->userGroupId = new RecordValue();
    }
    
    public function hasUsergroupleaderid(): bool
    {
        return $this->usergroupleaderid->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getUsergroupleaderid() : int
    {
        return $this->usergroupleaderid->getValue();
    }

    /**
     * @param int $usergroupleaderid
     */
    public function setUsergroupleaderid(int $usergroupleaderid)
    {
        $this->usergroupleaderid->setChanged(true);
        $this->usergroupleaderid->setValue($usergroupleaderid);
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
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): UserGroupLeader
    {
        return new UserGroupLeader();
    }
}