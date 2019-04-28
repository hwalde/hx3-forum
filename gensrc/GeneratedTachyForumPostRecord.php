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

class GeneratedTachyForumPostRecord implements Record {
    
    /** @var $userId int */
    private $userId;
    
    /** @var $forumId int */
    private $forumId;
    
    /** @var $lastPost int */
    private $lastPost;
    
    /** @var $lastPoster string */
    private $lastPoster;
    
    /** @var $lastThread string */
    private $lastThread;
    
    /** @var $lastThreadId int */
    private $lastThreadId;
    
    /** @var $lastIconId int */
    private $lastIconId;
    
    /** @var $lastPostId int */
    private $lastPostId;
    
    /** @var $lastPrefixId string */
    private $lastPrefixId;
    
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
    
    public function hasLastThread(): bool
    {
        return isset($this->lastThread);
    }    

    /**
     * @return string
     */
    public function getLastThread() : string
    {
        return $this->lastThread;
    }

    /**
     * @param string $lastThread
     */
    public function setLastThread(string $lastThread)
    {
        $this->lastThread = $lastThread;
    }
    
    public function hasLastThreadId(): bool
    {
        return isset($this->lastThreadId);
    }    

    /**
     * @return int
     */
    public function getLastThreadId() : int
    {
        return $this->lastThreadId;
    }

    /**
     * @param int $lastThreadId
     */
    public function setLastThreadId(int $lastThreadId)
    {
        $this->lastThreadId = $lastThreadId;
    }
    
    public function hasLastIconId(): bool
    {
        return isset($this->lastIconId);
    }    

    /**
     * @return int
     */
    public function getLastIconId() : int
    {
        return $this->lastIconId;
    }

    /**
     * @param int $lastIconId
     */
    public function setLastIconId(int $lastIconId)
    {
        $this->lastIconId = $lastIconId;
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
    
    public function hasLastPrefixId(): bool
    {
        return isset($this->lastPrefixId);
    }    

    /**
     * @return string
     */
    public function getLastPrefixId() : string
    {
        return $this->lastPrefixId;
    }

    /**
     * @param string $lastPrefixId
     */
    public function setLastPrefixId(string $lastPrefixId)
    {
        $this->lastPrefixId = $lastPrefixId;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): TachyForumPost
    {
        return new TachyForumPost();
    }
}