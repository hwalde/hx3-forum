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

class GeneratedUserPromotionRecord implements Record {
    
    /** @var $userpromotionid int */
    protected $userpromotionid;
    
    /** @var $userGroupId int */
    protected $userGroupId;
    
    /** @var $joinUserGroupId int */
    protected $joinUserGroupId;
    
    /** @var $reputation int */
    protected $reputation;
    
    /** @var $date int */
    protected $date;
    
    /** @var $posts int */
    protected $posts;
    
    /** @var $strategy int */
    protected $strategy;
    
    /** @var $type int */
    protected $type;
    
    public function hasUserpromotionid(): bool
    {
        return isset($this->userpromotionid);
    }    

    /**
     * @return int
     */
    public function getUserpromotionid() : int
    {
        return $this->userpromotionid;
    }

    /**
     * @param int $userpromotionid
     */
    public function setUserpromotionid(int $userpromotionid)
    {
        $this->userpromotionid = $userpromotionid;
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
    
    public function hasJoinUserGroupId(): bool
    {
        return isset($this->joinUserGroupId);
    }    

    /**
     * @return int
     */
    public function getJoinUserGroupId() : int
    {
        return $this->joinUserGroupId;
    }

    /**
     * @param int $joinUserGroupId
     */
    public function setJoinUserGroupId(int $joinUserGroupId)
    {
        $this->joinUserGroupId = $joinUserGroupId;
    }
    
    public function hasReputation(): bool
    {
        return isset($this->reputation);
    }    

    /**
     * @return int
     */
    public function getReputation() : int
    {
        return $this->reputation;
    }

    /**
     * @param int $reputation
     */
    public function setReputation(int $reputation)
    {
        $this->reputation = $reputation;
    }
    
    public function hasDate(): bool
    {
        return isset($this->date);
    }    

    /**
     * @return int
     */
    public function getDate() : int
    {
        return $this->date;
    }

    /**
     * @param int $date
     */
    public function setDate(int $date)
    {
        $this->date = $date;
    }
    
    public function hasPosts(): bool
    {
        return isset($this->posts);
    }    

    /**
     * @return int
     */
    public function getPosts() : int
    {
        return $this->posts;
    }

    /**
     * @param int $posts
     */
    public function setPosts(int $posts)
    {
        $this->posts = $posts;
    }
    
    public function hasStrategy(): bool
    {
        return isset($this->strategy);
    }    

    /**
     * @return int
     */
    public function getStrategy() : int
    {
        return $this->strategy;
    }

    /**
     * @param int $strategy
     */
    public function setStrategy(int $strategy)
    {
        $this->strategy = $strategy;
    }
    
    public function hasType(): bool
    {
        return isset($this->type);
    }    

    /**
     * @return int
     */
    public function getType() : int
    {
        return $this->type;
    }

    /**
     * @param int $type
     */
    public function setType(int $type)
    {
        $this->type = $type;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): UserPromotion
    {
        return new UserPromotion();
    }
}