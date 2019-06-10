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

class GeneratedVbSeoServiceUpdateRecord extends AbstractUpdateableRecord implements UpdateableRecord {
    
    /** @var $sThreadId RecordValue */
    protected $sThreadId;
    
    /** @var $sUpdated RecordValue */
    protected $sUpdated;
    
    /** @var $sDateLine RecordValue */
    protected $sDateLine;
    
    /** @var $sType RecordValue */
    protected $sType;

    public function __construct() {
		$this->sThreadId = new RecordValue();
		$this->sUpdated = new RecordValue();
		$this->sDateLine = new RecordValue();
		$this->sType = new RecordValue();
    }
    
    public function hasSThreadId(): bool
    {
        return $this->sThreadId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getSThreadId() : int
    {
        return $this->sThreadId->getValue();
    }

    /**
     * @param int $sThreadId
     */
    public function setSThreadId(int $sThreadId)
    {
        $this->sThreadId->setChanged(true);
        $this->sThreadId->setValue($sThreadId);
    }
    
    public function hasSUpdated(): bool
    {
        return $this->sUpdated->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getSUpdated() : int
    {
        return $this->sUpdated->getValue();
    }

    /**
     * @param int $sUpdated
     */
    public function setSUpdated(int $sUpdated)
    {
        $this->sUpdated->setChanged(true);
        $this->sUpdated->setValue($sUpdated);
    }
    
    public function hasSDateLine(): bool
    {
        return $this->sDateLine->hasBeenSet();
    }    

    /**
     * @return int|null
     */
    public function getSDateLine() : ?int
    {
        return $this->sDateLine->getValue();
    }

    /**
     * @param int|null $sDateLine
     */
    public function setSDateLine(?int $sDateLine)
    {
        $this->sDateLine->setChanged(true);
        $this->sDateLine->setValue($sDateLine);
    }
    
    public function hasSType(): bool
    {
        return $this->sType->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getSType() : int
    {
        return $this->sType->getValue();
    }

    /**
     * @param int $sType
     */
    public function setSType(int $sType)
    {
        $this->sType->setChanged(true);
        $this->sType->setValue($sType);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): VbSeoServiceUpdate
    {
        return new VbSeoServiceUpdate();
    }
}