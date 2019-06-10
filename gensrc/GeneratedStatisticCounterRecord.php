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

class GeneratedStatisticCounterRecord implements Record {
    
    /** @var $forCounter RecordValue */
    protected $forCounter;
    
    /** @var $summe RecordValue */
    protected $summe;

    public function __construct() {
		$this->forCounter = new RecordValue();
		$this->summe = new RecordValue();
    }
    
    public function hasForCounter(): bool
    {
        return $this->forCounter->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getForCounter() : string
    {
        return $this->forCounter->getValue();
    }

    /**
     * @param string $forCounter
     */
    public function setForCounter(string $forCounter)
    {
        $this->forCounter->setChanged(true);
        $this->forCounter->setValue($forCounter);
    }
    
    public function hasSumme(): bool
    {
        return $this->summe->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getSumme() : int
    {
        return $this->summe->getValue();
    }

    /**
     * @param int $summe
     */
    public function setSumme(int $summe)
    {
        $this->summe->setChanged(true);
        $this->summe->setValue($summe);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): StatisticCounter
    {
        return new StatisticCounter();
    }
}