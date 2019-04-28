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

class GeneratedAdminLogRecord implements Record {
    
    /** @var $adminLogId int */
    private $adminLogId;
    
    /** @var $userId int */
    private $userId;
    
    /** @var $dateLine int */
    private $dateLine;
    
    /** @var $script string */
    private $script;
    
    /** @var $action string */
    private $action;
    
    /** @var $extraInfo string */
    private $extraInfo;
    
    /** @var $ipAddress string */
    private $ipAddress;
    
    public function hasAdminLogId(): bool
    {
        return isset($this->adminLogId);
    }    

    /**
     * @return int
     */
    public function getAdminLogId() : int
    {
        return $this->adminLogId;
    }

    /**
     * @param int $adminLogId
     */
    public function setAdminLogId(int $adminLogId)
    {
        $this->adminLogId = $adminLogId;
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
    
    public function hasExtraInfo(): bool
    {
        return isset($this->extraInfo);
    }    

    /**
     * @return string
     */
    public function getExtraInfo() : string
    {
        return $this->extraInfo;
    }

    /**
     * @param string $extraInfo
     */
    public function setExtraInfo(string $extraInfo)
    {
        $this->extraInfo = $extraInfo;
    }
    
    public function hasIpAddress(): bool
    {
        return isset($this->ipAddress);
    }    

    /**
     * @return string
     */
    public function getIpAddress() : string
    {
        return $this->ipAddress;
    }

    /**
     * @param string $ipAddress
     */
    public function setIpAddress(string $ipAddress)
    {
        $this->ipAddress = $ipAddress;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): AdminLog
    {
        return new AdminLog();
    }
}