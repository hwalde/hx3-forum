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

class GeneratedSubscriptionLogRecord implements Record {
    
    /** @var $subscriptionLogId int */
    protected $subscriptionLogId;
    
    /** @var $subscriptionId int */
    protected $subscriptionId;
    
    /** @var $userId int */
    protected $userId;
    
    /** @var $pUserGroupId int */
    protected $pUserGroupId;
    
    /** @var $status int */
    protected $status;
    
    /** @var $regDate int */
    protected $regDate;
    
    /** @var $expiryDate int */
    protected $expiryDate;
    
    public function hasSubscriptionLogId(): bool
    {
        return isset($this->subscriptionLogId);
    }    

    /**
     * @return int
     */
    public function getSubscriptionLogId() : int
    {
        return $this->subscriptionLogId;
    }

    /**
     * @param int $subscriptionLogId
     */
    public function setSubscriptionLogId(int $subscriptionLogId)
    {
        $this->subscriptionLogId = $subscriptionLogId;
    }
    
    public function hasSubscriptionId(): bool
    {
        return isset($this->subscriptionId);
    }    

    /**
     * @return int
     */
    public function getSubscriptionId() : int
    {
        return $this->subscriptionId;
    }

    /**
     * @param int $subscriptionId
     */
    public function setSubscriptionId(int $subscriptionId)
    {
        $this->subscriptionId = $subscriptionId;
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
    
    public function hasPUserGroupId(): bool
    {
        return isset($this->pUserGroupId);
    }    

    /**
     * @return int
     */
    public function getPUserGroupId() : int
    {
        return $this->pUserGroupId;
    }

    /**
     * @param int $pUserGroupId
     */
    public function setPUserGroupId(int $pUserGroupId)
    {
        $this->pUserGroupId = $pUserGroupId;
    }
    
    public function hasStatus(): bool
    {
        return isset($this->status);
    }    

    /**
     * @return int
     */
    public function getStatus() : int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(int $status)
    {
        $this->status = $status;
    }
    
    public function hasRegDate(): bool
    {
        return isset($this->regDate);
    }    

    /**
     * @return int
     */
    public function getRegDate() : int
    {
        return $this->regDate;
    }

    /**
     * @param int $regDate
     */
    public function setRegDate(int $regDate)
    {
        $this->regDate = $regDate;
    }
    
    public function hasExpiryDate(): bool
    {
        return isset($this->expiryDate);
    }    

    /**
     * @return int
     */
    public function getExpiryDate() : int
    {
        return $this->expiryDate;
    }

    /**
     * @param int $expiryDate
     */
    public function setExpiryDate(int $expiryDate)
    {
        $this->expiryDate = $expiryDate;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): SubscriptionLog
    {
        return new SubscriptionLog();
    }
}