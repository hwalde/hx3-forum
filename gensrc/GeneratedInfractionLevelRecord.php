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

class GeneratedInfractionLevelRecord implements Record {
    
    /** @var $infractionLevelId int */
    private $infractionLevelId;
    
    /** @var $points int */
    private $points;
    
    /** @var $expires int */
    private $expires;
    
    /** @var $period string */
    private $period;
    
    /** @var $warning int|null */
    private $warning;
    
    /** @var $extend int */
    private $extend;
    
    public function hasInfractionLevelId(): bool
    {
        return isset($this->infractionLevelId);
    }    

    /**
     * @return int
     */
    public function getInfractionLevelId() : int
    {
        return $this->infractionLevelId;
    }

    /**
     * @param int $infractionLevelId
     */
    public function setInfractionLevelId(int $infractionLevelId)
    {
        $this->infractionLevelId = $infractionLevelId;
    }
    
    public function hasPoints(): bool
    {
        return isset($this->points);
    }    

    /**
     * @return int
     */
    public function getPoints() : int
    {
        return $this->points;
    }

    /**
     * @param int $points
     */
    public function setPoints(int $points)
    {
        $this->points = $points;
    }
    
    public function hasExpires(): bool
    {
        return isset($this->expires);
    }    

    /**
     * @return int
     */
    public function getExpires() : int
    {
        return $this->expires;
    }

    /**
     * @param int $expires
     */
    public function setExpires(int $expires)
    {
        $this->expires = $expires;
    }
    
    public function hasPeriod(): bool
    {
        return isset($this->period);
    }    

    /**
     * @return string
     */
    public function getPeriod() : string
    {
        return $this->period;
    }

    /**
     * @param string $period
     */
    public function setPeriod(string $period)
    {
        $this->period = $period;
    }
    
    public function hasWarning(): bool
    {
        return isset($this->warning);
    }    

    /**
     * @return int|null
     */
    public function getWarning() : ?int
    {
        return $this->warning;
    }

    /**
     * @param int|null $warning
     */
    public function setWarning(?int $warning)
    {
        $this->warning = $warning;
    }
    
    public function hasExtend(): bool
    {
        return isset($this->extend);
    }    

    /**
     * @return int
     */
    public function getExtend() : int
    {
        return $this->extend;
    }

    /**
     * @param int $extend
     */
    public function setExtend(int $extend)
    {
        $this->extend = $extend;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): InfractionLevel
    {
        return new InfractionLevel();
    }
}