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

class GeneratedPtIssueChangeRecord implements Record {
    
    /** @var $issueChangeId int */
    private $issueChangeId;
    
    /** @var $issueId int */
    private $issueId;
    
    /** @var $userId int */
    private $userId;
    
    /** @var $dateLine int */
    private $dateLine;
    
    /** @var $issueNoteId int */
    private $issueNoteId;
    
    /** @var $field string */
    private $field;
    
    /** @var $oldValue string */
    private $oldValue;
    
    /** @var $newValue string */
    private $newValue;
    
    public function hasIssueChangeId(): bool
    {
        return isset($this->issueChangeId);
    }    

    /**
     * @return int
     */
    public function getIssueChangeId() : int
    {
        return $this->issueChangeId;
    }

    /**
     * @param int $issueChangeId
     */
    public function setIssueChangeId(int $issueChangeId)
    {
        $this->issueChangeId = $issueChangeId;
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
    
    public function hasIssueNoteId(): bool
    {
        return isset($this->issueNoteId);
    }    

    /**
     * @return int
     */
    public function getIssueNoteId() : int
    {
        return $this->issueNoteId;
    }

    /**
     * @param int $issueNoteId
     */
    public function setIssueNoteId(int $issueNoteId)
    {
        $this->issueNoteId = $issueNoteId;
    }
    
    public function hasField(): bool
    {
        return isset($this->field);
    }    

    /**
     * @return string
     */
    public function getField() : string
    {
        return $this->field;
    }

    /**
     * @param string $field
     */
    public function setField(string $field)
    {
        $this->field = $field;
    }
    
    public function hasOldValue(): bool
    {
        return isset($this->oldValue);
    }    

    /**
     * @return string
     */
    public function getOldValue() : string
    {
        return $this->oldValue;
    }

    /**
     * @param string $oldValue
     */
    public function setOldValue(string $oldValue)
    {
        $this->oldValue = $oldValue;
    }
    
    public function hasNewValue(): bool
    {
        return isset($this->newValue);
    }    

    /**
     * @return string
     */
    public function getNewValue() : string
    {
        return $this->newValue;
    }

    /**
     * @param string $newValue
     */
    public function setNewValue(string $newValue)
    {
        $this->newValue = $newValue;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PtIssueChange
    {
        return new PtIssueChange();
    }
}