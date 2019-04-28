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

class GeneratedPollVoteRecord implements Record {
    
    /** @var $pollVoteId int */
    private $pollVoteId;
    
    /** @var $pollId int */
    private $pollId;
    
    /** @var $userId int|null */
    private $userId;
    
    /** @var $voteDate int */
    private $voteDate;
    
    /** @var $voteOption int */
    private $voteOption;
    
    /** @var $voteType int */
    private $voteType;
    
    public function hasPollVoteId(): bool
    {
        return isset($this->pollVoteId);
    }    

    /**
     * @return int
     */
    public function getPollVoteId() : int
    {
        return $this->pollVoteId;
    }

    /**
     * @param int $pollVoteId
     */
    public function setPollVoteId(int $pollVoteId)
    {
        $this->pollVoteId = $pollVoteId;
    }
    
    public function hasPollId(): bool
    {
        return isset($this->pollId);
    }    

    /**
     * @return int
     */
    public function getPollId() : int
    {
        return $this->pollId;
    }

    /**
     * @param int $pollId
     */
    public function setPollId(int $pollId)
    {
        $this->pollId = $pollId;
    }
    
    public function hasUserId(): bool
    {
        return isset($this->userId);
    }    

    /**
     * @return int|null
     */
    public function getUserId() : ?int
    {
        return $this->userId;
    }

    /**
     * @param int|null $userId
     */
    public function setUserId(?int $userId)
    {
        $this->userId = $userId;
    }
    
    public function hasVoteDate(): bool
    {
        return isset($this->voteDate);
    }    

    /**
     * @return int
     */
    public function getVoteDate() : int
    {
        return $this->voteDate;
    }

    /**
     * @param int $voteDate
     */
    public function setVoteDate(int $voteDate)
    {
        $this->voteDate = $voteDate;
    }
    
    public function hasVoteOption(): bool
    {
        return isset($this->voteOption);
    }    

    /**
     * @return int
     */
    public function getVoteOption() : int
    {
        return $this->voteOption;
    }

    /**
     * @param int $voteOption
     */
    public function setVoteOption(int $voteOption)
    {
        $this->voteOption = $voteOption;
    }
    
    public function hasVoteType(): bool
    {
        return isset($this->voteType);
    }    

    /**
     * @return int
     */
    public function getVoteType() : int
    {
        return $this->voteType;
    }

    /**
     * @param int $voteType
     */
    public function setVoteType(int $voteType)
    {
        $this->voteType = $voteType;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PollVote
    {
        return new PollVote();
    }
}