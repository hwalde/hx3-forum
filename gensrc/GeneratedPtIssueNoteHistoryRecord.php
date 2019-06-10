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

class GeneratedPtIssueNoteHistoryRecord implements Record {
    
    /** @var $issueNoteHistoryId RecordValue */
    protected $issueNoteHistoryId;
    
    /** @var $issueNoteId RecordValue */
    protected $issueNoteId;
    
    /** @var $reason RecordValue */
    protected $reason;
    
    /** @var $pageText RecordValue */
    protected $pageText;
    
    /** @var $visible RecordValue */
    protected $visible;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;
    
    /** @var $userId RecordValue */
    protected $userId;

    public function __construct() {
		$this->issueNoteHistoryId = new RecordValue();
		$this->issueNoteId = new RecordValue();
		$this->reason = new RecordValue();
		$this->pageText = new RecordValue();
		$this->visible = new RecordValue();
		$this->dateLine = new RecordValue();
		$this->userId = new RecordValue();
    }
    
    public function hasIssueNoteHistoryId(): bool
    {
        return $this->issueNoteHistoryId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getIssueNoteHistoryId() : int
    {
        return $this->issueNoteHistoryId->getValue();
    }

    /**
     * @param int $issueNoteHistoryId
     */
    public function setIssueNoteHistoryId(int $issueNoteHistoryId)
    {
        $this->issueNoteHistoryId->setChanged(true);
        $this->issueNoteHistoryId->setValue($issueNoteHistoryId);
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
    
    public function hasReason(): bool
    {
        return $this->reason->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getReason() : string
    {
        return $this->reason->getValue();
    }

    /**
     * @param string $reason
     */
    public function setReason(string $reason)
    {
        $this->reason->setChanged(true);
        $this->reason->setValue($reason);
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
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PtIssueNoteHistory
    {
        return new PtIssueNoteHistory();
    }
}