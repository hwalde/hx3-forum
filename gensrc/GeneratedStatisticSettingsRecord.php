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
use POOQ\AbstractUpdateableRecord;
use POOQ\UpdateableRecord;

class GeneratedStatisticSettingsRecord extends AbstractUpdateableRecord implements UpdateableRecord {
    
    /** @var $reset RecordValue */
    protected $reset;
    
    /** @var $logTime RecordValue */
    protected $logTime;
    
    /** @var $DOMAIN RecordValue */
    protected $DOMAIN;
    
    /** @var $topThread RecordValue */
    protected $topThread;
    
    /** @var $popThread RecordValue */
    protected $popThread;
    
    /** @var $popForum RecordValue */
    protected $popForum;
    
    /** @var $newRegister RecordValue */
    protected $newRegister;
    
    /** @var $visit RecordValue */
    protected $visit;
    
    /** @var $writtenThreads RecordValue */
    protected $writtenThreads;
    
    /** @var $writtenPost RecordValue */
    protected $writtenPost;
    
    /** @var $topPoster RecordValue */
    protected $topPoster;
    
    /** @var $xDays RecordValue */
    protected $xDays;
    
    /** @var $xThreads RecordValue */
    protected $xThreads;
    
    /** @var $polls RecordValue */
    protected $polls;
    
    /** @var $sticky RecordValue */
    protected $sticky;
    
    /** @var $search RecordValue */
    protected $search;
    
    /** @var $topref RecordValue */
    protected $topref;
    
    /** @var $topld RecordValue */
    protected $topld;

    public function __construct() {
		$this->reset = new RecordValue();
		$this->logTime = new RecordValue();
		$this->DOMAIN = new RecordValue();
		$this->topThread = new RecordValue();
		$this->popThread = new RecordValue();
		$this->popForum = new RecordValue();
		$this->newRegister = new RecordValue();
		$this->visit = new RecordValue();
		$this->writtenThreads = new RecordValue();
		$this->writtenPost = new RecordValue();
		$this->topPoster = new RecordValue();
		$this->xDays = new RecordValue();
		$this->xThreads = new RecordValue();
		$this->polls = new RecordValue();
		$this->sticky = new RecordValue();
		$this->search = new RecordValue();
		$this->topref = new RecordValue();
		$this->topld = new RecordValue();
    }
    
