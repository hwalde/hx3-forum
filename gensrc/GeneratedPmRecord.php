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

class GeneratedPmRecord implements Record {
    
    /** @var $pmId RecordValue */
    protected $pmId;
    
    /** @var $pmTextId RecordValue */
    protected $pmTextId;
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $folderId RecordValue */
    protected $folderId;
    
    /** @var $messageRead RecordValue */
    protected $messageRead;

    public function __construct() {
		$this->pmId = new RecordValue();
		$this->pmTextId = new RecordValue();
		$this->userId = new RecordValue();
		$this->folderId = new RecordValue();
		$this->messageRead = new RecordValue();
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
    
    public function hasPmTextId(): bool
    {
        return $this->pmTextId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPmTextId() : int
    {
        return $this->pmTextId->getValue();
    }

    /**
     * @param int $pmTextId
     */
    public function setPmTextId(int $pmTextId)
    {
        $this->pmTextId->setChanged(true);
        $this->pmTextId->setValue($pmTextId);
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
    
    public function hasFolderId(): bool
    {
        return $this->folderId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getFolderId() : int
    {
        return $this->folderId->getValue();
    }

    /**
     * @param int $folderId
     */
    public function setFolderId(int $folderId)
    {
        $this->folderId->setChanged(true);
        $this->folderId->setValue($folderId);
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
    public function __getModel(): Pm
    {
        return new Pm();
    }
}