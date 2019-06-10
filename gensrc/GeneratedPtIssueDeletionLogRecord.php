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

class GeneratedPtIssueDeletionLogRecord implements Record {
    
    /** @var $primaryId RecordValue */
    protected $primaryId;
    
    /** @var $type RecordValue */
    protected $type;
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $userName RecordValue */
    protected $userName;
    
    /** @var $reason RecordValue */
    protected $reason;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;

    public function __construct() {
		$this->primaryId = new RecordValue();
		$this->type = new RecordValue();
		$this->userId = new RecordValue();
		$this->userName = new RecordValue();
		$this->reason = new RecordValue();
		$this->dateLine = new RecordValue();
    }
    
    public function hasPrimaryId(): bool
    {
        return $this->primaryId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPrimaryId() : int
    {
        return $this->primaryId->getValue();
    }

    /**
     * @param int $primaryId
     */
    public function setPrimaryId(int $primaryId)
    {
        $this->primaryId->setChanged(true);
        $this->primaryId->setValue($primaryId);
    }
    
    public function hasType(): bool
    {
        return $this->type->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getType() : string
    {
        return $this->type->getValue();
    }

    /**
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->type->setChanged(true);
        $this->type->setValue($type);
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
    
    public function hasReason(): bool
    {
        return $this->reason->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getReason() : string
    {
        return $this->reason->getValue();
    }

    /**
     * @param string $reason
     */
    public function setReason(string $reason)
    {
        $this->reason->setChanged(true);
        $this->reason->setValue($reason);
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
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PtIssueDeletionLog
    {
        return new PtIssueDeletionLog();
    }
}