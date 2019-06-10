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

class GeneratedPtIssueChangeRecord implements Record {
    
    /** @var $issueChangeId RecordValue */
    protected $issueChangeId;
    
    /** @var $issueId RecordValue */
    protected $issueId;
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;
    
    /** @var $issueNoteId RecordValue */
    protected $issueNoteId;
    
    /** @var $field RecordValue */
    protected $field;
    
    /** @var $oldValue RecordValue */
    protected $oldValue;
    
    /** @var $newValue RecordValue */
    protected $newValue;

    public function __construct() {
		$this->issueChangeId = new RecordValue();
		$this->issueId = new RecordValue();
		$this->userId = new RecordValue();
		$this->dateLine = new RecordValue();
		$this->issueNoteId = new RecordValue();
		$this->field = new RecordValue();
		$this->oldValue = new RecordValue();
		$this->newValue = new RecordValue();
    }
    
    public function hasIssueChangeId(): bool
    {
        return $this->issueChangeId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getIssueChangeId() : int
    {
        return $this->issueChangeId->getValue();
    }

    /**
     * @param int $issueChangeId
     */
    public function setIssueChangeId(int $issueChangeId)
    {
        $this->issueChangeId->setChanged(true);
        $this->issueChangeId->setValue($issueChangeId);
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
    
    public function hasField(): bool
    {
        return $this->field->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getField() : string
    {
        return $this->field->getValue();
    }

    /**
     * @param string $field
     */
    public function setField(string $field)
    {
        $this->field->setChanged(true);
        $this->field->setValue($field);
    }
    
    public function hasOldValue(): bool
    {
        return $this->oldValue->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getOldValue() : string
    {
        return $this->oldValue->getValue();
    }

    /**
     * @param string $oldValue
     */
    public function setOldValue(string $oldValue)
    {
        $this->oldValue->setChanged(true);
        $this->oldValue->setValue($oldValue);
    }
    
    public function hasNewValue(): bool
    {
        return $this->newValue->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getNewValue() : string
    {
        return $this->newValue->getValue();
    }

    /**
     * @param string $newValue
     */
    public function setNewValue(string $newValue)
    {
        $this->newValue->setChanged(true);
        $this->newValue->setValue($newValue);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PtIssueChange
    {
        return new PtIssueChange();
    }
}