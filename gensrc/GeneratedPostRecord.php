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

class GeneratedPostRecord implements Record {
    
    /** @var $postId int */
    private $postId;
    
    /** @var $threadId int */
    private $threadId;
    
    /** @var $parentId int */
    private $parentId;
    
    /** @var $userName string */
    private $userName;
    
    /** @var $userId int */
    private $userId;
    
    /** @var $title string */
    private $title;
    
    /** @var $dateLine int */
    private $dateLine;
    
    /** @var $pageText string */
    private $pageText;
    
    /** @var $allowSmilie int */
    private $allowSmilie;
    
    /** @var $showSignature int */
    private $showSignature;
    
    /** @var $ipAddress string */
    private $ipAddress;
    
    /** @var $iconId int */
    private $iconId;
    
    /** @var $visible int */
    private $visible;
    
    /** @var $attach int */
    private $attach;
    
    /** @var $importThreadId int */
    private $importThreadId;
    
    /** @var $importpostId int */
    private $importpostId;
    
    /** @var $infraction int|null */
    private $infraction;
    
    /** @var $reportThreadId int|null */
    private $reportThreadId;
    
    public function hasPostId(): bool
    {
        return isset($this->postId);
    }    

    /**
     * @return int
     */
    public function getPostId() : int
    {
        return $this->postId;
    }

    /**
     * @param int $postId
     */
    public function setPostId(int $postId)
    {
        $this->postId = $postId;
    }
    
    public function hasThreadId(): bool
    {
        return isset($this->threadId);
    }    

    /**
     * @return int
     */
    public function getThreadId() : int
    {
        return $this->threadId;
    }

    /**
     * @param int $threadId
     */
    public function setThreadId(int $threadId)
    {
        $this->threadId = $threadId;
    }
    
    public function hasParentId(): bool
    {
        return isset($this->parentId);
    }    

    /**
     * @return int
     */
    public function getParentId() : int
    {
        return $this->parentId;
    }

    /**
     * @param int $parentId
     */
    public function setParentId(int $parentId)
    {
        $this->parentId = $parentId;
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
    
    public function hasShowSignature(): bool
    {
        return isset($this->showSignature);
    }    

    /**
     * @return int
     */
    public function getShowSignature() : int
    {
        return $this->showSignature;
    }

    /**
     * @param int $showSignature
     */
    public function setShowSignature(int $showSignature)
    {
        $this->showSignature = $showSignature;
    }
    
    public function hasIpAddress(): bool
    {
        return isset($this->ipAddress);
    }    

    /**
     * @return string
     */
    public function getIpAddress() : string
    {
        return $this->ipAddress;
    }

    /**
     * @param string $ipAddress
     */
    public function setIpAddress(string $ipAddress)
    {
        $this->ipAddress = $ipAddress;
    }
    
    public function hasIconId(): bool
    {
        return isset($this->iconId);
    }    

    /**
     * @return int
     */
    public function getIconId() : int
    {
        return $this->iconId;
    }

    /**
     * @param int $iconId
     */
    public function setIconId(int $iconId)
    {
        $this->iconId = $iconId;
    }
    
    public function hasVisible(): bool
    {
        return isset($this->visible);
    }    

    /**
     * @return int
     */
    public function getVisible() : int
    {
        return $this->visible;
    }

    /**
     * @param int $visible
     */
    public function setVisible(int $visible)
    {
        $this->visible = $visible;
    }
    
    public function hasAttach(): bool
    {
        return isset($this->attach);
    }    

    /**
     * @return int
     */
    public function getAttach() : int
    {
        return $this->attach;
    }

    /**
     * @param int $attach
     */
    public function setAttach(int $attach)
    {
        $this->attach = $attach;
    }
    
    public function hasImportThreadId(): bool
    {
        return isset($this->importThreadId);
    }    

    /**
     * @return int
     */
    public function getImportThreadId() : int
    {
        return $this->importThreadId;
    }

    /**
     * @param int $importThreadId
     */
    public function setImportThreadId(int $importThreadId)
    {
        $this->importThreadId = $importThreadId;
    }
    
    public function hasImportpostId(): bool
    {
        return isset($this->importpostId);
    }    

    /**
     * @return int
     */
    public function getImportpostId() : int
    {
        return $this->importpostId;
    }

    /**
     * @param int $importpostId
     */
    public function setImportpostId(int $importpostId)
    {
        $this->importpostId = $importpostId;
    }
    
    public function hasInfraction(): bool
    {
        return isset($this->infraction);
    }    

    /**
     * @return int|null
     */
    public function getInfraction() : ?int
    {
        return $this->infraction;
    }

    /**
     * @param int|null $infraction
     */
    public function setInfraction(?int $infraction)
    {
        $this->infraction = $infraction;
    }
    
    public function hasReportThreadId(): bool
    {
        return isset($this->reportThreadId);
    }    

    /**
     * @return int|null
     */
    public function getReportThreadId() : ?int
    {
        return $this->reportThreadId;
    }

    /**
     * @param int|null $reportThreadId
     */
    public function setReportThreadId(?int $reportThreadId)
    {
        $this->reportThreadId = $reportThreadId;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Post
    {
        return new Post();
    }
}