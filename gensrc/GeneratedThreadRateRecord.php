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

class GeneratedThreadRateRecord implements Record {
    
    /** @var $threadRateId RecordValue */
    protected $threadRateId;
    
    /** @var $threadId RecordValue */
    protected $threadId;
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $vote RecordValue */
    protected $vote;
    
    /** @var $ipAddress RecordValue */
    protected $ipAddress;

    public function __construct() {
		$this->threadRateId = new RecordValue();
		$this->threadId = new RecordValue();
		$this->userId = new RecordValue();
		$this->vote = new RecordValue();
		$this->ipAddress = new RecordValue();
    }
    
    public function hasThreadRateId(): bool
    {
        return $this->threadRateId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getThreadRateId() : int
    {
        return $this->threadRateId->getValue();
    }

    /**
     * @param int $threadRateId
     */
    public function setThreadRateId(int $threadRateId)
    {
        $this->threadRateId->setChanged(true);
        $this->threadRateId->setValue($threadRateId);
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
    
    public function hasVote(): bool
    {
        return $this->vote->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getVote() : int
    {
        return $this->vote->getValue();
    }

    /**
     * @param int $vote
     */
    public function setVote(int $vote)
    {
        $this->vote->setChanged(true);
        $this->vote->setValue($vote);
    }
    
    public function hasIpAddress(): bool
    {
        return $this->ipAddress->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getIpAddress() : string
    {
        return $this->ipAddress->getValue();
    }

    /**
     * @param string $ipAddress
     */
    public function setIpAddress(string $ipAddress)
    {
        $this->ipAddress->setChanged(true);
        $this->ipAddress->setValue($ipAddress);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): ThreadRate
    {
        return new ThreadRate();
    }
}