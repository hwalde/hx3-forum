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

class GeneratedVbSeoServiceUpdateRecord implements Record {
    
    /** @var $sThreadId int */
    private $sThreadId;
    
    /** @var $sUpdated int */
    private $sUpdated;
    
    /** @var $sDateLine int|null */
    private $sDateLine;
    
    /** @var $sType int */
    private $sType;
    
    public function hasSThreadId(): bool
    {
        return isset($this->sThreadId);
    }    

    /**
     * @return int
     */
    public function getSThreadId() : int
    {
        return $this->sThreadId;
    }

    /**
     * @param int $sThreadId
     */
    public function setSThreadId(int $sThreadId)
    {
        $this->sThreadId = $sThreadId;
    }
    
    public function hasSUpdated(): bool
    {
        return isset($this->sUpdated);
    }    

    /**
     * @return int
     */
    public function getSUpdated() : int
    {
        return $this->sUpdated;
    }

    /**
     * @param int $sUpdated
     */
    public function setSUpdated(int $sUpdated)
    {
        $this->sUpdated = $sUpdated;
    }
    
    public function hasSDateLine(): bool
    {
        return isset($this->sDateLine);
    }    

    /**
     * @return int|null
     */
    public function getSDateLine() : ?int
    {
        return $this->sDateLine;
    }

    /**
     * @param int|null $sDateLine
     */
    public function setSDateLine(?int $sDateLine)
    {
        $this->sDateLine = $sDateLine;
    }
    
    public function hasSType(): bool
    {
        return isset($this->sType);
    }    

    /**
     * @return int
     */
    public function getSType() : int
    {
        return $this->sType;
    }

    /**
     * @param int $sType
     */
    public function setSType(int $sType)
    {
        $this->sType = $sType;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): VbSeoServiceUpdate
    {
        return new VbSeoServiceUpdate();
    }
}