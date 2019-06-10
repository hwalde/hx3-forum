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

class GeneratedCpSessionRecord implements Record {
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $hash RecordValue */
    protected $hash;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;

    public function __construct() {
		$this->userId = new RecordValue();
		$this->hash = new RecordValue();
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
    
    public function hasHash(): bool
    {
        return $this->hash->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getHash() : string
    {
        return $this->hash->getValue();
    }

    /**
     * @param string $hash
     */
    public function setHash(string $hash)
    {
        $this->hash->setChanged(true);
        $this->hash->setValue($hash);
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
    public function __getModel(): CpSession
    {
        return new CpSession();
    }
}