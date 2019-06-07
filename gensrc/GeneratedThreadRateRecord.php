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

class GeneratedThreadRateRecord implements Record {
    
    /** @var $threadRateId int */
    protected $threadRateId;
    
    /** @var $threadId int */
    protected $threadId;
    
    /** @var $userId int */
    protected $userId;
    
    /** @var $vote int */
    protected $vote;
    
    /** @var $ipAddress string */
    protected $ipAddress;
    
    public function hasThreadRateId(): bool
    {
        return isset($this->threadRateId);
    }    

    /**
     * @return int
     */
    public function getThreadRateId() : int
    {
        return $this->threadRateId;
    }

    /**
     * @param int $threadRateId
     */
    public function setThreadRateId(int $threadRateId)
    {
        $this->threadRateId = $threadRateId;
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
    
    public function hasVote(): bool
    {
        return isset($this->vote);
    }    

    /**
     * @return int
     */
    public function getVote() : int
    {
        return $this->vote;
    }

    /**
     * @param int $vote
     */
    public function setVote(int $vote)
    {
        $this->vote = $vote;
    }
    
    public function hasIpAddress(): bool
    {
        return isset($this->ipAddress);
    }    

    /**
     * @return string
     */
    public function getIpAddress() : string
    {
        return $this->ipAddress;
    }

    /**
     * @param string $ipAddress
     */
    public function setIpAddress(string $ipAddress)
    {
        $this->ipAddress = $ipAddress;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): ThreadRate
    {
        return new ThreadRate();
    }
}