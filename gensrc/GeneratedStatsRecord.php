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

class GeneratedStatsRecord implements Record {
    
    /** @var $dateLine RecordValue */
    protected $dateLine;
    
    /** @var $nUser RecordValue */
    protected $nUser;
    
    /** @var $nThread RecordValue */
    protected $nThread;
    
    /** @var $nPost RecordValue */
    protected $nPost;
    
    /** @var $ausers RecordValue */
    protected $ausers;

    public function __construct() {
		$this->dateLine = new RecordValue();
		$this->nUser = new RecordValue();
		$this->nThread = new RecordValue();
		$this->nPost = new RecordValue();
		$this->ausers = new RecordValue();
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
    
    public function hasNUser(): bool
    {
        return $this->nUser->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getNUser() : int
    {
        return $this->nUser->getValue();
    }

    /**
     * @param int $nUser
     */
    public function setNUser(int $nUser)
    {
        $this->nUser->setChanged(true);
        $this->nUser->setValue($nUser);
    }
    
    public function hasNThread(): bool
    {
        return $this->nThread->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getNThread() : int
    {
        return $this->nThread->getValue();
    }

    /**
     * @param int $nThread
     */
    public function setNThread(int $nThread)
    {
        $this->nThread->setChanged(true);
        $this->nThread->setValue($nThread);
    }
    
    public function hasNPost(): bool
    {
        return $this->nPost->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getNPost() : int
    {
        return $this->nPost->getValue();
    }

    /**
     * @param int $nPost
     */
    public function setNPost(int $nPost)
    {
        $this->nPost->setChanged(true);
        $this->nPost->setValue($nPost);
    }
    
    public function hasAusers(): bool
    {
        return $this->ausers->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAusers() : int
    {
        return $this->ausers->getValue();
    }

    /**
     * @param int $ausers
     */
    public function setAusers(int $ausers)
    {
        $this->ausers->setChanged(true);
        $this->ausers->setValue($ausers);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Stats
    {
        return new Stats();
    }
}