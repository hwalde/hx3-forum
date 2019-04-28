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

class GeneratedReputationRecord implements Record {
    
    /** @var $reputationId int */
    private $reputationId;
    
    /** @var $postId int */
    private $postId;
    
    /** @var $userId int */
    private $userId;
    
    /** @var $reputation int */
    private $reputation;
    
    /** @var $whoAdded int */
    private $whoAdded;
    
    /** @var $reason string|null */
    private $reason;
    
    /** @var $dateLine int */
    private $dateLine;
    
    public function hasReputationId(): bool
    {
        return isset($this->reputationId);
    }    

    /**
     * @return int
     */
    public function getReputationId() : int
    {
        return $this->reputationId;
    }

    /**
     * @param int $reputationId
     */
    public function setReputationId(int $reputationId)
    {
        $this->reputationId = $reputationId;
    }
    
    public function hasPostId(): bool
    {
        return isset($this->postId);
    }    

    /**
     * @return int
     */
    public function getPostId() : int
    {
        return $this->postId;
    }

    /**
     * @param int $postId
     */
    public function setPostId(int $postId)
    {
        $this->postId = $postId;
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
    
    public function hasReputation(): bool
    {
        return isset($this->reputation);
    }    

    /**
     * @return int
     */
    public function getReputation() : int
    {
        return $this->reputation;
    }

    /**
     * @param int $reputation
     */
    public function setReputation(int $reputation)
    {
        $this->reputation = $reputation;
    }
    
    public function hasWhoAdded(): bool
    {
        return isset($this->whoAdded);
    }    

    /**
     * @return int
     */
    public function getWhoAdded() : int
    {
        return $this->whoAdded;
    }

    /**
     * @param int $whoAdded
     */
    public function setWhoAdded(int $whoAdded)
    {
        $this->whoAdded = $whoAdded;
    }
    
    public function hasReason(): bool
    {
        return isset($this->reason);
    }    

    /**
     * @return string|null
     */
    public function getReason() : ?string
    {
        return $this->reason;
    }

    /**
     * @param string|null $reason
     */
    public function setReason(?string $reason)
    {
        $this->reason = $reason;
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

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Reputation
    {
        return new Reputation();
    }
}