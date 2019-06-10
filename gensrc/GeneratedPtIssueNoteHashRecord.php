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

class GeneratedPtIssueNoteHashRecord implements Record {
    
    /** @var $issueNoteId RecordValue */
    protected $issueNoteId;
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $issueId RecordValue */
    protected $issueId;
    
    /** @var $dupeHash RecordValue */
    protected $dupeHash;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;

    public function __construct() {
		$this->issueNoteId = new RecordValue();
		$this->userId = new RecordValue();
		$this->issueId = new RecordValue();
		$this->dupeHash = new RecordValue();
		$this->dateLine = new RecordValue();
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
    
    public function hasDupeHash(): bool
    {
        return $this->dupeHash->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getDupeHash() : string
    {
        return $this->dupeHash->getValue();
    }

    /**
     * @param string $dupeHash
     */
    public function setDupeHash(string $dupeHash)
    {
        $this->dupeHash->setChanged(true);
        $this->dupeHash->setValue($dupeHash);
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
    public function __getModel(): PtIssueNoteHash
    {
        return new PtIssueNoteHash();
    }
}