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

class GeneratedVisitorMessageRecord implements Record {
    
    /** @var $vmId RecordValue */
    protected $vmId;
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $postUserId RecordValue */
    protected $postUserId;
    
    /** @var $postUserName RecordValue */
    protected $postUserName;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;
    
    /** @var $state RecordValue */
    protected $state;
    
    /** @var $title RecordValue */
    protected $title;
    
    /** @var $pageText RecordValue */
    protected $pageText;
    
    /** @var $ipAddress RecordValue */
    protected $ipAddress;
    
    /** @var $allowSmilie RecordValue */
    protected $allowSmilie;
    
    /** @var $reportThreadId RecordValue */
    protected $reportThreadId;
    
    /** @var $messageRead RecordValue */
    protected $messageRead;

    public function __construct() {
		$this->vmId = new RecordValue();
		$this->userId = new RecordValue();
		$this->postUserId = new RecordValue();
		$this->postUserName = new RecordValue();
		$this->dateLine = new RecordValue();
		$this->state = new RecordValue();
		$this->title = new RecordValue();
		$this->pageText = new RecordValue();
		$this->ipAddress = new RecordValue();
		$this->allowSmilie = new RecordValue();
		$this->reportThreadId = new RecordValue();
		$this->messageRead = new RecordValue();
    }
    
    public function hasVmId(): bool
    {
        return $this->vmId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getVmId() : int
    {
        return $this->vmId->getValue();
    }

    /**
     * @param int $vmId
     */
    public function setVmId(int $vmId)
    {
        $this->vmId->setChanged(true);
        $this->vmId->setValue($vmId);
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
    
    public function hasPostUserId(): bool
    {
        return $this->postUserId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPostUserId() : int
    {
        return $this->postUserId->getValue();
    }

    /**
     * @param int $postUserId
     */
    public function setPostUserId(int $postUserId)
    {
        $this->postUserId->setChanged(true);
        $this->postUserId->setValue($postUserId);
    }
    
    public function hasPostUserName(): bool
    {
        return $this->postUserName->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPostUserName() : string
    {
        return $this->postUserName->getValue();
    }

    /**
     * @param string $postUserName
     */
    public function setPostUserName(string $postUserName)
    {
        $this->postUserName->setChanged(true);
        $this->postUserName->setValue($postUserName);
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
    
    public function hasState(): bool
    {
        return $this->state->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getState() : string
    {
        return $this->state->getValue();
    }

    /**
     * @param string $state
     */
    public function setState(string $state)
    {
        $this->state->setChanged(true);
        $this->state->setValue($state);
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
    
    public function hasPageText(): bool
    {
        return $this->pageText->hasBeenSet();
    }    

    /**
     * @return string|null
     */
    public function getPageText() : ?string
    {
        return $this->pageText->getValue();
    }

    /**
     * @param string|null $pageText
     */
    public function setPageText(?string $pageText)
    {
        $this->pageText->setChanged(true);
        $this->pageText->setValue($pageText);
    }
    
    public function hasIpAddress(): bool
    {
        return $this->ipAddress->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getIpAddress() : int
    {
        return $this->ipAddress->getValue();
    }

    /**
     * @param int $ipAddress
     */
    public function setIpAddress(int $ipAddress)
    {
        $this->ipAddress->setChanged(true);
        $this->ipAddress->setValue($ipAddress);
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
    
    public function hasMessageRead(): bool
    {
        return $this->messageRead->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getMessageRead() : int
    {
        return $this->messageRead->getValue();
    }

    /**
     * @param int $messageRead
     */
    public function setMessageRead(int $messageRead)
    {
        $this->messageRead->setChanged(true);
        $this->messageRead->setValue($messageRead);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): VisitorMessage
    {
        return new VisitorMessage();
    }
}