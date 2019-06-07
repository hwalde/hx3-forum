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

use POOQ\AbstractUpdateableRecord;
use POOQ\UpdateableRecord;

class GeneratedStatisticSettingsRecord extends AbstractUpdateableRecord implements UpdateableRecord {
    
    /** @var $reset int */
    protected $reset;
    
    /** @var $logTime int */
    protected $logTime;
    
    /** @var $DOMAIN string */
    protected $DOMAIN;
    
    /** @var $topThread int */
    protected $topThread;
    
    /** @var $popThread int */
    protected $popThread;
    
    /** @var $popForum int */
    protected $popForum;
    
    /** @var $newRegister int */
    protected $newRegister;
    
    /** @var $visit int */
    protected $visit;
    
    /** @var $writtenThreads int */
    protected $writtenThreads;
    
    /** @var $writtenPost int */
    protected $writtenPost;
    
    /** @var $topPoster int */
    protected $topPoster;
    
    /** @var $xDays int */
    protected $xDays;
    
    /** @var $xThreads int */
    protected $xThreads;
    
    /** @var $polls int */
    protected $polls;
    
    /** @var $sticky int */
    protected $sticky;
    
    /** @var $search int */
    protected $search;
    
    /** @var $topref int */
    protected $topref;
    
    /** @var $topld int */
    protected $topld;
    
    public function hasReset(): bool
    {
        return isset($this->reset);
    }    

    /**
     * @return int
     */
    public function getReset() : int
    {
        return $this->reset;
    }

    /**
     * @param int $reset
     */
    public function setReset(int $reset)
    {
        $this->reset = $reset;
    }
    
    public function hasLogTime(): bool
    {
        return isset($this->logTime);
    }    

    /**
     * @return int
     */
    public function getLogTime() : int
    {
        return $this->logTime;
    }

    /**
     * @param int $logTime
     */
    public function setLogTime(int $logTime)
    {
        $this->logTime = $logTime;
    }
    
    public function hasDOMAIN(): bool
    {
        return isset($this->DOMAIN);
    }    

    /**
     * @return string
     */
    public function getDOMAIN() : string
    {
        return $this->DOMAIN;
    }

    /**
     * @param string $DOMAIN
     */
    public function setDOMAIN(string $DOMAIN)
    {
        $this->DOMAIN = $DOMAIN;
    }
    
    public function hasTopThread(): bool
    {
        return isset($this->topThread);
    }    

    /**
     * @return int
     */
    public function getTopThread() : int
    {
        return $this->topThread;
    }

    /**
     * @param int $topThread
     */
    public function setTopThread(int $topThread)
    {
        $this->topThread = $topThread;
    }
    
    public function hasPopThread(): bool
    {
        return isset($this->popThread);
    }    

    /**
     * @return int
     */
    public function getPopThread() : int
    {
        return $this->popThread;
    }

    /**
     * @param int $popThread
     */
    public function setPopThread(int $popThread)
    {
        $this->popThread = $popThread;
    }
    
    public function hasPopForum(): bool
    {
        return isset($this->popForum);
    }    

    /**
     * @return int
     */
    public function getPopForum() : int
    {
        return $this->popForum;
    }

    /**
     * @param int $popForum
     */
    public function setPopForum(int $popForum)
    {
        $this->popForum = $popForum;
    }
    
    public function hasNewRegister(): bool
    {
        return isset($this->newRegister);
    }    

    /**
     * @return int
     */
    public function getNewRegister() : int
    {
        return $this->newRegister;
    }

    /**
     * @param int $newRegister
     */
    public function setNewRegister(int $newRegister)
    {
        $this->newRegister = $newRegister;
    }
    
    public function hasVisit(): bool
    {
        return isset($this->visit);
    }    

    /**
     * @return int
     */
    public function getVisit() : int
    {
        return $this->visit;
    }

    /**
     * @param int $visit
     */
    public function setVisit(int $visit)
    {
        $this->visit = $visit;
    }
    
    public function hasWrittenThreads(): bool
    {
        return isset($this->writtenThreads);
    }    

    /**
     * @return int
     */
    public function getWrittenThreads() : int
    {
        return $this->writtenThreads;
    }

    /**
     * @param int $writtenThreads
     */
    public function setWrittenThreads(int $writtenThreads)
    {
        $this->writtenThreads = $writtenThreads;
    }
    
    public function hasWrittenPost(): bool
    {
        return isset($this->writtenPost);
    }    

    /**
     * @return int
     */
    public function getWrittenPost() : int
    {
        return $this->writtenPost;
    }

    /**
     * @param int $writtenPost
     */
    public function setWrittenPost(int $writtenPost)
    {
        $this->writtenPost = $writtenPost;
    }
    
    public function hasTopPoster(): bool
    {
        return isset($this->topPoster);
    }    

    /**
     * @return int
     */
    public function getTopPoster() : int
    {
        return $this->topPoster;
    }

    /**
     * @param int $topPoster
     */
    public function setTopPoster(int $topPoster)
    {
        $this->topPoster = $topPoster;
    }
    
    public function hasXDays(): bool
    {
        return isset($this->xDays);
    }    

    /**
     * @return int
     */
    public function getXDays() : int
    {
        return $this->xDays;
    }

    /**
     * @param int $xDays
     */
    public function setXDays(int $xDays)
    {
        $this->xDays = $xDays;
    }
    
    public function hasXThreads(): bool
    {
        return isset($this->xThreads);
    }    

    /**
     * @return int
     */
    public function getXThreads() : int
    {
        return $this->xThreads;
    }

    /**
     * @param int $xThreads
     */
    public function setXThreads(int $xThreads)
    {
        $this->xThreads = $xThreads;
    }
    
    public function hasPolls(): bool
    {
        return isset($this->polls);
    }    

    /**
     * @return int
     */
    public function getPolls() : int
    {
        return $this->polls;
    }

    /**
     * @param int $polls
     */
    public function setPolls(int $polls)
    {
        $this->polls = $polls;
    }
    
    public function hasSticky(): bool
    {
        return isset($this->sticky);
    }    

    /**
     * @return int
     */
    public function getSticky() : int
    {
        return $this->sticky;
    }

    /**
     * @param int $sticky
     */
    public function setSticky(int $sticky)
    {
        $this->sticky = $sticky;
    }
    
    public function hasSearch(): bool
    {
        return isset($this->search);
    }    

    /**
     * @return int
     */
    public function getSearch() : int
    {
        return $this->search;
    }

    /**
     * @param int $search
     */
    public function setSearch(int $search)
    {
        $this->search = $search;
    }
    
    public function hasTopref(): bool
    {
        return isset($this->topref);
    }    

    /**
     * @return int
     */
    public function getTopref() : int
    {
        return $this->topref;
    }

    /**
     * @param int $topref
     */
    public function setTopref(int $topref)
    {
        $this->topref = $topref;
    }
    
    public function hasTopld(): bool
    {
        return isset($this->topld);
    }    

    /**
     * @return int
     */
    public function getTopld() : int
    {
        return $this->topld;
    }

    /**
     * @param int $topld
     */
    public function setTopld(int $topld)
    {
        $this->topld = $topld;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): StatisticSettings
    {
        return new StatisticSettings();
    }
}