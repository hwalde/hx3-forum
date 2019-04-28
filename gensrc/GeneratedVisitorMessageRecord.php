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

class GeneratedVisitorMessageRecord implements Record {
    
    /** @var $vmId int */
    private $vmId;
    
    /** @var $userId int */
    private $userId;
    
    /** @var $postUserId int */
    private $postUserId;
    
    /** @var $postUserName string */
    private $postUserName;
    
    /** @var $dateLine int */
    private $dateLine;
    
    /** @var $state string */
    private $state;
    
    /** @var $title string */
    private $title;
    
    /** @var $pageText string|null */
    private $pageText;
    
    /** @var $ipAddress int */
    private $ipAddress;
    
    /** @var $allowSmilie int */
    private $allowSmilie;
    
    /** @var $reportThreadId int */
    private $reportThreadId;
    
    /** @var $messageRead int */
    private $messageRead;
    
    public function hasVmId(): bool
    {
        return isset($this->vmId);
    }    

    /**
     * @return int
     */
    public function getVmId() : int
    {
        return $this->vmId;
    }

    /**
     * @param int $vmId
     */
    public function setVmId(int $vmId)
    {
        $this->vmId = $vmId;
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
    
    public function hasPostUserId(): bool
    {
        return isset($this->postUserId);
    }    

    /**
     * @return int
     */
    public function getPostUserId() : int
    {
        return $this->postUserId;
    }

    /**
     * @param int $postUserId
     */
    public function setPostUserId(int $postUserId)
    {
        $this->postUserId = $postUserId;
    }
    
    public function hasPostUserName(): bool
    {
        return isset($this->postUserName);
    }    

    /**
     * @return string
     */
    public function getPostUserName() : string
    {
        return $this->postUserName;
    }

    /**
     * @param string $postUserName
     */
    public function setPostUserName(string $postUserName)
    {
        $this->postUserName = $postUserName;
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
    
    public function hasState(): bool
    {
        return isset($this->state);
    }    

    /**
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState(string $state)
    {
        $this->state = $state;
    }
    
    public function hasTitle(): bool
    {
        return isset($this->title);
    }    

    /**
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }
    
    public function hasPageText(): bool
    {
        return isset($this->pageText);
    }    

    /**
     * @return string|null
     */
    public function getPageText() : ?string
    {
        return $this->pageText;
    }

    /**
     * @param string|null $pageText
     */
    public function setPageText(?string $pageText)
    {
        $this->pageText = $pageText;
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
    
    public function hasAllowSmilie(): bool
    {
        return isset($this->allowSmilie);
    }    

    /**
     * @return int
     */
    public function getAllowSmilie() : int
    {
        return $this->allowSmilie;
    }

    /**
     * @param int $allowSmilie
     */
    public function setAllowSmilie(int $allowSmilie)
    {
        $this->allowSmilie = $allowSmilie;
    }
    
    public function hasReportThreadId(): bool
    {
        return isset($this->reportThreadId);
    }    

    /**
     * @return int
     */
    public function getReportThreadId() : int
    {
        return $this->reportThreadId;
    }

    /**
     * @param int $reportThreadId
     */
    public function setReportThreadId(int $reportThreadId)
    {
        $this->reportThreadId = $reportThreadId;
    }
    
    public function hasMessageRead(): bool
    {
        return isset($this->messageRead);
    }    

    /**
     * @return int
     */
    public function getMessageRead() : int
    {
        return $this->messageRead;
    }

    /**
     * @param int $messageRead
     */
    public function setMessageRead(int $messageRead)
    {
        $this->messageRead = $messageRead;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): VisitorMessage
    {
        return new VisitorMessage();
    }
}