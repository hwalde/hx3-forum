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

class GeneratedAdminMessageRecord implements Record {
    
    /** @var $adminMessageId RecordValue */
    protected $adminMessageId;
    
    /** @var $varName RecordValue */
    protected $varName;
    
    /** @var $dismissable RecordValue */
    protected $dismissable;
    
    /** @var $script RecordValue */
    protected $script;
    
    /** @var $action RecordValue */
    protected $action;
    
    /** @var $execUrl RecordValue */
    protected $execUrl;
    
    /** @var $method RecordValue */
    protected $method;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;
    
    /** @var $status RecordValue */
    protected $status;
    
    /** @var $statusUserId RecordValue */
    protected $statusUserId;

    public function __construct() {
		$this->adminMessageId = new RecordValue();
		$this->varName = new RecordValue();
		$this->dismissable = new RecordValue();
		$this->script = new RecordValue();
		$this->action = new RecordValue();
		$this->execUrl = new RecordValue();
		$this->method = new RecordValue();
		$this->dateLine = new RecordValue();
		$this->status = new RecordValue();
		$this->statusUserId = new RecordValue();
    }
    
    public function hasAdminMessageId(): bool
    {
        return $this->adminMessageId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAdminMessageId() : int
    {
        return $this->adminMessageId->getValue();
    }

    /**
     * @param int $adminMessageId
     */
    public function setAdminMessageId(int $adminMessageId)
    {
        $this->adminMessageId->setChanged(true);
        $this->adminMessageId->setValue($adminMessageId);
    }
    
    public function hasVarName(): bool
    {
        return $this->varName->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getVarName() : string
    {
        return $this->varName->getValue();
    }

    /**
     * @param string $varName
     */
    public function setVarName(string $varName)
    {
        $this->varName->setChanged(true);
        $this->varName->setValue($varName);
    }
    
    public function hasDismissable(): bool
    {
        return $this->dismissable->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getDismissable() : int
    {
        return $this->dismissable->getValue();
    }

    /**
     * @param int $dismissable
     */
    public function setDismissable(int $dismissable)
    {
        $this->dismissable->setChanged(true);
        $this->dismissable->setValue($dismissable);
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
    
    public function hasExecUrl(): bool
    {
        return $this->execUrl->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getExecUrl() : string
    {
        return $this->execUrl->getValue();
    }

    /**
     * @param string $execUrl
     */
    public function setExecUrl(string $execUrl)
    {
        $this->execUrl->setChanged(true);
        $this->execUrl->setValue($execUrl);
    }
    
    public function hasMethod(): bool
    {
        return $this->method->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getMethod() : string
    {
        return $this->method->getValue();
    }

    /**
     * @param string $method
     */
    public function setMethod(string $method)
    {
        $this->method->setChanged(true);
        $this->method->setValue($method);
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
    
    public function hasStatus(): bool
    {
        return $this->status->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status->getValue();
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status)
    {
        $this->status->setChanged(true);
        $this->status->setValue($status);
    }
    
    public function hasStatusUserId(): bool
    {
        return $this->statusUserId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getStatusUserId() : int
    {
        return $this->statusUserId->getValue();
    }

    /**
     * @param int $statusUserId
     */
    public function setStatusUserId(int $statusUserId)
    {
        $this->statusUserId->setChanged(true);
        $this->statusUserId->setValue($statusUserId);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): AdminMessage
    {
        return new AdminMessage();
    }
}