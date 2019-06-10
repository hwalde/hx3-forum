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

class GeneratedTachyThreadCounterRecord implements Record {
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $threadId RecordValue */
    protected $threadId;
    
    /** @var $replyCount RecordValue */
    protected $replyCount;

    public function __construct() {
		$this->userId = new RecordValue();
		$this->threadId = new RecordValue();
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
    
    public function hasThreadId(): bool
    {
        return $this->threadId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getThreadId() : int
    {
        return $this->threadId->getValue();
    }

    /**
     * @param int $threadId
     */
    public function setThreadId(int $threadId)
    {
        $this->threadId->setChanged(true);
        $this->threadId->setValue($threadId);
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
    public function __getModel(): TachyThreadCounter
    {
        return new TachyThreadCounter();
    }
}