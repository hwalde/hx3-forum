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

class GeneratedSubscribeForumRecord implements Record {
    
    /** @var $subscribeForumId RecordValue */
    protected $subscribeForumId;
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $forumId RecordValue */
    protected $forumId;
    
    /** @var $emailUpdate RecordValue */
    protected $emailUpdate;

    public function __construct() {
		$this->subscribeForumId = new RecordValue();
		$this->userId = new RecordValue();
		$this->forumId = new RecordValue();
		$this->emailUpdate = new RecordValue();
    }
    
    public function hasSubscribeForumId(): bool
    {
        return $this->subscribeForumId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getSubscribeForumId() : int
    {
        return $this->subscribeForumId->getValue();
    }

    /**
     * @param int $subscribeForumId
     */
    public function setSubscribeForumId(int $subscribeForumId)
    {
        $this->subscribeForumId->setChanged(true);
        $this->subscribeForumId->setValue($subscribeForumId);
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
    
    public function hasForumId(): bool
    {
        return $this->forumId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getForumId() : int
    {
        return $this->forumId->getValue();
    }

    /**
     * @param int $forumId
     */
    public function setForumId(int $forumId)
    {
        $this->forumId->setChanged(true);
        $this->forumId->setValue($forumId);
    }
    
    public function hasEmailUpdate(): bool
    {
        return $this->emailUpdate->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getEmailUpdate() : int
    {
        return $this->emailUpdate->getValue();
    }

    /**
     * @param int $emailUpdate
     */
    public function setEmailUpdate(int $emailUpdate)
    {
        $this->emailUpdate->setChanged(true);
        $this->emailUpdate->setValue($emailUpdate);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): SubscribeForum
    {
        return new SubscribeForum();
    }
}