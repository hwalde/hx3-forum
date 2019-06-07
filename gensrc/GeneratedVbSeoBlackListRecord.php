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

class GeneratedVbSeoBlackListRecord implements Record {
    
    /** @var $lDomain string */
    protected $lDomain;
    
    /** @var $lType int */
    protected $lType;
    
    /** @var $lDateLine int */
    protected $lDateLine;
    
    /** @var $lHits int */
    protected $lHits;
    
    /** @var $lDeleted int */
    protected $lDeleted;
    
    public function hasLDomain(): bool
    {
        return isset($this->lDomain);
    }    

    /**
     * @return string
     */
    public function getLDomain() : string
    {
        return $this->lDomain;
    }

    /**
     * @param string $lDomain
     */
    public function setLDomain(string $lDomain)
    {
        $this->lDomain = $lDomain;
    }
    
    public function hasLType(): bool
    {
        return isset($this->lType);
    }    

    /**
     * @return int
     */
    public function getLType() : int
    {
        return $this->lType;
    }

    /**
     * @param int $lType
     */
    public function setLType(int $lType)
    {
        $this->lType = $lType;
    }
    
    public function hasLDateLine(): bool
    {
        return isset($this->lDateLine);
    }    

    /**
     * @return int
     */
    public function getLDateLine() : int
    {
        return $this->lDateLine;
    }

    /**
     * @param int $lDateLine
     */
    public function setLDateLine(int $lDateLine)
    {
        $this->lDateLine = $lDateLine;
    }
    
    public function hasLHits(): bool
    {
        return isset($this->lHits);
    }    

    /**
     * @return int
     */
    public function getLHits() : int
    {
        return $this->lHits;
    }

    /**
     * @param int $lHits
     */
    public function setLHits(int $lHits)
    {
        $this->lHits = $lHits;
    }
    
    public function hasLDeleted(): bool
    {
        return isset($this->lDeleted);
    }    

    /**
     * @return int
     */
    public function getLDeleted() : int
    {
        return $this->lDeleted;
    }

    /**
     * @param int $lDeleted
     */
    public function setLDeleted(int $lDeleted)
    {
        $this->lDeleted = $lDeleted;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): VbSeoBlackList
    {
        return new VbSeoBlackList();
    }
}