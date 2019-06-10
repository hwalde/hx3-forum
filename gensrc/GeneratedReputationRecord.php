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

class GeneratedReputationRecord implements Record {
    
    /** @var $reputationId RecordValue */
    protected $reputationId;
    
    /** @var $postId RecordValue */
    protected $postId;
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $reputation RecordValue */
    protected $reputation;
    
    /** @var $whoAdded RecordValue */
    protected $whoAdded;
    
    /** @var $reason RecordValue */
    protected $reason;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;

    public function __construct() {
		$this->reputationId = new RecordValue();
		$this->postId = new RecordValue();
		$this->userId = new RecordValue();
		$this->reputation = new RecordValue();
		$this->whoAdded = new RecordValue();
		$this->reason = new RecordValue();
		$this->dateLine = new RecordValue();
    }
    
    public function hasReputationId(): bool
    {
        return $this->reputationId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getReputationId() : int
    {
        return $this->reputationId->getValue();
    }

    /**
     * @param int $reputationId
     */
    public function setReputationId(int $reputationId)
    {
        $this->reputationId->setChanged(true);
        $this->reputationId->setValue($reputationId);
    }
    
    public function hasPostId(): bool
    {
        return $this->postId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPostId() : int
    {
        return $this->postId->getValue();
    }

    /**
     * @param int $postId
     */
    public function setPostId(int $postId)
    {
        $this->postId->setChanged(true);
        $this->postId->setValue($postId);
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
    
    public function hasReputation(): bool
    {
        return $this->reputation->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getReputation() : int
    {
        return $this->reputation->getValue();
    }

    /**
     * @param int $reputation
     */
    public function setReputation(int $reputation)
    {
        $this->reputation->setChanged(true);
        $this->reputation->setValue($reputation);
    }
    
    public function hasWhoAdded(): bool
    {
        return $this->whoAdded->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getWhoAdded() : int
    {
        return $this->whoAdded->getValue();
    }

    /**
     * @param int $whoAdded
     */
    public function setWhoAdded(int $whoAdded)
    {
        $this->whoAdded->setChanged(true);
        $this->whoAdded->setValue($whoAdded);
    }
    
    public function hasReason(): bool
    {
        return $this->reason->hasBeenSet();
    }    

    /**
     * @return string|null
     */
    public function getReason() : ?string
    {
        return $this->reason->getValue();
    }

    /**
     * @param string|null $reason
     */
    public function setReason(?string $reason)
    {
        $this->reason->setChanged(true);
        $this->reason->setValue($reason);
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
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Reputation
    {
        return new Reputation();
    }
}