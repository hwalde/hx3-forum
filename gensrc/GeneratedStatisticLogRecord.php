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

class GeneratedStatisticLogRecord implements Record {
    
    /** @var $id int */
    protected $id;
    
    /** @var $IP string */
    protected $IP;
    
    /** @var $loggedInSince int */
    protected $loggedInSince;
    
    /** @var $browserStamp string */
    protected $browserStamp;
    
    public function hasId(): bool
    {
        return isset($this->id);
    }    

    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }
    
    public function hasIP(): bool
    {
        return isset($this->IP);
    }    

    /**
     * @return string
     */
    public function getIP() : string
    {
        return $this->IP;
    }

    /**
     * @param string $IP
     */
    public function setIP(string $IP)
    {
        $this->IP = $IP;
    }
    
    public function hasLoggedInSince(): bool
    {
        return isset($this->loggedInSince);
    }    

    /**
     * @return int
     */
    public function getLoggedInSince() : int
    {
        return $this->loggedInSince;
    }

    /**
     * @param int $loggedInSince
     */
    public function setLoggedInSince(int $loggedInSince)
    {
        $this->loggedInSince = $loggedInSince;
    }
    
    public function hasBrowserStamp(): bool
    {
        return isset($this->browserStamp);
    }    

    /**
     * @return string
     */
    public function getBrowserStamp() : string
    {
        return $this->browserStamp;
    }

    /**
     * @param string $browserStamp
     */
    public function setBrowserStamp(string $browserStamp)
    {
        $this->browserStamp = $browserStamp;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): StatisticLog
    {
        return new StatisticLog();
    }
}