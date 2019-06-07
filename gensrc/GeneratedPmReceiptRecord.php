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

class GeneratedPmReceiptRecord implements Record {
    
    /** @var $pmId int */
    protected $pmId;
    
    /** @var $userId int */
    protected $userId;
    
    /** @var $toUserId int */
    protected $toUserId;
    
    /** @var $toUserName string */
    protected $toUserName;
    
    /** @var $title string */
    protected $title;
    
    /** @var $sendTime int */
    protected $sendTime;
    
    /** @var $readTime int */
    protected $readTime;
    
    /** @var $denied int */
    protected $denied;
    
    public function hasPmId(): bool
    {
        return isset($this->pmId);
    }    

    /**
     * @return int
     */
    public function getPmId() : int
    {
        return $this->pmId;
    }

    /**
     * @param int $pmId
     */
    public function setPmId(int $pmId)
    {
        $this->pmId = $pmId;
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
    
    public function hasToUserId(): bool
    {
        return isset($this->toUserId);
    }    

    /**
     * @return int
     */
    public function getToUserId() : int
    {
        return $this->toUserId;
    }

    /**
     * @param int $toUserId
     */
    public function setToUserId(int $toUserId)
    {
        $this->toUserId = $toUserId;
    }
    
    public function hasToUserName(): bool
    {
        return isset($this->toUserName);
    }    

    /**
     * @return string
     */
    public function getToUserName() : string
    {
        return $this->toUserName;
    }

    /**
     * @param string $toUserName
     */
    public function setToUserName(string $toUserName)
    {
        $this->toUserName = $toUserName;
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
    
    public function hasSendTime(): bool
    {
        return isset($this->sendTime);
    }    

    /**
     * @return int
     */
    public function getSendTime() : int
    {
        return $this->sendTime;
    }

    /**
     * @param int $sendTime
     */
    public function setSendTime(int $sendTime)
    {
        $this->sendTime = $sendTime;
    }
    
    public function hasReadTime(): bool
    {
        return isset($this->readTime);
    }    

    /**
     * @return int
     */
    public function getReadTime() : int
    {
        return $this->readTime;
    }

    /**
     * @param int $readTime
     */
    public function setReadTime(int $readTime)
    {
        $this->readTime = $readTime;
    }
    
    public function hasDenied(): bool
    {
        return isset($this->denied);
    }    

    /**
     * @return int
     */
    public function getDenied() : int
    {
        return $this->denied;
    }

    /**
     * @param int $denied
     */
    public function setDenied(int $denied)
    {
        $this->denied = $denied;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PmReceipt
    {
        return new PmReceipt();
    }
}