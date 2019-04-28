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

class GeneratedPtIssueVoteRecord implements Record {
    
    /** @var $issueVoteId int */
    private $issueVoteId;
    
    /** @var $userId int */
    private $userId;
    
    /** @var $ipAddress string */
    private $ipAddress;
    
    /** @var $issueId int */
    private $issueId;
    
    /** @var $dateLine int */
    private $dateLine;
    
    /** @var $vote string */
    private $vote;
    
    public function hasIssueVoteId(): bool
    {
        return isset($this->issueVoteId);
    }    

    /**
     * @return int
     */
    public function getIssueVoteId() : int
    {
        return $this->issueVoteId;
    }

    /**
     * @param int $issueVoteId
     */
    public function setIssueVoteId(int $issueVoteId)
    {
        $this->issueVoteId = $issueVoteId;
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
    
    public function hasIssueId(): bool
    {
        return isset($this->issueId);
    }    

    /**
     * @return int
     */
    public function getIssueId() : int
    {
        return $this->issueId;
    }

    /**
     * @param int $issueId
     */
    public function setIssueId(int $issueId)
    {
        $this->issueId = $issueId;
    }
    
    public function hasDateLine(): bool
    {
        return isset($this->dateLine);
    }    

    /**
     * @return int
     */
    public function getDateLine() : int
    {
        return $this->dateLine;
    }

    /**
     * @param int $dateLine
     */
    public function setDateLine(int $dateLine)
    {
        $this->dateLine = $dateLine;
    }
    
    public function hasVote(): bool
    {
        return isset($this->vote);
    }    

    /**
     * @return string
     */
    public function getVote() : string
    {
        return $this->vote;
    }

    /**
     * @param string $vote
     */
    public function setVote(string $vote)
    {
        $this->vote = $vote;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PtIssueVote
    {
        return new PtIssueVote();
    }
}