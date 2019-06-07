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

class GeneratedInfractionRecord implements Record {
    
    /** @var $infractionId int */
    protected $infractionId;
    
    /** @var $infractionLevelId int */
    protected $infractionLevelId;
    
    /** @var $postId int */
    protected $postId;
    
    /** @var $userId int */
    protected $userId;
    
    /** @var $whoAdded int */
    protected $whoAdded;
    
    /** @var $points int */
    protected $points;
    
    /** @var $dateLine int */
    protected $dateLine;
    
    /** @var $note string */
    protected $note;
    
    /** @var $action int */
    protected $action;
    
    /** @var $actionDateline int */
    protected $actionDateline;
    
    /** @var $actionUserId int */
    protected $actionUserId;
    
    /** @var $actionReason string */
    protected $actionReason;
    
    /** @var $expires int */
    protected $expires;
    
    /** @var $threadId int */
    protected $threadId;
    
    /** @var $customReason string */
    protected $customReason;
    
    public function hasInfractionId(): bool
    {
        return isset($this->infractionId);
    }    

    /**
     * @return int
     */
    public function getInfractionId() : int
    {
        return $this->infractionId;
    }

    /**
     * @param int $infractionId
     */
    public function setInfractionId(int $infractionId)
    {
        $this->infractionId = $infractionId;
    }
    
    public function hasInfractionLevelId(): bool
    {
        return isset($this->infractionLevelId);
    }    

    /**
     * @return int
     */
    public function getInfractionLevelId() : int
    {
        return $this->infractionLevelId;
    }

    /**
     * @param int $infractionLevelId
     */
    public function setInfractionLevelId(int $infractionLevelId)
    {
        $this->infractionLevelId = $infractionLevelId;
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
    
    public function hasPoints(): bool
    {
        return isset($this->points);
    }    

    /**
     * @return int
     */
    public function getPoints() : int
    {
        return $this->points;
    }

    /**
     * @param int $points
     */
    public function setPoints(int $points)
    {
        $this->points = $points;
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
    
    public function hasNote(): bool
    {
        return isset($this->note);
    }    

    /**
     * @return string
     */
    public function getNote() : string
    {
        return $this->note;
    }

    /**
     * @param string $note
     */
    public function setNote(string $note)
    {
        $this->note = $note;
    }
    
    public function hasAction(): bool
    {
        return isset($this->action);
    }    

    /**
     * @return int
     */
    public function getAction() : int
    {
        return $this->action;
    }

    /**
     * @param int $action
     */
    public function setAction(int $action)
    {
        $this->action = $action;
    }
    
    public function hasActionDateline(): bool
    {
        return isset($this->actionDateline);
    }    

    /**
     * @return int
     */
    public function getActionDateline() : int
    {
        return $this->actionDateline;
    }

    /**
     * @param int $actionDateline
     */
    public function setActionDateline(int $actionDateline)
    {
        $this->actionDateline = $actionDateline;
    }
    
    public function hasActionUserId(): bool
    {
        return isset($this->actionUserId);
    }    

    /**
     * @return int
     */
    public function getActionUserId() : int
    {
        return $this->actionUserId;
    }

    /**
     * @param int $actionUserId
     */
    public function setActionUserId(int $actionUserId)
    {
        $this->actionUserId = $actionUserId;
    }
    
    public function hasActionReason(): bool
    {
        return isset($this->actionReason);
    }    

    /**
     * @return string
     */
    public function getActionReason() : string
    {
        return $this->actionReason;
    }

    /**
     * @param string $actionReason
     */
    public function setActionReason(string $actionReason)
    {
        $this->actionReason = $actionReason;
    }
    
    public function hasExpires(): bool
    {
        return isset($this->expires);
    }    

    /**
     * @return int
     */
    public function getExpires() : int
    {
        return $this->expires;
    }

    /**
     * @param int $expires
     */
    public function setExpires(int $expires)
    {
        $this->expires = $expires;
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
    
    public function hasCustomReason(): bool
    {
        return isset($this->customReason);
    }    

    /**
     * @return string
     */
    public function getCustomReason() : string
    {
        return $this->customReason;
    }

    /**
     * @param string $customReason
     */
    public function setCustomReason(string $customReason)
    {
        $this->customReason = $customReason;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Infraction
    {
        return new Infraction();
    }
}