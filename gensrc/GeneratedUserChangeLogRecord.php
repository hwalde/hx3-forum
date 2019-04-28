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

class GeneratedUserChangeLogRecord implements Record {
    
    /** @var $changeId int */
    private $changeId;
    
    /** @var $userId int */
    private $userId;
    
    /** @var $fieldName string */
    private $fieldName;
    
    /** @var $newValue string */
    private $newValue;
    
    /** @var $oldValue string */
    private $oldValue;
    
    /** @var $adminId int */
    private $adminId;
    
    /** @var $changeTime int */
    private $changeTime;
    
    /** @var $changeUnIq string */
    private $changeUnIq;
    
    public function hasChangeId(): bool
    {
        return isset($this->changeId);
    }    

    /**
     * @return int
     */
    public function getChangeId() : int
    {
        return $this->changeId;
    }

    /**
     * @param int $changeId
     */
    public function setChangeId(int $changeId)
    {
        $this->changeId = $changeId;
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
    
    public function hasFieldName(): bool
    {
        return isset($this->fieldName);
    }    

    /**
     * @return string
     */
    public function getFieldName() : string
    {
        return $this->fieldName;
    }

    /**
     * @param string $fieldName
     */
    public function setFieldName(string $fieldName)
    {
        $this->fieldName = $fieldName;
    }
    
    public function hasNewValue(): bool
    {
        return isset($this->newValue);
    }    

    /**
     * @return string
     */
    public function getNewValue() : string
    {
        return $this->newValue;
    }

    /**
     * @param string $newValue
     */
    public function setNewValue(string $newValue)
    {
        $this->newValue = $newValue;
    }
    
    public function hasOldValue(): bool
    {
        return isset($this->oldValue);
    }    

    /**
     * @return string
     */
    public function getOldValue() : string
    {
        return $this->oldValue;
    }

    /**
     * @param string $oldValue
     */
    public function setOldValue(string $oldValue)
    {
        $this->oldValue = $oldValue;
    }
    
    public function hasAdminId(): bool
    {
        return isset($this->adminId);
    }    

    /**
     * @return int
     */
    public function getAdminId() : int
    {
        return $this->adminId;
    }

    /**
     * @param int $adminId
     */
    public function setAdminId(int $adminId)
    {
        $this->adminId = $adminId;
    }
    
    public function hasChangeTime(): bool
    {
        return isset($this->changeTime);
    }    

    /**
     * @return int
     */
    public function getChangeTime() : int
    {
        return $this->changeTime;
    }

    /**
     * @param int $changeTime
     */
    public function setChangeTime(int $changeTime)
    {
        $this->changeTime = $changeTime;
    }
    
    public function hasChangeUnIq(): bool
    {
        return isset($this->changeUnIq);
    }    

    /**
     * @return string
     */
    public function getChangeUnIq() : string
    {
        return $this->changeUnIq;
    }

    /**
     * @param string $changeUnIq
     */
    public function setChangeUnIq(string $changeUnIq)
    {
        $this->changeUnIq = $changeUnIq;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): UserChangeLog
    {
        return new UserChangeLog();
    }
}