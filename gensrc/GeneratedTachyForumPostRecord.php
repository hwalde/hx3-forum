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

class GeneratedTachyForumPostRecord implements Record {
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $forumId RecordValue */
    protected $forumId;
    
    /** @var $lastPost RecordValue */
    protected $lastPost;
    
    /** @var $lastPoster RecordValue */
    protected $lastPoster;
    
    /** @var $lastThread RecordValue */
    protected $lastThread;
    
    /** @var $lastThreadId RecordValue */
    protected $lastThreadId;
    
    /** @var $lastIconId RecordValue */
    protected $lastIconId;
    
    /** @var $lastPostId RecordValue */
    protected $lastPostId;
    
    /** @var $lastPrefixId RecordValue */
    protected $lastPrefixId;

    public function __construct() {
		$this->userId = new RecordValue();
		$this->forumId = new RecordValue();
		$this->lastPost = new RecordValue();
		$this->lastPoster = new RecordValue();
		$this->lastThread = new RecordValue();
		$this->lastThreadId = new RecordValue();
		$this->lastIconId = new RecordValue();
		$this->lastPostId = new RecordValue();
		$this->lastPrefixId = new RecordValue();
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
    
    public function hasLastThread(): bool
    {
        return $this->lastThread->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getLastThread() : string
    {
        return $this->lastThread->getValue();
    }

    /**
     * @param string $lastThread
     */
    public function setLastThread(string $lastThread)
    {
        $this->lastThread->setChanged(true);
        $this->lastThread->setValue($lastThread);
    }
    
    public function hasLastThreadId(): bool
    {
        return $this->lastThreadId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getLastThreadId() : int
    {
        return $this->lastThreadId->getValue();
    }

    /**
     * @param int $lastThreadId
     */
    public function setLastThreadId(int $lastThreadId)
    {
        $this->lastThreadId->setChanged(true);
        $this->lastThreadId->setValue($lastThreadId);
    }
    
    public function hasLastIconId(): bool
    {
        return $this->lastIconId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getLastIconId() : int
    {
        return $this->lastIconId->getValue();
    }

    /**
     * @param int $lastIconId
     */
    public function setLastIconId(int $lastIconId)
    {
        $this->lastIconId->setChanged(true);
        $this->lastIconId->setValue($lastIconId);
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
    
    public function hasLastPrefixId(): bool
    {
        return $this->lastPrefixId->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getLastPrefixId() : string
    {
        return $this->lastPrefixId->getValue();
    }

    /**
     * @param string $lastPrefixId
     */
    public function setLastPrefixId(string $lastPrefixId)
    {
        $this->lastPrefixId->setChanged(true);
        $this->lastPrefixId->setValue($lastPrefixId);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): TachyForumPost
    {
        return new TachyForumPost();
    }
}