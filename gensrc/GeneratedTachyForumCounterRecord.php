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

class GeneratedTachyForumCounterRecord implements Record {
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $forumId RecordValue */
    protected $forumId;
    
    /** @var $threadCount RecordValue */
    protected $threadCount;
    
    /** @var $replyCount RecordValue */
    protected $replyCount;

    public function __construct() {
		$this->userId = new RecordValue();
		$this->forumId = new RecordValue();
		$this->threadCount = new RecordValue();
		$this->replyCount = new RecordValue();
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
    
    public function hasForumId(): bool
    {
        return $this->forumId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getForumId() : int
    {
        return $this->forumId->getValue();
    }

    /**
     * @param int $forumId
     */
    public function setForumId(int $forumId)
    {
        $this->forumId->setChanged(true);
        $this->forumId->setValue($forumId);
    }
    
    public function hasThreadCount(): bool
    {
        return $this->threadCount->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getThreadCount() : int
    {
        return $this->threadCount->getValue();
    }

    /**
     * @param int $threadCount
     */
    public function setThreadCount(int $threadCount)
    {
        $this->threadCount->setChanged(true);
        $this->threadCount->setValue($threadCount);
    }
    
    public function hasReplyCount(): bool
    {
        return $this->replyCount->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getReplyCount() : int
    {
        return $this->replyCount->getValue();
    }

    /**
     * @param int $replyCount
     */
    public function setReplyCount(int $replyCount)
    {
        $this->replyCount->setChanged(true);
        $this->replyCount->setValue($replyCount);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): TachyForumCounter
    {
        return new TachyForumCounter();
    }
}