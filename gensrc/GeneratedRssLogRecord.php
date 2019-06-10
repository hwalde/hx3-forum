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

class GeneratedRssLogRecord implements Record {
    
    /** @var $rssFeedId RecordValue */
    protected $rssFeedId;
    
    /** @var $itemId RecordValue */
    protected $itemId;
    
    /** @var $itemType RecordValue */
    protected $itemType;
    
    /** @var $uniqueHash RecordValue */
    protected $uniqueHash;
    
    /** @var $contentHash RecordValue */
    protected $contentHash;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;
    
    /** @var $threadActionTime RecordValue */
    protected $threadActionTime;
    
    /** @var $threadActionComplete RecordValue */
    protected $threadActionComplete;

    public function __construct() {
		$this->rssFeedId = new RecordValue();
		$this->itemId = new RecordValue();
		$this->itemType = new RecordValue();
		$this->uniqueHash = new RecordValue();
		$this->contentHash = new RecordValue();
		$this->dateLine = new RecordValue();
		$this->threadActionTime = new RecordValue();
		$this->threadActionComplete = new RecordValue();
    }
    
    public function hasRssFeedId(): bool
    {
        return $this->rssFeedId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getRssFeedId() : int
    {
        return $this->rssFeedId->getValue();
    }

    /**
     * @param int $rssFeedId
     */
    public function setRssFeedId(int $rssFeedId)
    {
        $this->rssFeedId->setChanged(true);
        $this->rssFeedId->setValue($rssFeedId);
    }
    
    public function hasItemId(): bool
    {
        return $this->itemId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getItemId() : int
    {
        return $this->itemId->getValue();
    }

    /**
     * @param int $itemId
     */
    public function setItemId(int $itemId)
    {
        $this->itemId->setChanged(true);
        $this->itemId->setValue($itemId);
    }
    
    public function hasItemType(): bool
    {
        return $this->itemType->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getItemType() : string
    {
        return $this->itemType->getValue();
    }

    /**
     * @param string $itemType
     */
    public function setItemType(string $itemType)
    {
        $this->itemType->setChanged(true);
        $this->itemType->setValue($itemType);
    }
    
    public function hasUniqueHash(): bool
    {
        return $this->uniqueHash->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getUniqueHash() : string
    {
        return $this->uniqueHash->getValue();
    }

    /**
     * @param string $uniqueHash
     */
    public function setUniqueHash(string $uniqueHash)
    {
        $this->uniqueHash->setChanged(true);
        $this->uniqueHash->setValue($uniqueHash);
    }
    
    public function hasContentHash(): bool
    {
        return $this->contentHash->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getContentHash() : string
    {
        return $this->contentHash->getValue();
    }

    /**
     * @param string $contentHash
     */
    public function setContentHash(string $contentHash)
    {
        $this->contentHash->setChanged(true);
        $this->contentHash->setValue($contentHash);
    }
    
    public function hasDateLine(): bool
    {
        return $this->dateLine->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getDateLine() : int
    {
        return $this->dateLine->getValue();
    }

    /**
     * @param int $dateLine
     */
    public function setDateLine(int $dateLine)
    {
        $this->dateLine->setChanged(true);
        $this->dateLine->setValue($dateLine);
    }
    
    public function hasThreadActionTime(): bool
    {
        return $this->threadActionTime->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getThreadActionTime() : int
    {
        return $this->threadActionTime->getValue();
    }

    /**
     * @param int $threadActionTime
     */
    public function setThreadActionTime(int $threadActionTime)
    {
        $this->threadActionTime->setChanged(true);
        $this->threadActionTime->setValue($threadActionTime);
    }
    
    public function hasThreadActionComplete(): bool
    {
        return $this->threadActionComplete->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getThreadActionComplete() : int
    {
        return $this->threadActionComplete->getValue();
    }

    /**
     * @param int $threadActionComplete
     */
    public function setThreadActionComplete(int $threadActionComplete)
    {
        $this->threadActionComplete->setChanged(true);
        $this->threadActionComplete->setValue($threadActionComplete);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): RssLog
    {
        return new RssLog();
    }
}