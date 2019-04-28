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

class GeneratedTachyThreadPostRecord implements Record {
    
    /** @var $userId int */
    private $userId;
    
    /** @var $threadId int */
    private $threadId;
    
    /** @var $lastPost int */
    private $lastPost;
    
    /** @var $lastPoster string */
    private $lastPoster;
    
    /** @var $lastPostId int */
    private $lastPostId;
    
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
    
    public function hasLastPost(): bool
    {
        return isset($this->lastPost);
    }    

    /**
     * @return int
     */
    public function getLastPost() : int
    {
        return $this->lastPost;
    }

    /**
     * @param int $lastPost
     */
    public function setLastPost(int $lastPost)
    {
        $this->lastPost = $lastPost;
    }
    
    public function hasLastPoster(): bool
    {
        return isset($this->lastPoster);
    }    

    /**
     * @return string
     */
    public function getLastPoster() : string
    {
        return $this->lastPoster;
    }

    /**
     * @param string $lastPoster
     */
    public function setLastPoster(string $lastPoster)
    {
        $this->lastPoster = $lastPoster;
    }
    
    public function hasLastPostId(): bool
    {
        return isset($this->lastPostId);
    }    

    /**
     * @return int
     */
    public function getLastPostId() : int
    {
        return $this->lastPostId;
    }

    /**
     * @param int $lastPostId
     */
    public function setLastPostId(int $lastPostId)
    {
        $this->lastPostId = $lastPostId;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): TachyThreadPost
    {
        return new TachyThreadPost();
    }
}