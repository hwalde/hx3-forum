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

class GeneratedSessionRecord implements Record {
    
    /** @var $sessionHash RecordValue */
    protected $sessionHash;
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $host RecordValue */
    protected $host;
    
    /** @var $idHash RecordValue */
    protected $idHash;
    
    /** @var $lastActivity RecordValue */
    protected $lastActivity;
    
    /** @var $location RecordValue */
    protected $location;
    
    /** @var $userAgent RecordValue */
    protected $userAgent;
    
    /** @var $styleId RecordValue */
    protected $styleId;
    
    /** @var $loggedIn RecordValue */
    protected $loggedIn;
    
    /** @var $inForum RecordValue */
    protected $inForum;
    
    /** @var $inThread RecordValue */
    protected $inThread;
    
    /** @var $inCalendar RecordValue */
    protected $inCalendar;
    
    /** @var $badLocation RecordValue */
    protected $badLocation;
    
    /** @var $bypass RecordValue */
    protected $bypass;
    
    /** @var $languageId RecordValue */
    protected $languageId;
    
    /** @var $profileUpdate RecordValue */
    protected $profileUpdate;

    public function __construct() {
		$this->sessionHash = new RecordValue();
		$this->userId = new RecordValue();
		$this->host = new RecordValue();
		$this->idHash = new RecordValue();
		$this->lastActivity = new RecordValue();
		$this->location = new RecordValue();
		$this->userAgent = new RecordValue();
		$this->styleId = new RecordValue();
		$this->loggedIn = new RecordValue();
		$this->inForum = new RecordValue();
		$this->inThread = new RecordValue();
		$this->inCalendar = new RecordValue();
		$this->badLocation = new RecordValue();
		$this->bypass = new RecordValue();
		$this->languageId = new RecordValue();
		$this->profileUpdate = new RecordValue();
    }
    
    public function hasSessionHash(): bool
    {
        return $this->sessionHash->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getSessionHash() : string
    {
        return $this->sessionHash->getValue();
    }

    /**
     * @param string $sessionHash
     */
    public function setSessionHash(string $sessionHash)
    {
        $this->sessionHash->setChanged(true);
        $this->sessionHash->setValue($sessionHash);
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
    
    public function hasHost(): bool
    {
        return $this->host->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getHost() : string
    {
        return $this->host->getValue();
    }

    /**
     * @param string $host
     */
    public function setHost(string $host)
    {
        $this->host->setChanged(true);
        $this->host->setValue($host);
    }
    
    public function hasIdHash(): bool
    {
        return $this->idHash->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getIdHash() : string
    {
        return $this->idHash->getValue();
    }

    /**
     * @param string $idHash
     */
    public function setIdHash(string $idHash)
    {
        $this->idHash->setChanged(true);
        $this->idHash->setValue($idHash);
    }
    
    public function hasLastActivity(): bool
    {
        return $this->lastActivity->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getLastActivity() : int
    {
        return $this->lastActivity->getValue();
    }

    /**
     * @param int $lastActivity
     */
    public function setLastActivity(int $lastActivity)
    {
        $this->lastActivity->setChanged(true);
        $this->lastActivity->setValue($lastActivity);
    }
    
    public function hasLocation(): bool
    {
        return $this->location->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getLocation() : string
    {
        return $this->location->getValue();
    }

    /**
     * @param string $location
     */
    public function setLocation(string $location)
    {
        $this->location->setChanged(true);
        $this->location->setValue($location);
    }
    
    public function hasUserAgent(): bool
    {
        return $this->userAgent->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getUserAgent() : string
    {
        return $this->userAgent->getValue();
    }

    /**
     * @param string $userAgent
     */
    public function setUserAgent(string $userAgent)
    {
        $this->userAgent->setChanged(true);
        $this->userAgent->setValue($userAgent);
    }
    
    public function hasStyleId(): bool
    {
        return $this->styleId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getStyleId() : int
    {
        return $this->styleId->getValue();
    }

    /**
     * @param int $styleId
     */
    public function setStyleId(int $styleId)
    {
        $this->styleId->setChanged(true);
        $this->styleId->setValue($styleId);
    }
    
    public function hasLoggedIn(): bool
    {
        return $this->loggedIn->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getLoggedIn() : int
    {
        return $this->loggedIn->getValue();
    }

    /**
     * @param int $loggedIn
     */
    public function setLoggedIn(int $loggedIn)
    {
        $this->loggedIn->setChanged(true);
        $this->loggedIn->setValue($loggedIn);
    }
    
    public function hasInForum(): bool
    {
        return $this->inForum->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getInForum() : int
    {
        return $this->inForum->getValue();
    }

    /**
     * @param int $inForum
     */
    public function setInForum(int $inForum)
    {
        $this->inForum->setChanged(true);
        $this->inForum->setValue($inForum);
    }
    
    public function hasInThread(): bool
    {
        return $this->inThread->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getInThread() : int
    {
        return $this->inThread->getValue();
    }

    /**
     * @param int $inThread
     */
    public function setInThread(int $inThread)
    {
        $this->inThread->setChanged(true);
        $this->inThread->setValue($inThread);
    }
    
    public function hasInCalendar(): bool
    {
        return $this->inCalendar->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getInCalendar() : int
    {
        return $this->inCalendar->getValue();
    }

    /**
     * @param int $inCalendar
     */
    public function setInCalendar(int $inCalendar)
    {
        $this->inCalendar->setChanged(true);
        $this->inCalendar->setValue($inCalendar);
    }
    
    public function hasBadLocation(): bool
    {
        return $this->badLocation->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getBadLocation() : int
    {
        return $this->badLocation->getValue();
    }

    /**
     * @param int $badLocation
     */
    public function setBadLocation(int $badLocation)
    {
        $this->badLocation->setChanged(true);
        $this->badLocation->setValue($badLocation);
    }
    
    public function hasBypass(): bool
    {
        return $this->bypass->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getBypass() : int
    {
        return $this->bypass->getValue();
    }

    /**
     * @param int $bypass
     */
    public function setBypass(int $bypass)
    {
        $this->bypass->setChanged(true);
        $this->bypass->setValue($bypass);
    }
    
    public function hasLanguageId(): bool
    {
        return $this->languageId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getLanguageId() : int
    {
        return $this->languageId->getValue();
    }

    /**
     * @param int $languageId
     */
    public function setLanguageId(int $languageId)
    {
        $this->languageId->setChanged(true);
        $this->languageId->setValue($languageId);
    }
    
    public function hasProfileUpdate(): bool
    {
        return $this->profileUpdate->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getProfileUpdate() : int
    {
        return $this->profileUpdate->getValue();
    }

    /**
     * @param int $profileUpdate
     */
    public function setProfileUpdate(int $profileUpdate)
    {
        $this->profileUpdate->setChanged(true);
        $this->profileUpdate->setValue($profileUpdate);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Session
    {
        return new Session();
    }
}