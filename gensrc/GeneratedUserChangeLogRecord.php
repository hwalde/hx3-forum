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

class GeneratedUserChangeLogRecord implements Record {
    
    /** @var $changeId RecordValue */
    protected $changeId;
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $fieldName RecordValue */
    protected $fieldName;
    
    /** @var $newValue RecordValue */
    protected $newValue;
    
    /** @var $oldValue RecordValue */
    protected $oldValue;
    
    /** @var $adminId RecordValue */
    protected $adminId;
    
    /** @var $changeTime RecordValue */
    protected $changeTime;
    
    /** @var $changeUnIq RecordValue */
    protected $changeUnIq;

    public function __construct() {
		$this->changeId = new RecordValue();
		$this->userId = new RecordValue();
		$this->fieldName = new RecordValue();
		$this->newValue = new RecordValue();
		$this->oldValue = new RecordValue();
		$this->adminId = new RecordValue();
		$this->changeTime = new RecordValue();
		$this->changeUnIq = new RecordValue();
    }
    
    public function hasChangeId(): bool
    {
        return $this->changeId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getChangeId() : int
    {
        return $this->changeId->getValue();
    }

    /**
     * @param int $changeId
     */
    public function setChangeId(int $changeId)
    {
        $this->changeId->setChanged(true);
        $this->changeId->setValue($changeId);
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
    
    public function hasFieldName(): bool
    {
        return $this->fieldName->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getFieldName() : string
    {
        return $this->fieldName->getValue();
    }

    /**
     * @param string $fieldName
     */
    public function setFieldName(string $fieldName)
    {
        $this->fieldName->setChanged(true);
        $this->fieldName->setValue($fieldName);
    }
    
    public function hasNewValue(): bool
    {
        return $this->newValue->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getNewValue() : string
    {
        return $this->newValue->getValue();
    }

    /**
     * @param string $newValue
     */
    public function setNewValue(string $newValue)
    {
        $this->newValue->setChanged(true);
        $this->newValue->setValue($newValue);
    }
    
    public function hasOldValue(): bool
    {
        return $this->oldValue->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getOldValue() : string
    {
        return $this->oldValue->getValue();
    }

    /**
     * @param string $oldValue
     */
    public function setOldValue(string $oldValue)
    {
        $this->oldValue->setChanged(true);
        $this->oldValue->setValue($oldValue);
    }
    
    public function hasAdminId(): bool
    {
        return $this->adminId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAdminId() : int
    {
        return $this->adminId->getValue();
    }

    /**
     * @param int $adminId
     */
    public function setAdminId(int $adminId)
    {
        $this->adminId->setChanged(true);
        $this->adminId->setValue($adminId);
    }
    
    public function hasChangeTime(): bool
    {
        return $this->changeTime->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getChangeTime() : int
    {
        return $this->changeTime->getValue();
    }

    /**
     * @param int $changeTime
     */
    public function setChangeTime(int $changeTime)
    {
        $this->changeTime->setChanged(true);
        $this->changeTime->setValue($changeTime);
    }
    
    public function hasChangeUnIq(): bool
    {
        return $this->changeUnIq->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getChangeUnIq() : string
    {
        return $this->changeUnIq->getValue();
    }

    /**
     * @param string $changeUnIq
     */
    public function setChangeUnIq(string $changeUnIq)
    {
        $this->changeUnIq->setChanged(true);
        $this->changeUnIq->setValue($changeUnIq);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): UserChangeLog
    {
        return new UserChangeLog();
    }
}