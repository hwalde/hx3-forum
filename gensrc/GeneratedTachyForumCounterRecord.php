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

class GeneratedTachyForumCounterRecord implements Record {
    
    /** @var $userId int */
    protected $userId;
    
    /** @var $forumId int */
    protected $forumId;
    
    /** @var $threadCount int */
    protected $threadCount;
    
    /** @var $replyCount int */
    protected $replyCount;
    
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
    
    public function hasForumId(): bool
    {
        return isset($this->forumId);
    }    

    /**
     * @return int
     */
    public function getForumId() : int
    {
        return $this->forumId;
    }

    /**
     * @param int $forumId
     */
    public function setForumId(int $forumId)
    {
        $this->forumId = $forumId;
    }
    
    public function hasThreadCount(): bool
    {
        return isset($this->threadCount);
    }    

    /**
     * @return int
     */
    public function getThreadCount() : int
    {
        return $this->threadCount;
    }

    /**
     * @param int $threadCount
     */
    public function setThreadCount(int $threadCount)
    {
        $this->threadCount = $threadCount;
    }
    
    public function hasReplyCount(): bool
    {
        return isset($this->replyCount);
    }    

    /**
     * @return int
     */
    public function getReplyCount() : int
    {
        return $this->replyCount;
    }

    /**
     * @param int $replyCount
     */
    public function setReplyCount(int $replyCount)
    {
        $this->replyCount = $replyCount;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): TachyForumCounter
    {
        return new TachyForumCounter();
    }
}