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

class GeneratedSubscriptionLogRecord implements Record {
    
    /** @var $subscriptionLogId RecordValue */
    protected $subscriptionLogId;
    
    /** @var $subscriptionId RecordValue */
    protected $subscriptionId;
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $pUserGroupId RecordValue */
    protected $pUserGroupId;
    
    /** @var $status RecordValue */
    protected $status;
    
    /** @var $regDate RecordValue */
    protected $regDate;
    
    /** @var $expiryDate RecordValue */
    protected $expiryDate;

    public function __construct() {
		$this->subscriptionLogId = new RecordValue();
		$this->subscriptionId = new RecordValue();
		$this->userId = new RecordValue();
		$this->pUserGroupId = new RecordValue();
		$this->status = new RecordValue();
		$this->regDate = new RecordValue();
		$this->expiryDate = new RecordValue();
    }
    
    public function hasSubscriptionLogId(): bool
    {
        return $this->subscriptionLogId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getSubscriptionLogId() : int
    {
        return $this->subscriptionLogId->getValue();
    }

    /**
     * @param int $subscriptionLogId
     */
    public function setSubscriptionLogId(int $subscriptionLogId)
    {
        $this->subscriptionLogId->setChanged(true);
        $this->subscriptionLogId->setValue($subscriptionLogId);
    }
    
    public function hasSubscriptionId(): bool
    {
        return $this->subscriptionId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getSubscriptionId() : int
    {
        return $this->subscriptionId->getValue();
    }

    /**
     * @param int $subscriptionId
     */
    public function setSubscriptionId(int $subscriptionId)
    {
        $this->subscriptionId->setChanged(true);
        $this->subscriptionId->setValue($subscriptionId);
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
    
    public function hasPUserGroupId(): bool
    {
        return $this->pUserGroupId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPUserGroupId() : int
    {
        return $this->pUserGroupId->getValue();
    }

    /**
     * @param int $pUserGroupId
     */
    public function setPUserGroupId(int $pUserGroupId)
    {
        $this->pUserGroupId->setChanged(true);
        $this->pUserGroupId->setValue($pUserGroupId);
    }
    
    public function hasStatus(): bool
    {
        return $this->status->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getStatus() : int
    {
        return $this->status->getValue();
    }

    /**
     * @param int $status
     */
    public function setStatus(int $status)
    {
        $this->status->setChanged(true);
        $this->status->setValue($status);
    }
    
    public function hasRegDate(): bool
    {
        return $this->regDate->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getRegDate() : int
    {
        return $this->regDate->getValue();
    }

    /**
     * @param int $regDate
     */
    public function setRegDate(int $regDate)
    {
        $this->regDate->setChanged(true);
        $this->regDate->setValue($regDate);
    }
    
    public function hasExpiryDate(): bool
    {
        return $this->expiryDate->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getExpiryDate() : int
    {
        return $this->expiryDate->getValue();
    }

    /**
     * @param int $expiryDate
     */
    public function setExpiryDate(int $expiryDate)
    {
        $this->expiryDate->setChanged(true);
        $this->expiryDate->setValue($expiryDate);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): SubscriptionLog
    {
        return new SubscriptionLog();
    }
}