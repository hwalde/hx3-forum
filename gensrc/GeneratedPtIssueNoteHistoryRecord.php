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

class GeneratedPtIssueNoteHistoryRecord implements Record {
    
    /** @var $issueNoteHistoryId int */
    private $issueNoteHistoryId;
    
    /** @var $issueNoteId int */
    private $issueNoteId;
    
    /** @var $reason string */
    private $reason;
    
    /** @var $pageText string */
    private $pageText;
    
    /** @var $visible string */
    private $visible;
    
    /** @var $dateLine int */
    private $dateLine;
    
    /** @var $userId int */
    private $userId;
    
    public function hasIssueNoteHistoryId(): bool
    {
        return isset($this->issueNoteHistoryId);
    }    

    /**
     * @return int
     */
    public function getIssueNoteHistoryId() : int
    {
        return $this->issueNoteHistoryId;
    }

    /**
     * @param int $issueNoteHistoryId
     */
    public function setIssueNoteHistoryId(int $issueNoteHistoryId)
    {
        $this->issueNoteHistoryId = $issueNoteHistoryId;
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
    
    public function hasReason(): bool
    {
        return isset($this->reason);
    }    

    /**
     * @return string
     */
    public function getReason() : string
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     */
    public function setReason(string $reason)
    {
        $this->reason = $reason;
    }
    
    public function hasPageText(): bool
    {
        return isset($this->pageText);
    }    

    /**
     * @return string
     */
    public function getPageText() : string
    {
        return $this->pageText;
    }

    /**
     * @param string $pageText
     */
    public function setPageText(string $pageText)
    {
        $this->pageText = $pageText;
    }
    
    public function hasVisible(): bool
    {
        return isset($this->visible);
    }    

    /**
     * @return string
     */
    public function getVisible() : string
    {
        return $this->visible;
    }

    /**
     * @param string $visible
     */
    public function setVisible(string $visible)
    {
        $this->visible = $visible;
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

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PtIssueNoteHistory
    {
        return new PtIssueNoteHistory();
    }
}