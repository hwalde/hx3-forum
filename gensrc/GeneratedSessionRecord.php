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

class GeneratedSessionRecord implements Record {
    
    /** @var $sessionHash string */
    protected $sessionHash;
    
    /** @var $userId int */
    protected $userId;
    
    /** @var $host string */
    protected $host;
    
    /** @var $idHash string */
    protected $idHash;
    
    /** @var $lastActivity int */
    protected $lastActivity;
    
    /** @var $location string */
    protected $location;
    
    /** @var $userAgent string */
    protected $userAgent;
    
    /** @var $styleId int */
    protected $styleId;
    
    /** @var $loggedIn int */
    protected $loggedIn;
    
    /** @var $inForum int */
    protected $inForum;
    
    /** @var $inThread int */
    protected $inThread;
    
    /** @var $inCalendar int */
    protected $inCalendar;
    
    /** @var $badLocation int */
    protected $badLocation;
    
    /** @var $bypass int */
    protected $bypass;
    
    /** @var $languageId int */
    protected $languageId;
    
    /** @var $profileUpdate int */
    protected $profileUpdate;
    
    public function hasSessionHash(): bool
    {
        return isset($this->sessionHash);
    }    

    /**
     * @return string
     */
    public function getSessionHash() : string
    {
        return $this->sessionHash;
    }

    /**
     * @param string $sessionHash
     */
    public function setSessionHash(string $sessionHash)
    {
        $this->sessionHash = $sessionHash;
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
    
    public function hasHost(): bool
    {
        return isset($this->host);
    }    

    /**
     * @return string
     */
    public function getHost() : string
    {
        return $this->host;
    }

    /**
     * @param string $host
     */
    public function setHost(string $host)
    {
        $this->host = $host;
    }
    
    public function hasIdHash(): bool
    {
        return isset($this->idHash);
    }    

    /**
     * @return string
     */
    public function getIdHash() : string
    {
        return $this->idHash;
    }

    /**
     * @param string $idHash
     */
    public function setIdHash(string $idHash)
    {
        $this->idHash = $idHash;
    }
    
    public function hasLastActivity(): bool
    {
        return isset($this->lastActivity);
    }    

    /**
     * @return int
     */
    public function getLastActivity() : int
    {
        return $this->lastActivity;
    }

    /**
     * @param int $lastActivity
     */
    public function setLastActivity(int $lastActivity)
    {
        $this->lastActivity = $lastActivity;
    }
    
    public function hasLocation(): bool
    {
        return isset($this->location);
    }    

    /**
     * @return string
     */
    public function getLocation() : string
    {
        return $this->location;
    }

    /**
     * @param string $location
     */
    public function setLocation(string $location)
    {
        $this->location = $location;
    }
    
    public function hasUserAgent(): bool
    {
        return isset($this->userAgent);
    }    

    /**
     * @return string
     */
    public function getUserAgent() : string
    {
        return $this->userAgent;
    }

    /**
     * @param string $userAgent
     */
    public function setUserAgent(string $userAgent)
    {
        $this->userAgent = $userAgent;
    }
    
    public function hasStyleId(): bool
    {
        return isset($this->styleId);
    }    

    /**
     * @return int
     */
    public function getStyleId() : int
    {
        return $this->styleId;
    }

    /**
     * @param int $styleId
     */
    public function setStyleId(int $styleId)
    {
        $this->styleId = $styleId;
    }
    
    public function hasLoggedIn(): bool
    {
        return isset($this->loggedIn);
    }    

    /**
     * @return int
     */
    public function getLoggedIn() : int
    {
        return $this->loggedIn;
    }

    /**
     * @param int $loggedIn
     */
    public function setLoggedIn(int $loggedIn)
    {
        $this->loggedIn = $loggedIn;
    }
    
    public function hasInForum(): bool
    {
        return isset($this->inForum);
    }    

    /**
     * @return int
     */
    public function getInForum() : int
    {
        return $this->inForum;
    }

    /**
     * @param int $inForum
     */
    public function setInForum(int $inForum)
    {
        $this->inForum = $inForum;
    }
    
    public function hasInThread(): bool
    {
        return isset($this->inThread);
    }    

    /**
     * @return int
     */
    public function getInThread() : int
    {
        return $this->inThread;
    }

    /**
     * @param int $inThread
     */
    public function setInThread(int $inThread)
    {
        $this->inThread = $inThread;
    }
    
    public function hasInCalendar(): bool
    {
        return isset($this->inCalendar);
    }    

    /**
     * @return int
     */
    public function getInCalendar() : int
    {
        return $this->inCalendar;
    }

    /**
     * @param int $inCalendar
     */
    public function setInCalendar(int $inCalendar)
    {
        $this->inCalendar = $inCalendar;
    }
    
    public function hasBadLocation(): bool
    {
        return isset($this->badLocation);
    }    

    /**
     * @return int
     */
    public function getBadLocation() : int
    {
        return $this->badLocation;
    }

    /**
     * @param int $badLocation
     */
    public function setBadLocation(int $badLocation)
    {
        $this->badLocation = $badLocation;
    }
    
    public function hasBypass(): bool
    {
        return isset($this->bypass);
    }    

    /**
     * @return int
     */
    public function getBypass() : int
    {
        return $this->bypass;
    }

    /**
     * @param int $bypass
     */
    public function setBypass(int $bypass)
    {
        $this->bypass = $bypass;
    }
    
    public function hasLanguageId(): bool
    {
        return isset($this->languageId);
    }    

    /**
     * @return int
     */
    public function getLanguageId() : int
    {
        return $this->languageId;
    }

    /**
     * @param int $languageId
     */
    public function setLanguageId(int $languageId)
    {
        $this->languageId = $languageId;
    }
    
    public function hasProfileUpdate(): bool
    {
        return isset($this->profileUpdate);
    }    

    /**
     * @return int
     */
    public function getProfileUpdate() : int
    {
        return $this->profileUpdate;
    }

    /**
     * @param int $profileUpdate
     */
    public function setProfileUpdate(int $profileUpdate)
    {
        $this->profileUpdate = $profileUpdate;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Session
    {
        return new Session();
    }
}