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

class GeneratedPtIssueNoteRecord implements Record {
    
    /** @var $issueNoteId int */
    private $issueNoteId;
    
    /** @var $issueId int */
    private $issueId;
    
    /** @var $dateLine int */
    private $dateLine;
    
    /** @var $pageText string */
    private $pageText;
    
    /** @var $userId int */
    private $userId;
    
    /** @var $userName string */
    private $userName;
    
    /** @var $type string */
    private $type;
    
    /** @var $isPending int */
    private $isPending;
    
    /** @var $visible string */
    private $visible;
    
    /** @var $lastEditDate int */
    private $lastEditDate;
    
    /** @var $isFirstNote int */
    private $isFirstNote;
    
    /** @var $ipAddress int */
    private $ipAddress;
    
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
    
    public function hasUserName(): bool
    {
        return isset($this->userName);
    }    

    /**
     * @return string
     */
    public function getUserName() : string
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     */
    public function setUserName(string $userName)
    {
        $this->userName = $userName;
    }
    
    public function hasType(): bool
    {
        return isset($this->type);
    }    

    /**
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->type = $type;
    }
    
    public function hasIsPending(): bool
    {
        return isset($this->isPending);
    }    

    /**
     * @return int
     */
    public function getIsPending() : int
    {
        return $this->isPending;
    }

    /**
     * @param int $isPending
     */
    public function setIsPending(int $isPending)
    {
        $this->isPending = $isPending;
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
    
    public function hasLastEditDate(): bool
    {
        return isset($this->lastEditDate);
    }    

    /**
     * @return int
     */
    public function getLastEditDate() : int
    {
        return $this->lastEditDate;
    }

    /**
     * @param int $lastEditDate
     */
    public function setLastEditDate(int $lastEditDate)
    {
        $this->lastEditDate = $lastEditDate;
    }
    
    public function hasIsFirstNote(): bool
    {
        return isset($this->isFirstNote);
    }    

    /**
     * @return int
     */
    public function getIsFirstNote() : int
    {
        return $this->isFirstNote;
    }

    /**
     * @param int $isFirstNote
     */
    public function setIsFirstNote(int $isFirstNote)
    {
        $this->isFirstNote = $isFirstNote;
    }
    
    public function hasIpAddress(): bool
    {
        return isset($this->ipAddress);
    }    

    /**
     * @return int
     */
    public function getIpAddress() : int
    {
        return $this->ipAddress;
    }

    /**
     * @param int $ipAddress
     */
    public function setIpAddress(int $ipAddress)
    {
        $this->ipAddress = $ipAddress;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PtIssueNote
    {
        return new PtIssueNote();
    }
}