    public function hasReset(): bool
    {
        return $this->reset->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getReset() : int
    {
        return $this->reset->getValue();
    }

    /**
     * @param int $reset
     */
    public function setReset(int $reset)
    {
        $this->reset->setChanged(true);
        $this->reset->setValue($reset);
    }
    
    public function hasLogTime(): bool
    {
        return $this->logTime->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getLogTime() : int
    {
        return $this->logTime->getValue();
    }

    /**
     * @param int $logTime
     */
    public function setLogTime(int $logTime)
    {
        $this->logTime->setChanged(true);
        $this->logTime->setValue($logTime);
    }
    
    public function hasDOMAIN(): bool
    {
        return $this->DOMAIN->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getDOMAIN() : string
    {
        return $this->DOMAIN->getValue();
    }

    /**
     * @param string $DOMAIN
     */
    public function setDOMAIN(string $DOMAIN)
    {
        $this->DOMAIN->setChanged(true);
        $this->DOMAIN->setValue($DOMAIN);
    }
    
    public function hasTopThread(): bool
    {
        return $this->topThread->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getTopThread() : int
    {
        return $this->topThread->getValue();
    }

    /**
     * @param int $topThread
     */
    public function setTopThread(int $topThread)
    {
        $this->topThread->setChanged(true);
        $this->topThread->setValue($topThread);
    }
    
    public function hasPopThread(): bool
    {
        return $this->popThread->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPopThread() : int
    {
        return $this->popThread->getValue();
    }

    /**
     * @param int $popThread
     */
    public function setPopThread(int $popThread)
    {
        $this->popThread->setChanged(true);
        $this->popThread->setValue($popThread);
    }
    
    public function hasPopForum(): bool
    {
        return $this->popForum->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPopForum() : int
    {
        return $this->popForum->getValue();
    }

    /**
     * @param int $popForum
     */
    public function setPopForum(int $popForum)
    {
        $this->popForum->setChanged(true);
        $this->popForum->setValue($popForum);
    }
    
    public function hasNewRegister(): bool
    {
        return $this->newRegister->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getNewRegister() : int
    {
        return $this->newRegister->getValue();
    }

    /**
     * @param int $newRegister
     */
    public function setNewRegister(int $newRegister)
    {
        $this->newRegister->setChanged(true);
        $this->newRegister->setValue($newRegister);
    }
    
    public function hasVisit(): bool
    {
        return $this->visit->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getVisit() : int
    {
        return $this->visit->getValue();
    }

    /**
     * @param int $visit
     */
    public function setVisit(int $visit)
    {
        $this->visit->setChanged(true);
        $this->visit->setValue($visit);
    }
    
    public function hasWrittenThreads(): bool
    {
        return $this->writtenThreads->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getWrittenThreads() : int
    {
        return $this->writtenThreads->getValue();
    }

    /**
     * @param int $writtenThreads
     */
    public function setWrittenThreads(int $writtenThreads)
    {
        $this->writtenThreads->setChanged(true);
        $this->writtenThreads->setValue($writtenThreads);
    }
    
    public function hasWrittenPost(): bool
    {
        return $this->writtenPost->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getWrittenPost() : int
    {
        return $this->writtenPost->getValue();
    }

    /**
     * @param int $writtenPost
     */
    public function setWrittenPost(int $writtenPost)
    {
        $this->writtenPost->setChanged(true);
        $this->writtenPost->setValue($writtenPost);
    }
    
    public function hasTopPoster(): bool
    {
        return $this->topPoster->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getTopPoster() : int
    {
        return $this->topPoster->getValue();
    }

    /**
     * @param int $topPoster
     */
    public function setTopPoster(int $topPoster)
    {
        $this->topPoster->setChanged(true);
        $this->topPoster->setValue($topPoster);
    }
    
    public function hasXDays(): bool
    {
        return $this->xDays->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getXDays() : int
    {
        return $this->xDays->getValue();
    }

    /**
     * @param int $xDays
     */
    public function setXDays(int $xDays)
    {
        $this->xDays->setChanged(true);
        $this->xDays->setValue($xDays);
    }
    
    public function hasXThreads(): bool
    {
        return $this->xThreads->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getXThreads() : int
    {
        return $this->xThreads->getValue();
    }

    /**
     * @param int $xThreads
     */
    public function setXThreads(int $xThreads)
    {
        $this->xThreads->setChanged(true);
        $this->xThreads->setValue($xThreads);
    }
    
    public function hasPolls(): bool
    {
        return $this->polls->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPolls() : int
    {
        return $this->polls->getValue();
    }

    /**
     * @param int $polls
     */
    public function setPolls(int $polls)
    {
        $this->polls->setChanged(true);
        $this->polls->setValue($polls);
    }
    
    public function hasSticky(): bool
    {
        return $this->sticky->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getSticky() : int
    {
        return $this->sticky->getValue();
    }

    /**
     * @param int $sticky
     */
    public function setSticky(int $sticky)
    {
        $this->sticky->setChanged(true);
        $this->sticky->setValue($sticky);
    }
    
    public function hasSearch(): bool
    {
        return $this->search->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getSearch() : int
    {
        return $this->search->getValue();
    }

    /**
     * @param int $search
     */
    public function setSearch(int $search)
    {
        $this->search->setChanged(true);
        $this->search->setValue($search);
    }
    
    public function hasTopref(): bool
    {
        return $this->topref->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getTopref() : int
    {
        return $this->topref->getValue();
    }

    /**
     * @param int $topref
     */
    public function setTopref(int $topref)
    {
        $this->topref->setChanged(true);
        $this->topref->setValue($topref);
    }
    
    public function hasTopld(): bool
    {
        return $this->topld->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getTopld() : int
    {
        return $this->topld->getValue();
    }

    /**
     * @param int $topld
     */
    public function setTopld(int $topld)
    {
        $this->topld->setChanged(true);
        $this->topld->setValue($topld);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): StatisticSettings
    {
        return new StatisticSettings();
    }
}