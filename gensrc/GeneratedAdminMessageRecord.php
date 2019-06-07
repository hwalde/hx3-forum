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

class GeneratedAdminMessageRecord implements Record {
    
    /** @var $adminMessageId int */
    protected $adminMessageId;
    
    /** @var $varName string */
    protected $varName;
    
    /** @var $dismissable int */
    protected $dismissable;
    
    /** @var $script string */
    protected $script;
    
    /** @var $action string */
    protected $action;
    
    /** @var $execUrl string */
    protected $execUrl;
    
    /** @var $method string */
    protected $method;
    
    /** @var $dateLine int */
    protected $dateLine;
    
    /** @var $status string */
    protected $status;
    
    /** @var $statusUserId int */
    protected $statusUserId;
    
    public function hasAdminMessageId(): bool
    {
        return isset($this->adminMessageId);
    }    

    /**
     * @return int
     */
    public function getAdminMessageId() : int
    {
        return $this->adminMessageId;
    }

    /**
     * @param int $adminMessageId
     */
    public function setAdminMessageId(int $adminMessageId)
    {
        $this->adminMessageId = $adminMessageId;
    }
    
    public function hasVarName(): bool
    {
        return isset($this->varName);
    }    

    /**
     * @return string
     */
    public function getVarName() : string
    {
        return $this->varName;
    }

    /**
     * @param string $varName
     */
    public function setVarName(string $varName)
    {
        $this->varName = $varName;
    }
    
    public function hasDismissable(): bool
    {
        return isset($this->dismissable);
    }    

    /**
     * @return int
     */
    public function getDismissable() : int
    {
        return $this->dismissable;
    }

    /**
     * @param int $dismissable
     */
    public function setDismissable(int $dismissable)
    {
        $this->dismissable = $dismissable;
    }
    
    public function hasScript(): bool
    {
        return isset($this->script);
    }    

    /**
     * @return string
     */
    public function getScript() : string
    {
        return $this->script;
    }

    /**
     * @param string $script
     */
    public function setScript(string $script)
    {
        $this->script = $script;
    }
    
    public function hasAction(): bool
    {
        return isset($this->action);
    }    

    /**
     * @return string
     */
    public function getAction() : string
    {
        return $this->action;
    }

    /**
     * @param string $action
     */
    public function setAction(string $action)
    {
        $this->action = $action;
    }
    
    public function hasExecUrl(): bool
    {
        return isset($this->execUrl);
    }    

    /**
     * @return string
     */
    public function getExecUrl() : string
    {
        return $this->execUrl;
    }

    /**
     * @param string $execUrl
     */
    public function setExecUrl(string $execUrl)
    {
        $this->execUrl = $execUrl;
    }
    
    public function hasMethod(): bool
    {
        return isset($this->method);
    }    

    /**
     * @return string
     */
    public function getMethod() : string
    {
        return $this->method;
    }

    /**
     * @param string $method
     */
    public function setMethod(string $method)
    {
        $this->method = $method;
    }
    
    public function hasDateLine(): bool
    {
        return isset($this->dateLine);
    }    

    /**
     * @return int
     */
    public function getDateLine() : int
    {
        return $this->dateLine;
    }

    /**
     * @param int $dateLine
     */
    public function setDateLine(int $dateLine)
    {
        $this->dateLine = $dateLine;
    }
    
    public function hasStatus(): bool
    {
        return isset($this->status);
    }    

    /**
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status)
    {
        $this->status = $status;
    }
    
    public function hasStatusUserId(): bool
    {
        return isset($this->statusUserId);
    }    

    /**
     * @return int
     */
    public function getStatusUserId() : int
    {
        return $this->statusUserId;
    }

    /**
     * @param int $statusUserId
     */
    public function setStatusUserId(int $statusUserId)
    {
        $this->statusUserId = $statusUserId;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): AdminMessage
    {
        return new AdminMessage();
    }
}