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

class GeneratedPtIssuePetitionRecord implements Record {
    
    /** @var $issueNoteId RecordValue */
    protected $issueNoteId;
    
    /** @var $petitionStatusId RecordValue */
    protected $petitionStatusId;
    
    /** @var $resolution RecordValue */
    protected $resolution;
    
    /** @var $resolveUserId RecordValue */
    protected $resolveUserId;
    
    /** @var $resolveDate RecordValue */
    protected $resolveDate;

    public function __construct() {
		$this->issueNoteId = new RecordValue();
		$this->petitionStatusId = new RecordValue();
		$this->resolution = new RecordValue();
		$this->resolveUserId = new RecordValue();
		$this->resolveDate = new RecordValue();
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
    
    public function hasPetitionStatusId(): bool
    {
        return $this->petitionStatusId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPetitionStatusId() : int
    {
        return $this->petitionStatusId->getValue();
    }

    /**
     * @param int $petitionStatusId
     */
    public function setPetitionStatusId(int $petitionStatusId)
    {
        $this->petitionStatusId->setChanged(true);
        $this->petitionStatusId->setValue($petitionStatusId);
    }
    
    public function hasResolution(): bool
    {
        return $this->resolution->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getResolution() : string
    {
        return $this->resolution->getValue();
    }

    /**
     * @param string $resolution
     */
    public function setResolution(string $resolution)
    {
        $this->resolution->setChanged(true);
        $this->resolution->setValue($resolution);
    }
    
    public function hasResolveUserId(): bool
    {
        return $this->resolveUserId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getResolveUserId() : int
    {
        return $this->resolveUserId->getValue();
    }

    /**
     * @param int $resolveUserId
     */
    public function setResolveUserId(int $resolveUserId)
    {
        $this->resolveUserId->setChanged(true);
        $this->resolveUserId->setValue($resolveUserId);
    }
    
    public function hasResolveDate(): bool
    {
        return $this->resolveDate->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getResolveDate() : int
    {
        return $this->resolveDate->getValue();
    }

    /**
     * @param int $resolveDate
     */
    public function setResolveDate(int $resolveDate)
    {
        $this->resolveDate->setChanged(true);
        $this->resolveDate->setValue($resolveDate);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PtIssuePetition
    {
        return new PtIssuePetition();
    }
}