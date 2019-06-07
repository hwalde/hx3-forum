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

class GeneratedPtIssuePetitionRecord implements Record {
    
    /** @var $issueNoteId int */
    protected $issueNoteId;
    
    /** @var $petitionStatusId int */
    protected $petitionStatusId;
    
    /** @var $resolution string */
    protected $resolution;
    
    /** @var $resolveUserId int */
    protected $resolveUserId;
    
    /** @var $resolveDate int */
    protected $resolveDate;
    
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
    
    public function hasPetitionStatusId(): bool
    {
        return isset($this->petitionStatusId);
    }    

    /**
     * @return int
     */
    public function getPetitionStatusId() : int
    {
        return $this->petitionStatusId;
    }

    /**
     * @param int $petitionStatusId
     */
    public function setPetitionStatusId(int $petitionStatusId)
    {
        $this->petitionStatusId = $petitionStatusId;
    }
    
    public function hasResolution(): bool
    {
        return isset($this->resolution);
    }    

    /**
     * @return string
     */
    public function getResolution() : string
    {
        return $this->resolution;
    }

    /**
     * @param string $resolution
     */
    public function setResolution(string $resolution)
    {
        $this->resolution = $resolution;
    }
    
    public function hasResolveUserId(): bool
    {
        return isset($this->resolveUserId);
    }    

    /**
     * @return int
     */
    public function getResolveUserId() : int
    {
        return $this->resolveUserId;
    }

    /**
     * @param int $resolveUserId
     */
    public function setResolveUserId(int $resolveUserId)
    {
        $this->resolveUserId = $resolveUserId;
    }
    
    public function hasResolveDate(): bool
    {
        return isset($this->resolveDate);
    }    

    /**
     * @return int
     */
    public function getResolveDate() : int
    {
        return $this->resolveDate;
    }

    /**
     * @param int $resolveDate
     */
    public function setResolveDate(int $resolveDate)
    {
        $this->resolveDate = $resolveDate;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PtIssuePetition
    {
        return new PtIssuePetition();
    }
}