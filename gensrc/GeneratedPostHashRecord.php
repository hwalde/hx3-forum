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
use POOQ\AbstractUpdateableRecord;
use POOQ\UpdateableRecord;

class GeneratedPostHashRecord extends AbstractUpdateableRecord implements UpdateableRecord {
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $threadId RecordValue */
    protected $threadId;
    
    /** @var $postId RecordValue */
    protected $postId;
    
    /** @var $dupeHash RecordValue */
    protected $dupeHash;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;

    public function __construct() {
		$this->userId = new RecordValue();
		$this->threadId = new RecordValue();
		$this->postId = new RecordValue();
		$this->dupeHash = new RecordValue();
		$this->dateLine = new RecordValue();
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
    
    public function hasPostId(): bool
    {
        return $this->postId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPostId() : int
    {
        return $this->postId->getValue();
    }

    /**
     * @param int $postId
     */
    public function setPostId(int $postId)
    {
        $this->postId->setChanged(true);
        $this->postId->setValue($postId);
    }
    
    public function hasDupeHash(): bool
    {
        return $this->dupeHash->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getDupeHash() : string
    {
        return $this->dupeHash->getValue();
    }

    /**
     * @param string $dupeHash
     */
    public function setDupeHash(string $dupeHash)
    {
        $this->dupeHash->setChanged(true);
        $this->dupeHash->setValue($dupeHash);
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
    public function __getModel(): PostHash
    {
        return new PostHash();
    }
}