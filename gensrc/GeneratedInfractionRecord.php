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

class GeneratedInfractionRecord implements Record {
    
    /** @var $infractionId RecordValue */
    protected $infractionId;
    
    /** @var $infractionLevelId RecordValue */
    protected $infractionLevelId;
    
    /** @var $postId RecordValue */
    protected $postId;
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $whoAdded RecordValue */
    protected $whoAdded;
    
    /** @var $points RecordValue */
    protected $points;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;
    
    /** @var $note RecordValue */
    protected $note;
    
    /** @var $action RecordValue */
    protected $action;
    
    /** @var $actionDateline RecordValue */
    protected $actionDateline;
    
    /** @var $actionUserId RecordValue */
    protected $actionUserId;
    
    /** @var $actionReason RecordValue */
    protected $actionReason;
    
    /** @var $expires RecordValue */
    protected $expires;
    
    /** @var $threadId RecordValue */
    protected $threadId;
    
    /** @var $customReason RecordValue */
    protected $customReason;

    public function __construct() {
		$this->infractionId = new RecordValue();
		$this->infractionLevelId = new RecordValue();
		$this->postId = new RecordValue();
		$this->userId = new RecordValue();
		$this->whoAdded = new RecordValue();
		$this->points = new RecordValue();
		$this->dateLine = new RecordValue();
		$this->note = new RecordValue();
		$this->action = new RecordValue();
		$this->actionDateline = new RecordValue();
		$this->actionUserId = new RecordValue();
		$this->actionReason = new RecordValue();
		$this->expires = new RecordValue();
		$this->threadId = new RecordValue();
		$this->customReason = new RecordValue();
    }
    
    public function hasInfractionId(): bool
    {
        return $this->infractionId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getInfractionId() : int
    {
        return $this->infractionId->getValue();
    }

    /**
     * @param int $infractionId
     */
    public function setInfractionId(int $infractionId)
    {
        $this->infractionId->setChanged(true);
        $this->infractionId->setValue($infractionId);
    }
    
    public function hasInfractionLevelId(): bool
    {
        return $this->infractionLevelId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getInfractionLevelId() : int
    {
        return $this->infractionLevelId->getValue();
    }

    /**
     * @param int $infractionLevelId
     */
    public function setInfractionLevelId(int $infractionLevelId)
    {
        $this->infractionLevelId->setChanged(true);
        $this->infractionLevelId->setValue($infractionLevelId);
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
    
    public function hasPoints(): bool
    {
        return $this->points->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPoints() : int
    {
        return $this->points->getValue();
    }

    /**
     * @param int $points
     */
    public function setPoints(int $points)
    {
        $this->points->setChanged(true);
        $this->points->setValue($points);
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
    
    public function hasNote(): bool
    {
        return $this->note->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getNote() : string
    {
        return $this->note->getValue();
    }

    /**
     * @param string $note
     */
    public function setNote(string $note)
    {
        $this->note->setChanged(true);
        $this->note->setValue($note);
    }
    
    public function hasAction(): bool
    {
        return $this->action->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAction() : int
    {
        return $this->action->getValue();
    }

    /**
     * @param int $action
     */
    public function setAction(int $action)
    {
        $this->action->setChanged(true);
        $this->action->setValue($action);
    }
    
    public function hasActionDateline(): bool
    {
        return $this->actionDateline->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getActionDateline() : int
    {
        return $this->actionDateline->getValue();
    }

    /**
     * @param int $actionDateline
     */
    public function setActionDateline(int $actionDateline)
    {
        $this->actionDateline->setChanged(true);
        $this->actionDateline->setValue($actionDateline);
    }
    
    public function hasActionUserId(): bool
    {
        return $this->actionUserId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getActionUserId() : int
    {
        return $this->actionUserId->getValue();
    }

    /**
     * @param int $actionUserId
     */
    public function setActionUserId(int $actionUserId)
    {
        $this->actionUserId->setChanged(true);
        $this->actionUserId->setValue($actionUserId);
    }
    
    public function hasActionReason(): bool
    {
        return $this->actionReason->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getActionReason() : string
    {
        return $this->actionReason->getValue();
    }

    /**
     * @param string $actionReason
     */
    public function setActionReason(string $actionReason)
    {
        $this->actionReason->setChanged(true);
        $this->actionReason->setValue($actionReason);
    }
    
    public function hasExpires(): bool
    {
        return $this->expires->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getExpires() : int
    {
        return $this->expires->getValue();
    }

    /**
     * @param int $expires
     */
    public function setExpires(int $expires)
    {
        $this->expires->setChanged(true);
        $this->expires->setValue($expires);
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
    
    public function hasCustomReason(): bool
    {
        return $this->customReason->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getCustomReason() : string
    {
        return $this->customReason->getValue();
    }

    /**
     * @param string $customReason
     */
    public function setCustomReason(string $customReason)
    {
        $this->customReason->setChanged(true);
        $this->customReason->setValue($customReason);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Infraction
    {
        return new Infraction();
    }
}