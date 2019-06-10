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

class GeneratedUserPromotionRecord implements Record {
    
    /** @var $userpromotionid RecordValue */
    protected $userpromotionid;
    
    /** @var $userGroupId RecordValue */
    protected $userGroupId;
    
    /** @var $joinUserGroupId RecordValue */
    protected $joinUserGroupId;
    
    /** @var $reputation RecordValue */
    protected $reputation;
    
    /** @var $date RecordValue */
    protected $date;
    
    /** @var $posts RecordValue */
    protected $posts;
    
    /** @var $strategy RecordValue */
    protected $strategy;
    
    /** @var $type RecordValue */
    protected $type;

    public function __construct() {
		$this->userpromotionid = new RecordValue();
		$this->userGroupId = new RecordValue();
		$this->joinUserGroupId = new RecordValue();
		$this->reputation = new RecordValue();
		$this->date = new RecordValue();
		$this->posts = new RecordValue();
		$this->strategy = new RecordValue();
		$this->type = new RecordValue();
    }
    
    public function hasUserpromotionid(): bool
    {
        return $this->userpromotionid->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getUserpromotionid() : int
    {
        return $this->userpromotionid->getValue();
    }

    /**
     * @param int $userpromotionid
     */
    public function setUserpromotionid(int $userpromotionid)
    {
        $this->userpromotionid->setChanged(true);
        $this->userpromotionid->setValue($userpromotionid);
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
    
    public function hasJoinUserGroupId(): bool
    {
        return $this->joinUserGroupId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getJoinUserGroupId() : int
    {
        return $this->joinUserGroupId->getValue();
    }

    /**
     * @param int $joinUserGroupId
     */
    public function setJoinUserGroupId(int $joinUserGroupId)
    {
        $this->joinUserGroupId->setChanged(true);
        $this->joinUserGroupId->setValue($joinUserGroupId);
    }
    
    public function hasReputation(): bool
    {
        return $this->reputation->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getReputation() : int
    {
        return $this->reputation->getValue();
    }

    /**
     * @param int $reputation
     */
    public function setReputation(int $reputation)
    {
        $this->reputation->setChanged(true);
        $this->reputation->setValue($reputation);
    }
    
    public function hasDate(): bool
    {
        return $this->date->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getDate() : int
    {
        return $this->date->getValue();
    }

    /**
     * @param int $date
     */
    public function setDate(int $date)
    {
        $this->date->setChanged(true);
        $this->date->setValue($date);
    }
    
    public function hasPosts(): bool
    {
        return $this->posts->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPosts() : int
    {
        return $this->posts->getValue();
    }

    /**
     * @param int $posts
     */
    public function setPosts(int $posts)
    {
        $this->posts->setChanged(true);
        $this->posts->setValue($posts);
    }
    
    public function hasStrategy(): bool
    {
        return $this->strategy->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getStrategy() : int
    {
        return $this->strategy->getValue();
    }

    /**
     * @param int $strategy
     */
    public function setStrategy(int $strategy)
    {
        $this->strategy->setChanged(true);
        $this->strategy->setValue($strategy);
    }
    
    public function hasType(): bool
    {
        return $this->type->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getType() : int
    {
        return $this->type->getValue();
    }

    /**
     * @param int $type
     */
    public function setType(int $type)
    {
        $this->type->setChanged(true);
        $this->type->setValue($type);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): UserPromotion
    {
        return new UserPromotion();
    }
}