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

class GeneratedThreadReadRecord implements Record {
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $threadId RecordValue */
    protected $threadId;
    
    /** @var $readTime RecordValue */
    protected $readTime;

    public function __construct() {
		$this->userId = new RecordValue();
		$this->threadId = new RecordValue();
		$this->readTime = new RecordValue();
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
    
    public function hasReadTime(): bool
    {
        return $this->readTime->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getReadTime() : int
    {
        return $this->readTime->getValue();
    }

    /**
     * @param int $readTime
     */
    public function setReadTime(int $readTime)
    {
        $this->readTime->setChanged(true);
        $this->readTime->setValue($readTime);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): ThreadRead
    {
        return new ThreadRead();
    }
}