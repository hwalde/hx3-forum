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

class GeneratedUserListRecord implements Record {
    
    /** @var $userId int */
    protected $userId;
    
    /** @var $relationid int */
    protected $relationid;
    
    /** @var $type string */
    protected $type;
    
    /** @var $friend string */
    protected $friend;
    
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
    
    public function hasRelationid(): bool
    {
        return isset($this->relationid);
    }    

    /**
     * @return int
     */
    public function getRelationid() : int
    {
        return $this->relationid;
    }

    /**
     * @param int $relationid
     */
    public function setRelationid(int $relationid)
    {
        $this->relationid = $relationid;
    }
    
    public function hasType(): bool
    {
        return isset($this->type);
    }    

    /**
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->type = $type;
    }
    
    public function hasFriend(): bool
    {
        return isset($this->friend);
    }    

    /**
     * @return string
     */
    public function getFriend() : string
    {
        return $this->friend;
    }

    /**
     * @param string $friend
     */
    public function setFriend(string $friend)
    {
        $this->friend = $friend;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): UserList
    {
        return new UserList();
    }
}