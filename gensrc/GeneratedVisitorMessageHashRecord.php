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

class GeneratedVisitorMessageHashRecord extends AbstractUpdateableRecord implements UpdateableRecord {
    
    /** @var $postUserId RecordValue */
    protected $postUserId;
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $dupeHash RecordValue */
    protected $dupeHash;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;

    public function __construct() {
		$this->postUserId = new RecordValue();
		$this->userId = new RecordValue();
		$this->dupeHash = new RecordValue();
		$this->dateLine = new RecordValue();
    }
    
    public function hasPostUserId(): bool
    {
        return $this->postUserId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPostUserId() : int
    {
        return $this->postUserId->getValue();
    }

    /**
     * @param int $postUserId
     */
    public function setPostUserId(int $postUserId)
    {
        $this->postUserId->setChanged(true);
        $this->postUserId->setValue($postUserId);
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
    public function __getModel(): VisitorMessageHash
    {
        return new VisitorMessageHash();
    }
}