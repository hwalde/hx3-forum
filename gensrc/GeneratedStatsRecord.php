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

class GeneratedStatsRecord implements Record {
    
    /** @var $dateLine int */
    protected $dateLine;
    
    /** @var $nUser int */
    protected $nUser;
    
    /** @var $nThread int */
    protected $nThread;
    
    /** @var $nPost int */
    protected $nPost;
    
    /** @var $ausers int */
    protected $ausers;
    
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
    
    public function hasNUser(): bool
    {
        return isset($this->nUser);
    }    

    /**
     * @return int
     */
    public function getNUser() : int
    {
        return $this->nUser;
    }

    /**
     * @param int $nUser
     */
    public function setNUser(int $nUser)
    {
        $this->nUser = $nUser;
    }
    
    public function hasNThread(): bool
    {
        return isset($this->nThread);
    }    

    /**
     * @return int
     */
    public function getNThread() : int
    {
        return $this->nThread;
    }

    /**
     * @param int $nThread
     */
    public function setNThread(int $nThread)
    {
        $this->nThread = $nThread;
    }
    
    public function hasNPost(): bool
    {
        return isset($this->nPost);
    }    

    /**
     * @return int
     */
    public function getNPost() : int
    {
        return $this->nPost;
    }

    /**
     * @param int $nPost
     */
    public function setNPost(int $nPost)
    {
        $this->nPost = $nPost;
    }
    
    public function hasAusers(): bool
    {
        return isset($this->ausers);
    }    

    /**
     * @return int
     */
    public function getAusers() : int
    {
        return $this->ausers;
    }

    /**
     * @param int $ausers
     */
    public function setAusers(int $ausers)
    {
        $this->ausers = $ausers;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Stats
    {
        return new Stats();
    }
}