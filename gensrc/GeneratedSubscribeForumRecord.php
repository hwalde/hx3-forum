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

class GeneratedSubscribeForumRecord implements Record {
    
    /** @var $subscribeForumId int */
    protected $subscribeForumId;
    
    /** @var $userId int */
    protected $userId;
    
    /** @var $forumId int */
    protected $forumId;
    
    /** @var $emailUpdate int */
    protected $emailUpdate;
    
    public function hasSubscribeForumId(): bool
    {
        return isset($this->subscribeForumId);
    }    

    /**
     * @return int
     */
    public function getSubscribeForumId() : int
    {
        return $this->subscribeForumId;
    }

    /**
     * @param int $subscribeForumId
     */
    public function setSubscribeForumId(int $subscribeForumId)
    {
        $this->subscribeForumId = $subscribeForumId;
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
    
    public function hasEmailUpdate(): bool
    {
        return isset($this->emailUpdate);
    }    

    /**
     * @return int
     */
    public function getEmailUpdate() : int
    {
        return $this->emailUpdate;
    }

    /**
     * @param int $emailUpdate
     */
    public function setEmailUpdate(int $emailUpdate)
    {
        $this->emailUpdate = $emailUpdate;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): SubscribeForum
    {
        return new SubscribeForum();
    }
}