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

class GeneratedUserListRecord implements Record {
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $relationid RecordValue */
    protected $relationid;
    
    /** @var $type RecordValue */
    protected $type;
    
    /** @var $friend RecordValue */
    protected $friend;

    public function __construct() {
		$this->userId = new RecordValue();
		$this->relationid = new RecordValue();
		$this->type = new RecordValue();
		$this->friend = new RecordValue();
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
    
    public function hasRelationid(): bool
    {
        return $this->relationid->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getRelationid() : int
    {
        return $this->relationid->getValue();
    }

    /**
     * @param int $relationid
     */
    public function setRelationid(int $relationid)
    {
        $this->relationid->setChanged(true);
        $this->relationid->setValue($relationid);
    }
    
    public function hasType(): bool
    {
        return $this->type->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getType() : string
    {
        return $this->type->getValue();
    }

    /**
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->type->setChanged(true);
        $this->type->setValue($type);
    }
    
    public function hasFriend(): bool
    {
        return $this->friend->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getFriend() : string
    {
        return $this->friend->getValue();
    }

    /**
     * @param string $friend
     */
    public function setFriend(string $friend)
    {
        $this->friend->setChanged(true);
        $this->friend->setValue($friend);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): UserList
    {
        return new UserList();
    }
}