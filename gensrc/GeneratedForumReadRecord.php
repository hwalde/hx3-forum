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

class GeneratedForumReadRecord implements Record {
    
    /** @var $userId int */
    private $userId;
    
    /** @var $forumId int */
    private $forumId;
    
    /** @var $readTime int */
    private $readTime;
    
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
    public function __getModel(): ForumRead
    {
        return new ForumRead();
    }
}