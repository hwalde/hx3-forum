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

class GeneratedPtIssueNoteHashRecord implements Record {
    
    /** @var $issueNoteId int */
    private $issueNoteId;
    
    /** @var $userId int */
    private $userId;
    
    /** @var $issueId int */
    private $issueId;
    
    /** @var $dupeHash string */
    private $dupeHash;
    
    /** @var $dateLine int */
    private $dateLine;
    
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
    
    public function hasDupeHash(): bool
    {
        return isset($this->dupeHash);
    }    

    /**
     * @return string
     */
    public function getDupeHash() : string
    {
        return $this->dupeHash;
    }

    /**
     * @param string $dupeHash
     */
    public function setDupeHash(string $dupeHash)
    {
        $this->dupeHash = $dupeHash;
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
    public function __getModel(): PtIssueNoteHash
    {
        return new PtIssueNoteHash();
    }
}