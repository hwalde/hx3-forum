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

class GeneratedSubscribeThreadRecord implements Record {
    
    /** @var $subscribeThreadId RecordValue */
    protected $subscribeThreadId;
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $threadId RecordValue */
    protected $threadId;
    
    /** @var $emailUpdate RecordValue */
    protected $emailUpdate;
    
    /** @var $folderId RecordValue */
    protected $folderId;
    
    /** @var $canView RecordValue */
    protected $canView;

    public function __construct() {
		$this->subscribeThreadId = new RecordValue();
		$this->userId = new RecordValue();
		$this->threadId = new RecordValue();
		$this->emailUpdate = new RecordValue();
		$this->folderId = new RecordValue();
		$this->canView = new RecordValue();
    }
    
    public function hasSubscribeThreadId(): bool
    {
        return $this->subscribeThreadId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getSubscribeThreadId() : int
    {
        return $this->subscribeThreadId->getValue();
    }

    /**
     * @param int $subscribeThreadId
     */
    public function setSubscribeThreadId(int $subscribeThreadId)
    {
        $this->subscribeThreadId->setChanged(true);
        $this->subscribeThreadId->setValue($subscribeThreadId);
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
    
    public function hasThreadId(): bool
    {
        return $this->threadId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getThreadId() : int
    {
        return $this->threadId->getValue();
    }

    /**
     * @param int $threadId
     */
    public function setThreadId(int $threadId)
    {
        $this->threadId->setChanged(true);
        $this->threadId->setValue($threadId);
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
    
    public function hasFolderId(): bool
    {
        return $this->folderId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getFolderId() : int
    {
        return $this->folderId->getValue();
    }

    /**
     * @param int $folderId
     */
    public function setFolderId(int $folderId)
    {
        $this->folderId->setChanged(true);
        $this->folderId->setValue($folderId);
    }
    
    public function hasCanView(): bool
    {
        return $this->canView->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getCanView() : int
    {
        return $this->canView->getValue();
    }

    /**
     * @param int $canView
     */
    public function setCanView(int $canView)
    {
        $this->canView->setChanged(true);
        $this->canView->setValue($canView);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): SubscribeThread
    {
        return new SubscribeThread();
    }
}