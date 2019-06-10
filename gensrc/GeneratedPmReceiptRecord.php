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

class GeneratedPmReceiptRecord implements Record {
    
    /** @var $pmId RecordValue */
    protected $pmId;
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $toUserId RecordValue */
    protected $toUserId;
    
    /** @var $toUserName RecordValue */
    protected $toUserName;
    
    /** @var $title RecordValue */
    protected $title;
    
    /** @var $sendTime RecordValue */
    protected $sendTime;
    
    /** @var $readTime RecordValue */
    protected $readTime;
    
    /** @var $denied RecordValue */
    protected $denied;

    public function __construct() {
		$this->pmId = new RecordValue();
		$this->userId = new RecordValue();
		$this->toUserId = new RecordValue();
		$this->toUserName = new RecordValue();
		$this->title = new RecordValue();
		$this->sendTime = new RecordValue();
		$this->readTime = new RecordValue();
		$this->denied = new RecordValue();
    }
    
    public function hasPmId(): bool
    {
        return $this->pmId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPmId() : int
    {
        return $this->pmId->getValue();
    }

    /**
     * @param int $pmId
     */
    public function setPmId(int $pmId)
    {
        $this->pmId->setChanged(true);
        $this->pmId->setValue($pmId);
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
    
    public function hasToUserId(): bool
    {
        return $this->toUserId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getToUserId() : int
    {
        return $this->toUserId->getValue();
    }

    /**
     * @param int $toUserId
     */
    public function setToUserId(int $toUserId)
    {
        $this->toUserId->setChanged(true);
        $this->toUserId->setValue($toUserId);
    }
    
    public function hasToUserName(): bool
    {
        return $this->toUserName->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getToUserName() : string
    {
        return $this->toUserName->getValue();
    }

    /**
     * @param string $toUserName
     */
    public function setToUserName(string $toUserName)
    {
        $this->toUserName->setChanged(true);
        $this->toUserName->setValue($toUserName);
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
    
    public function hasSendTime(): bool
    {
        return $this->sendTime->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getSendTime() : int
    {
        return $this->sendTime->getValue();
    }

    /**
     * @param int $sendTime
     */
    public function setSendTime(int $sendTime)
    {
        $this->sendTime->setChanged(true);
        $this->sendTime->setValue($sendTime);
    }
    
    public function hasReadTime(): bool
    {
        return $this->readTime->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getReadTime() : int
    {
        return $this->readTime->getValue();
    }

    /**
     * @param int $readTime
     */
    public function setReadTime(int $readTime)
    {
        $this->readTime->setChanged(true);
        $this->readTime->setValue($readTime);
    }
    
    public function hasDenied(): bool
    {
        return $this->denied->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getDenied() : int
    {
        return $this->denied->getValue();
    }

    /**
     * @param int $denied
     */
    public function setDenied(int $denied)
    {
        $this->denied->setChanged(true);
        $this->denied->setValue($denied);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PmReceipt
    {
        return new PmReceipt();
    }
}