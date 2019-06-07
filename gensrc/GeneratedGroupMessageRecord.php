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

class GeneratedGroupMessageRecord implements Record {
    
    /** @var $gmId int */
    protected $gmId;
    
    /** @var $groupId int */
    protected $groupId;
    
    /** @var $postUserId int */
    protected $postUserId;
    
    /** @var $postUserName string */
    protected $postUserName;
    
    /** @var $dateLine int */
    protected $dateLine;
    
    /** @var $state string */
    protected $state;
    
    /** @var $title string */
    protected $title;
    
    /** @var $pageText string|null */
    protected $pageText;
    
    /** @var $ipAddress int */
    protected $ipAddress;
    
    /** @var $allowSmilie int */
    protected $allowSmilie;
    
    /** @var $reportThreadId int */
    protected $reportThreadId;
    
    public function hasGmId(): bool
    {
        return isset($this->gmId);
    }    

    /**
     * @return int
     */
    public function getGmId() : int
    {
        return $this->gmId;
    }

    /**
     * @param int $gmId
     */
    public function setGmId(int $gmId)
    {
        $this->gmId = $gmId;
    }
    
    public function hasGroupId(): bool
    {
        return isset($this->groupId);
    }    

    /**
     * @return int
     */
    public function getGroupId() : int
    {
        return $this->groupId;
    }

    /**
     * @param int $groupId
     */
    public function setGroupId(int $groupId)
    {
        $this->groupId = $groupId;
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

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): GroupMessage
    {
        return new GroupMessage();
    }
}