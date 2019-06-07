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

class GeneratedStatisticCounterRecord implements Record {
    
    /** @var $forCounter string */
    protected $forCounter;
    
    /** @var $summe int */
    protected $summe;
    
    public function hasForCounter(): bool
    {
        return isset($this->forCounter);
    }    

    /**
     * @return string
     */
    public function getForCounter() : string
    {
        return $this->forCounter;
    }

    /**
     * @param string $forCounter
     */
    public function setForCounter(string $forCounter)
    {
        $this->forCounter = $forCounter;
    }
    
    public function hasSumme(): bool
    {
        return isset($this->summe);
    }    

    /**
     * @return int
     */
    public function getSumme() : int
    {
        return $this->summe;
    }

    /**
     * @param int $summe
     */
    public function setSumme(int $summe)
    {
        $this->summe = $summe;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): StatisticCounter
    {
        return new StatisticCounter();
    }
}