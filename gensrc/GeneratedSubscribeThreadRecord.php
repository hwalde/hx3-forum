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

class GeneratedSubscribeThreadRecord implements Record {
    
    /** @var $subscribeThreadId int */
    protected $subscribeThreadId;
    
    /** @var $userId int */
    protected $userId;
    
    /** @var $threadId int */
    protected $threadId;
    
    /** @var $emailUpdate int */
    protected $emailUpdate;
    
    /** @var $folderId int */
    protected $folderId;
    
    /** @var $canView int */
    protected $canView;
    
    public function hasSubscribeThreadId(): bool
    {
        return isset($this->subscribeThreadId);
    }    

    /**
     * @return int
     */
    public function getSubscribeThreadId() : int
    {
        return $this->subscribeThreadId;
    }

    /**
     * @param int $subscribeThreadId
     */
    public function setSubscribeThreadId(int $subscribeThreadId)
    {
        $this->subscribeThreadId = $subscribeThreadId;
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
    
    public function hasThreadId(): bool
    {
        return isset($this->threadId);
    }    

    /**
     * @return int
     */
    public function getThreadId() : int
    {
        return $this->threadId;
    }

    /**
     * @param int $threadId
     */
    public function setThreadId(int $threadId)
    {
        $this->threadId = $threadId;
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
    
    public function hasFolderId(): bool
    {
        return isset($this->folderId);
    }    

    /**
     * @return int
     */
    public function getFolderId() : int
    {
        return $this->folderId;
    }

    /**
     * @param int $folderId
     */
    public function setFolderId(int $folderId)
    {
        $this->folderId = $folderId;
    }
    
    public function hasCanView(): bool
    {
        return isset($this->canView);
    }    

    /**
     * @return int
     */
    public function getCanView() : int
    {
        return $this->canView;
    }

    /**
     * @param int $canView
     */
    public function setCanView(int $canView)
    {
        $this->canView = $canView;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): SubscribeThread
    {
        return new SubscribeThread();
    }
}