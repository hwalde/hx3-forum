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

class GeneratedStatisticLogRecord implements Record {
    
    /** @var $id RecordValue */
    protected $id;
    
    /** @var $IP RecordValue */
    protected $IP;
    
    /** @var $loggedInSince RecordValue */
    protected $loggedInSince;
    
    /** @var $browserStamp RecordValue */
    protected $browserStamp;

    public function __construct() {
		$this->id = new RecordValue();
		$this->IP = new RecordValue();
		$this->loggedInSince = new RecordValue();
		$this->browserStamp = new RecordValue();
    }
    
    public function hasId(): bool
    {
        return $this->id->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id->getValue();
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id->setChanged(true);
        $this->id->setValue($id);
    }
    
    public function hasIP(): bool
    {
        return $this->IP->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getIP() : string
    {
        return $this->IP->getValue();
    }

    /**
     * @param string $IP
     */
    public function setIP(string $IP)
    {
        $this->IP->setChanged(true);
        $this->IP->setValue($IP);
    }
    
    public function hasLoggedInSince(): bool
    {
        return $this->loggedInSince->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getLoggedInSince() : int
    {
        return $this->loggedInSince->getValue();
    }

    /**
     * @param int $loggedInSince
     */
    public function setLoggedInSince(int $loggedInSince)
    {
        $this->loggedInSince->setChanged(true);
        $this->loggedInSince->setValue($loggedInSince);
    }
    
    public function hasBrowserStamp(): bool
    {
        return $this->browserStamp->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getBrowserStamp() : string
    {
        return $this->browserStamp->getValue();
    }

    /**
     * @param string $browserStamp
     */
    public function setBrowserStamp(string $browserStamp)
    {
        $this->browserStamp->setChanged(true);
        $this->browserStamp->setValue($browserStamp);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): StatisticLog
    {
        return new StatisticLog();
    }
}