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

class GeneratedThreadReadRecord implements Record {
    
    /** @var $userId int */
    protected $userId;
    
    /** @var $threadId int */
    protected $threadId;
    
    /** @var $readTime int */
    protected $readTime;
    
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
    
    public function hasThreadId(): bool
    {
        return isset($this->threadId);
    }    

    /**
     * @return int
     */
    public function getThreadId() : int
    {
        return $this->threadId;
    }

    /**
     * @param int $threadId
     */
    public function setThreadId(int $threadId)
    {
        $this->threadId = $threadId;
    }
    
    public function hasReadTime(): bool
    {
        return isset($this->readTime);
    }    

    /**
     * @return int
     */
    public function getReadTime() : int
    {
        return $this->readTime;
    }

    /**
     * @param int $readTime
     */
    public function setReadTime(int $readTime)
    {
        $this->readTime = $readTime;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): ThreadRead
    {
        return new ThreadRead();
    }
}