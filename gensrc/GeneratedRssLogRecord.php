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

class GeneratedRssLogRecord implements Record {
    
    /** @var $rssFeedId int */
    protected $rssFeedId;
    
    /** @var $itemId int */
    protected $itemId;
    
    /** @var $itemType string */
    protected $itemType;
    
    /** @var $uniqueHash string */
    protected $uniqueHash;
    
    /** @var $contentHash string */
    protected $contentHash;
    
    /** @var $dateLine int */
    protected $dateLine;
    
    /** @var $threadActionTime int */
    protected $threadActionTime;
    
    /** @var $threadActionComplete int */
    protected $threadActionComplete;
    
    public function hasRssFeedId(): bool
    {
        return isset($this->rssFeedId);
    }    

    /**
     * @return int
     */
    public function getRssFeedId() : int
    {
        return $this->rssFeedId;
    }

    /**
     * @param int $rssFeedId
     */
    public function setRssFeedId(int $rssFeedId)
    {
        $this->rssFeedId = $rssFeedId;
    }
    
    public function hasItemId(): bool
    {
        return isset($this->itemId);
    }    

    /**
     * @return int
     */
    public function getItemId() : int
    {
        return $this->itemId;
    }

    /**
     * @param int $itemId
     */
    public function setItemId(int $itemId)
    {
        $this->itemId = $itemId;
    }
    
    public function hasItemType(): bool
    {
        return isset($this->itemType);
    }    

    /**
     * @return string
     */
    public function getItemType() : string
    {
        return $this->itemType;
    }

    /**
     * @param string $itemType
     */
    public function setItemType(string $itemType)
    {
        $this->itemType = $itemType;
    }
    
    public function hasUniqueHash(): bool
    {
        return isset($this->uniqueHash);
    }    

    /**
     * @return string
     */
    public function getUniqueHash() : string
    {
        return $this->uniqueHash;
    }

    /**
     * @param string $uniqueHash
     */
    public function setUniqueHash(string $uniqueHash)
    {
        $this->uniqueHash = $uniqueHash;
    }
    
    public function hasContentHash(): bool
    {
        return isset($this->contentHash);
    }    

    /**
     * @return string
     */
    public function getContentHash() : string
    {
        return $this->contentHash;
    }

    /**
     * @param string $contentHash
     */
    public function setContentHash(string $contentHash)
    {
        $this->contentHash = $contentHash;
    }
    
    public function hasDateLine(): bool
    {
        return isset($this->dateLine);
    }    

    /**
     * @return int
     */
    public function getDateLine() : int
    {
        return $this->dateLine;
    }

    /**
     * @param int $dateLine
     */
    public function setDateLine(int $dateLine)
    {
        $this->dateLine = $dateLine;
    }
    
    public function hasThreadActionTime(): bool
    {
        return isset($this->threadActionTime);
    }    

    /**
     * @return int
     */
    public function getThreadActionTime() : int
    {
        return $this->threadActionTime;
    }

    /**
     * @param int $threadActionTime
     */
    public function setThreadActionTime(int $threadActionTime)
    {
        $this->threadActionTime = $threadActionTime;
    }
    
    public function hasThreadActionComplete(): bool
    {
        return isset($this->threadActionComplete);
    }    

    /**
     * @return int
     */
    public function getThreadActionComplete() : int
    {
        return $this->threadActionComplete;
    }

    /**
     * @param int $threadActionComplete
     */
    public function setThreadActionComplete(int $threadActionComplete)
    {
        $this->threadActionComplete = $threadActionComplete;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): RssLog
    {
        return new RssLog();
    }
}