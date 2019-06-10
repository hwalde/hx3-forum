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

class GeneratedTachyThreadPostRecord implements Record {
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $threadId RecordValue */
    protected $threadId;
    
    /** @var $lastPost RecordValue */
    protected $lastPost;
    
    /** @var $lastPoster RecordValue */
    protected $lastPoster;
    
    /** @var $lastPostId RecordValue */
    protected $lastPostId;

    public function __construct() {
		$this->userId = new RecordValue();
		$this->threadId = new RecordValue();
		$this->lastPost = new RecordValue();
		$this->lastPoster = new RecordValue();
		$this->lastPostId = new RecordValue();
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
    
    public function hasLastPost(): bool
    {
        return $this->lastPost->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getLastPost() : int
    {
        return $this->lastPost->getValue();
    }

    /**
     * @param int $lastPost
     */
    public function setLastPost(int $lastPost)
    {
        $this->lastPost->setChanged(true);
        $this->lastPost->setValue($lastPost);
    }
    
    public function hasLastPoster(): bool
    {
        return $this->lastPoster->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getLastPoster() : string
    {
        return $this->lastPoster->getValue();
    }

    /**
     * @param string $lastPoster
     */
    public function setLastPoster(string $lastPoster)
    {
        $this->lastPoster->setChanged(true);
        $this->lastPoster->setValue($lastPoster);
    }
    
    public function hasLastPostId(): bool
    {
        return $this->lastPostId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getLastPostId() : int
    {
        return $this->lastPostId->getValue();
    }

    /**
     * @param int $lastPostId
     */
    public function setLastPostId(int $lastPostId)
    {
        $this->lastPostId->setChanged(true);
        $this->lastPostId->setValue($lastPostId);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): TachyThreadPost
    {
        return new TachyThreadPost();
    }
}