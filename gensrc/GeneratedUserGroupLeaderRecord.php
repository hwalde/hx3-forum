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

class GeneratedUserGroupLeaderRecord implements Record {
    
    /** @var $usergroupleaderid int */
    protected $usergroupleaderid;
    
    /** @var $userId int */
    protected $userId;
    
    /** @var $userGroupId int */
    protected $userGroupId;
    
    public function hasUsergroupleaderid(): bool
    {
        return isset($this->usergroupleaderid);
    }    

    /**
     * @return int
     */
    public function getUsergroupleaderid() : int
    {
        return $this->usergroupleaderid;
    }

    /**
     * @param int $usergroupleaderid
     */
    public function setUsergroupleaderid(int $usergroupleaderid)
    {
        $this->usergroupleaderid = $usergroupleaderid;
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

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): UserGroupLeader
    {
        return new UserGroupLeader();
    }
}