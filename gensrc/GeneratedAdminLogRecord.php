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

class GeneratedAdminLogRecord implements Record {
    
    /** @var $adminLogId RecordValue */
    protected $adminLogId;
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;
    
    /** @var $script RecordValue */
    protected $script;
    
    /** @var $action RecordValue */
    protected $action;
    
    /** @var $extraInfo RecordValue */
    protected $extraInfo;
    
    /** @var $ipAddress RecordValue */
    protected $ipAddress;

    public function __construct() {
		$this->adminLogId = new RecordValue();
		$this->userId = new RecordValue();
		$this->dateLine = new RecordValue();
		$this->script = new RecordValue();
		$this->action = new RecordValue();
		$this->extraInfo = new RecordValue();
		$this->ipAddress = new RecordValue();
    }
    
    public function hasAdminLogId(): bool
    {
        return $this->adminLogId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAdminLogId() : int
    {
        return $this->adminLogId->getValue();
    }

    /**
     * @param int $adminLogId
     */
    public function setAdminLogId(int $adminLogId)
    {
        $this->adminLogId->setChanged(true);
        $this->adminLogId->setValue($adminLogId);
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
    
    public function hasScript(): bool
    {
        return $this->script->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getScript() : string
    {
        return $this->script->getValue();
    }

    /**
     * @param string $script
     */
    public function setScript(string $script)
    {
        $this->script->setChanged(true);
        $this->script->setValue($script);
    }
    
    public function hasAction(): bool
    {
        return $this->action->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getAction() : string
    {
        return $this->action->getValue();
    }

    /**
     * @param string $action
     */
    public function setAction(string $action)
    {
        $this->action->setChanged(true);
        $this->action->setValue($action);
    }
    
    public function hasExtraInfo(): bool
    {
        return $this->extraInfo->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getExtraInfo() : string
    {
        return $this->extraInfo->getValue();
    }

    /**
     * @param string $extraInfo
     */
    public function setExtraInfo(string $extraInfo)
    {
        $this->extraInfo->setChanged(true);
        $this->extraInfo->setValue($extraInfo);
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
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): AdminLog
    {
        return new AdminLog();
    }
}