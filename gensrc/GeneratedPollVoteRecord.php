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

class GeneratedPollVoteRecord implements Record {
    
    /** @var $pollVoteId RecordValue */
    protected $pollVoteId;
    
    /** @var $pollId RecordValue */
    protected $pollId;
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $voteDate RecordValue */
    protected $voteDate;
    
    /** @var $voteOption RecordValue */
    protected $voteOption;
    
    /** @var $voteType RecordValue */
    protected $voteType;

    public function __construct() {
		$this->pollVoteId = new RecordValue();
		$this->pollId = new RecordValue();
		$this->userId = new RecordValue();
		$this->voteDate = new RecordValue();
		$this->voteOption = new RecordValue();
		$this->voteType = new RecordValue();
    }
    
    public function hasPollVoteId(): bool
    {
        return $this->pollVoteId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPollVoteId() : int
    {
        return $this->pollVoteId->getValue();
    }

    /**
     * @param int $pollVoteId
     */
    public function setPollVoteId(int $pollVoteId)
    {
        $this->pollVoteId->setChanged(true);
        $this->pollVoteId->setValue($pollVoteId);
    }
    
    public function hasPollId(): bool
    {
        return $this->pollId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPollId() : int
    {
        return $this->pollId->getValue();
    }

    /**
     * @param int $pollId
     */
    public function setPollId(int $pollId)
    {
        $this->pollId->setChanged(true);
        $this->pollId->setValue($pollId);
    }
    
    public function hasUserId(): bool
    {
        return $this->userId->hasBeenSet();
    }    

    /**
     * @return int|null
     */
    public function getUserId() : ?int
    {
        return $this->userId->getValue();
    }

    /**
     * @param int|null $userId
     */
    public function setUserId(?int $userId)
    {
        $this->userId->setChanged(true);
        $this->userId->setValue($userId);
    }
    
    public function hasVoteDate(): bool
    {
        return $this->voteDate->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getVoteDate() : int
    {
        return $this->voteDate->getValue();
    }

    /**
     * @param int $voteDate
     */
    public function setVoteDate(int $voteDate)
    {
        $this->voteDate->setChanged(true);
        $this->voteDate->setValue($voteDate);
    }
    
    public function hasVoteOption(): bool
    {
        return $this->voteOption->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getVoteOption() : int
    {
        return $this->voteOption->getValue();
    }

    /**
     * @param int $voteOption
     */
    public function setVoteOption(int $voteOption)
    {
        $this->voteOption->setChanged(true);
        $this->voteOption->setValue($voteOption);
    }
    
    public function hasVoteType(): bool
    {
        return $this->voteType->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getVoteType() : int
    {
        return $this->voteType->getValue();
    }

    /**
     * @param int $voteType
     */
    public function setVoteType(int $voteType)
    {
        $this->voteType->setChanged(true);
        $this->voteType->setValue($voteType);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PollVote
    {
        return new PollVote();
    }
}