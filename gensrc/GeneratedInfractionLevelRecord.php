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

class GeneratedInfractionLevelRecord implements Record {
    
    /** @var $infractionLevelId RecordValue */
    protected $infractionLevelId;
    
    /** @var $points RecordValue */
    protected $points;
    
    /** @var $expires RecordValue */
    protected $expires;
    
    /** @var $period RecordValue */
    protected $period;
    
    /** @var $warning RecordValue */
    protected $warning;
    
    /** @var $extend RecordValue */
    protected $extend;

    public function __construct() {
		$this->infractionLevelId = new RecordValue();
		$this->points = new RecordValue();
		$this->expires = new RecordValue();
		$this->period = new RecordValue();
		$this->warning = new RecordValue();
		$this->extend = new RecordValue();
    }
    
    public function hasInfractionLevelId(): bool
    {
        return $this->infractionLevelId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getInfractionLevelId() : int
    {
        return $this->infractionLevelId->getValue();
    }

    /**
     * @param int $infractionLevelId
     */
    public function setInfractionLevelId(int $infractionLevelId)
    {
        $this->infractionLevelId->setChanged(true);
        $this->infractionLevelId->setValue($infractionLevelId);
    }
    
    public function hasPoints(): bool
    {
        return $this->points->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPoints() : int
    {
        return $this->points->getValue();
    }

    /**
     * @param int $points
     */
    public function setPoints(int $points)
    {
        $this->points->setChanged(true);
        $this->points->setValue($points);
    }
    
    public function hasExpires(): bool
    {
        return $this->expires->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getExpires() : int
    {
        return $this->expires->getValue();
    }

    /**
     * @param int $expires
     */
    public function setExpires(int $expires)
    {
        $this->expires->setChanged(true);
        $this->expires->setValue($expires);
    }
    
    public function hasPeriod(): bool
    {
        return $this->period->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPeriod() : string
    {
        return $this->period->getValue();
    }

    /**
     * @param string $period
     */
    public function setPeriod(string $period)
    {
        $this->period->setChanged(true);
        $this->period->setValue($period);
    }
    
    public function hasWarning(): bool
    {
        return $this->warning->hasBeenSet();
    }    

    /**
     * @return int|null
     */
    public function getWarning() : ?int
    {
        return $this->warning->getValue();
    }

    /**
     * @param int|null $warning
     */
    public function setWarning(?int $warning)
    {
        $this->warning->setChanged(true);
        $this->warning->setValue($warning);
    }
    
    public function hasExtend(): bool
    {
        return $this->extend->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getExtend() : int
    {
        return $this->extend->getValue();
    }

    /**
     * @param int $extend
     */
    public function setExtend(int $extend)
    {
        $this->extend->setChanged(true);
        $this->extend->setValue($extend);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): InfractionLevel
    {
        return new InfractionLevel();
    }
}