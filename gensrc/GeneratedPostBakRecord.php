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

class GeneratedPostBakRecord implements Record {
    
    /** @var $postId RecordValue */
    protected $postId;
    
    /** @var $threadId RecordValue */
    protected $threadId;
    
    /** @var $parentId RecordValue */
    protected $parentId;
    
    /** @var $userName RecordValue */
    protected $userName;
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $title RecordValue */
    protected $title;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;
    
    /** @var $pageText RecordValue */
    protected $pageText;
    
    /** @var $allowSmilie RecordValue */
    protected $allowSmilie;
    
    /** @var $showSignature RecordValue */
    protected $showSignature;
    
    /** @var $ipAddress RecordValue */
    protected $ipAddress;
    
    /** @var $iconId RecordValue */
    protected $iconId;
    
    /** @var $visible RecordValue */
    protected $visible;
    
    /** @var $attach RecordValue */
    protected $attach;
    
    /** @var $importThreadId RecordValue */
    protected $importThreadId;
    
    /** @var $importpostId RecordValue */
    protected $importpostId;
    
    /** @var $infraction RecordValue */
    protected $infraction;
    
    /** @var $reportThreadId RecordValue */
    protected $reportThreadId;

    public function __construct() {
		$this->postId = new RecordValue();
		$this->threadId = new RecordValue();
		$this->parentId = new RecordValue();
		$this->userName = new RecordValue();
		$this->userId = new RecordValue();
		$this->title = new RecordValue();
		$this->dateLine = new RecordValue();
		$this->pageText = new RecordValue();
		$this->allowSmilie = new RecordValue();
		$this->showSignature = new RecordValue();
		$this->ipAddress = new RecordValue();
		$this->iconId = new RecordValue();
		$this->visible = new RecordValue();
		$this->attach = new RecordValue();
		$this->importThreadId = new RecordValue();
		$this->importpostId = new RecordValue();
		$this->infraction = new RecordValue();
		$this->reportThreadId = new RecordValue();
    }
    
    public function hasPostId(): bool
    {
        return $this->postId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPostId() : int
    {
        return $this->postId->getValue();
    }

    /**
     * @param int $postId
     */
    public function setPostId(int $postId)
    {
        $this->postId->setChanged(true);
        $this->postId->setValue($postId);
    }
    
    public function hasThreadId(): bool
    {
        return $this->threadId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getThreadId() : int
    {
        return $this->threadId->getValue();
    }

    /**
     * @param int $threadId
     */
    public function setThreadId(int $threadId)
    {
        $this->threadId->setChanged(true);
        $this->threadId->setValue($threadId);
    }
    
    public function hasParentId(): bool
    {
        return $this->parentId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getParentId() : int
    {
        return $this->parentId->getValue();
    }

    /**
     * @param int $parentId
     */
    public function setParentId(int $parentId)
    {
        $this->parentId->setChanged(true);
        $this->parentId->setValue($parentId);
    }
    
    public function hasUserName(): bool
    {
        return $this->userName->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getUserName() : string
    {
        return $this->userName->getValue();
    }

    /**
     * @param string $userName
     */
    public function setUserName(string $userName)
    {
        $this->userName->setChanged(true);
        $this->userName->setValue($userName);
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
    
    public function hasTitle(): bool
    {
        return $this->title->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title->getValue();
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title->setChanged(true);
        $this->title->setValue($title);
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
    
    public function hasPageText(): bool
    {
        return $this->pageText->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPageText() : string
    {
        return $this->pageText->getValue();
    }

    /**
     * @param string $pageText
     */
    public function setPageText(string $pageText)
    {
        $this->pageText->setChanged(true);
        $this->pageText->setValue($pageText);
    }
    
    public function hasAllowSmilie(): bool
    {
        return $this->allowSmilie->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAllowSmilie() : int
    {
        return $this->allowSmilie->getValue();
    }

    /**
     * @param int $allowSmilie
     */
    public function setAllowSmilie(int $allowSmilie)
    {
        $this->allowSmilie->setChanged(true);
        $this->allowSmilie->setValue($allowSmilie);
    }
    
    public function hasShowSignature(): bool
    {
        return $this->showSignature->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getShowSignature() : int
    {
        return $this->showSignature->getValue();
    }

    /**
     * @param int $showSignature
     */
    public function setShowSignature(int $showSignature)
    {
        $this->showSignature->setChanged(true);
        $this->showSignature->setValue($showSignature);
    }
    
    public function hasIpAddress(): bool
    {
        return $this->ipAddress->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getIpAddress() : string
    {
        return $this->ipAddress->getValue();
    }

    /**
     * @param string $ipAddress
     */
    public function setIpAddress(string $ipAddress)
    {
        $this->ipAddress->setChanged(true);
        $this->ipAddress->setValue($ipAddress);
    }
    
    public function hasIconId(): bool
    {
        return $this->iconId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getIconId() : int
    {
        return $this->iconId->getValue();
    }

    /**
     * @param int $iconId
     */
    public function setIconId(int $iconId)
    {
        $this->iconId->setChanged(true);
        $this->iconId->setValue($iconId);
    }
    
    public function hasVisible(): bool
    {
        return $this->visible->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getVisible() : int
    {
        return $this->visible->getValue();
    }

    /**
     * @param int $visible
     */
    public function setVisible(int $visible)
    {
        $this->visible->setChanged(true);
        $this->visible->setValue($visible);
    }
    
    public function hasAttach(): bool
    {
        return $this->attach->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAttach() : int
    {
        return $this->attach->getValue();
    }

    /**
     * @param int $attach
     */
    public function setAttach(int $attach)
    {
        $this->attach->setChanged(true);
        $this->attach->setValue($attach);
    }
    
    public function hasImportThreadId(): bool
    {
        return $this->importThreadId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getImportThreadId() : int
    {
        return $this->importThreadId->getValue();
    }

    /**
     * @param int $importThreadId
     */
    public function setImportThreadId(int $importThreadId)
    {
        $this->importThreadId->setChanged(true);
        $this->importThreadId->setValue($importThreadId);
    }
    
    public function hasImportpostId(): bool
    {
        return $this->importpostId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getImportpostId() : int
    {
        return $this->importpostId->getValue();
    }

    /**
     * @param int $importpostId
     */
    public function setImportpostId(int $importpostId)
    {
        $this->importpostId->setChanged(true);
        $this->importpostId->setValue($importpostId);
    }
    
    public function hasInfraction(): bool
    {
        return $this->infraction->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getInfraction() : int
    {
        return $this->infraction->getValue();
    }

    /**
     * @param int $infraction
     */
    public function setInfraction(int $infraction)
    {
        $this->infraction->setChanged(true);
        $this->infraction->setValue($infraction);
    }
    
    public function hasReportThreadId(): bool
    {
        return $this->reportThreadId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getReportThreadId() : int
    {
        return $this->reportThreadId->getValue();
    }

    /**
     * @param int $reportThreadId
     */
    public function setReportThreadId(int $reportThreadId)
    {
        $this->reportThreadId->setChanged(true);
        $this->reportThreadId->setValue($reportThreadId);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PostBak
    {
        return new PostBak();
    }
}