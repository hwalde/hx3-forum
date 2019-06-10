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

class GeneratedVbSeoBlackListRecord implements Record {
    
    /** @var $lDomain RecordValue */
    protected $lDomain;
    
    /** @var $lType RecordValue */
    protected $lType;
    
    /** @var $lDateLine RecordValue */
    protected $lDateLine;
    
    /** @var $lHits RecordValue */
    protected $lHits;
    
    /** @var $lDeleted RecordValue */
    protected $lDeleted;

    public function __construct() {
		$this->lDomain = new RecordValue();
		$this->lType = new RecordValue();
		$this->lDateLine = new RecordValue();
		$this->lHits = new RecordValue();
		$this->lDeleted = new RecordValue();
    }
    
    public function hasLDomain(): bool
    {
        return $this->lDomain->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getLDomain() : string
    {
        return $this->lDomain->getValue();
    }

    /**
     * @param string $lDomain
     */
    public function setLDomain(string $lDomain)
    {
        $this->lDomain->setChanged(true);
        $this->lDomain->setValue($lDomain);
    }
    
    public function hasLType(): bool
    {
        return $this->lType->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getLType() : int
    {
        return $this->lType->getValue();
    }

    /**
     * @param int $lType
     */
    public function setLType(int $lType)
    {
        $this->lType->setChanged(true);
        $this->lType->setValue($lType);
    }
    
    public function hasLDateLine(): bool
    {
        return $this->lDateLine->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getLDateLine() : int
    {
        return $this->lDateLine->getValue();
    }

    /**
     * @param int $lDateLine
     */
    public function setLDateLine(int $lDateLine)
    {
        $this->lDateLine->setChanged(true);
        $this->lDateLine->setValue($lDateLine);
    }
    
    public function hasLHits(): bool
    {
        return $this->lHits->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getLHits() : int
    {
        return $this->lHits->getValue();
    }

    /**
     * @param int $lHits
     */
    public function setLHits(int $lHits)
    {
        $this->lHits->setChanged(true);
        $this->lHits->setValue($lHits);
    }
    
    public function hasLDeleted(): bool
    {
        return $this->lDeleted->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getLDeleted() : int
    {
        return $this->lDeleted->getValue();
    }

    /**
     * @param int $lDeleted
     */
    public function setLDeleted(int $lDeleted)
    {
        $this->lDeleted->setChanged(true);
        $this->lDeleted->setValue($lDeleted);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): VbSeoBlackList
    {
        return new VbSeoBlackList();
    }
}