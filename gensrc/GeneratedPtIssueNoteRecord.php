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

class GeneratedPtIssueNoteRecord implements Record {
    
    /** @var $issueNoteId RecordValue */
    protected $issueNoteId;
    
    /** @var $issueId RecordValue */
    protected $issueId;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;
    
    /** @var $pageText RecordValue */
    protected $pageText;
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $userName RecordValue */
    protected $userName;
    
    /** @var $type RecordValue */
    protected $type;
    
    /** @var $isPending RecordValue */
    protected $isPending;
    
    /** @var $visible RecordValue */
    protected $visible;
    
    /** @var $lastEditDate RecordValue */
    protected $lastEditDate;
    
    /** @var $isFirstNote RecordValue */
    protected $isFirstNote;
    
    /** @var $ipAddress RecordValue */
    protected $ipAddress;

    public function __construct() {
		$this->issueNoteId = new RecordValue();
		$this->issueId = new RecordValue();
		$this->dateLine = new RecordValue();
		$this->pageText = new RecordValue();
		$this->userId = new RecordValue();
		$this->userName = new RecordValue();
		$this->type = new RecordValue();
		$this->isPending = new RecordValue();
		$this->visible = new RecordValue();
		$this->lastEditDate = new RecordValue();
		$this->isFirstNote = new RecordValue();
		$this->ipAddress = new RecordValue();
    }
    
    public function hasIssueNoteId(): bool
    {
        return $this->issueNoteId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getIssueNoteId() : int
    {
        return $this->issueNoteId->getValue();
    }

    /**
     * @param int $issueNoteId
     */
    public function setIssueNoteId(int $issueNoteId)
    {
        $this->issueNoteId->setChanged(true);
        $this->issueNoteId->setValue($issueNoteId);
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
    
    public function hasPageText(): bool
    {
        return $this->pageText->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPageText() : string
    {
        return $this->pageText->getValue();
    }

    /**
     * @param string $pageText
     */
    public function setPageText(string $pageText)
    {
        $this->pageText->setChanged(true);
        $this->pageText->setValue($pageText);
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
    
    public function hasUserName(): bool
    {
        return $this->userName->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getUserName() : string
    {
        return $this->userName->getValue();
    }

    /**
     * @param string $userName
     */
    public function setUserName(string $userName)
    {
        $this->userName->setChanged(true);
        $this->userName->setValue($userName);
    }
    
    public function hasType(): bool
    {
        return $this->type->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getType() : string
    {
        return $this->type->getValue();
    }

    /**
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->type->setChanged(true);
        $this->type->setValue($type);
    }
    
    public function hasIsPending(): bool
    {
        return $this->isPending->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getIsPending() : int
    {
        return $this->isPending->getValue();
    }

    /**
     * @param int $isPending
     */
    public function setIsPending(int $isPending)
    {
        $this->isPending->setChanged(true);
        $this->isPending->setValue($isPending);
    }
    
    public function hasVisible(): bool
    {
        return $this->visible->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getVisible() : string
    {
        return $this->visible->getValue();
    }

    /**
     * @param string $visible
     */
    public function setVisible(string $visible)
    {
        $this->visible->setChanged(true);
        $this->visible->setValue($visible);
    }
    
    public function hasLastEditDate(): bool
    {
        return $this->lastEditDate->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getLastEditDate() : int
    {
        return $this->lastEditDate->getValue();
    }

    /**
     * @param int $lastEditDate
     */
    public function setLastEditDate(int $lastEditDate)
    {
        $this->lastEditDate->setChanged(true);
        $this->lastEditDate->setValue($lastEditDate);
    }
    
    public function hasIsFirstNote(): bool
    {
        return $this->isFirstNote->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getIsFirstNote() : int
    {
        return $this->isFirstNote->getValue();
    }

    /**
     * @param int $isFirstNote
     */
    public function setIsFirstNote(int $isFirstNote)
    {
        $this->isFirstNote->setChanged(true);
        $this->isFirstNote->setValue($isFirstNote);
    }
    
    public function hasIpAddress(): bool
    {
        return $this->ipAddress->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getIpAddress() : int
    {
        return $this->ipAddress->getValue();
    }

    /**
     * @param int $ipAddress
     */
    public function setIpAddress(int $ipAddress)
    {
        $this->ipAddress->setChanged(true);
        $this->ipAddress->setValue($ipAddress);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PtIssueNote
    {
        return new PtIssueNote();
    }
}