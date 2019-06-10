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

class GeneratedTagThreadRecord implements Record {
    
    /** @var $tagId RecordValue */
    protected $tagId;
    
    /** @var $threadId RecordValue */
    protected $threadId;
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;

    public function __construct() {
		$this->tagId = new RecordValue();
		$this->threadId = new RecordValue();
		$this->userId = new RecordValue();
		$this->dateLine = new RecordValue();
    }
    
    public function hasTagId(): bool
    {
        return $this->tagId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getTagId() : int
    {
        return $this->tagId->getValue();
    }

    /**
     * @param int $tagId
     */
    public function setTagId(int $tagId)
    {
        $this->tagId->setChanged(true);
        $this->tagId->setValue($tagId);
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
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): TagThread
    {
        return new TagThread();
    }
}