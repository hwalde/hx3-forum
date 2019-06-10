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

class GeneratedPtIssueVoteRecord implements Record {
    
    /** @var $issueVoteId RecordValue */
    protected $issueVoteId;
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $ipAddress RecordValue */
    protected $ipAddress;
    
    /** @var $issueId RecordValue */
    protected $issueId;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;
    
    /** @var $vote RecordValue */
    protected $vote;

    public function __construct() {
		$this->issueVoteId = new RecordValue();
		$this->userId = new RecordValue();
		$this->ipAddress = new RecordValue();
		$this->issueId = new RecordValue();
		$this->dateLine = new RecordValue();
		$this->vote = new RecordValue();
    }
    
    public function hasIssueVoteId(): bool
    {
        return $this->issueVoteId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getIssueVoteId() : int
    {
        return $this->issueVoteId->getValue();
    }

    /**
     * @param int $issueVoteId
     */
    public function setIssueVoteId(int $issueVoteId)
    {
        $this->issueVoteId->setChanged(true);
        $this->issueVoteId->setValue($issueVoteId);
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
    
    public function hasIssueId(): bool
    {
        return $this->issueId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getIssueId() : int
    {
        return $this->issueId->getValue();
    }

    /**
     * @param int $issueId
     */
    public function setIssueId(int $issueId)
    {
        $this->issueId->setChanged(true);
        $this->issueId->setValue($issueId);
    }
    
    public function hasDateLine(): bool
    {
        return $this->dateLine->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getDateLine() : int
    {
        return $this->dateLine->getValue();
    }

    /**
     * @param int $dateLine
     */
    public function setDateLine(int $dateLine)
    {
        $this->dateLine->setChanged(true);
        $this->dateLine->setValue($dateLine);
    }
    
    public function hasVote(): bool
    {
        return $this->vote->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getVote() : string
    {
        return $this->vote->getValue();
    }

    /**
     * @param string $vote
     */
    public function setVote(string $vote)
    {
        $this->vote->setChanged(true);
        $this->vote->setValue($vote);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PtIssueVote
    {
        return new PtIssueVote();
    }
}