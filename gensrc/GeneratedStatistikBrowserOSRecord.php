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

class GeneratedStatistikBrowserOSRecord extends AbstractUpdateableRecord implements UpdateableRecord {
    
    /** @var $typ RecordValue */
    protected $typ;
    
    /** @var $system RecordValue */
    protected $system;
    
    /** @var $zaehler RecordValue */
    protected $zaehler;

    public function __construct() {
		$this->typ = new RecordValue();
		$this->system = new RecordValue();
		$this->zaehler = new RecordValue();
    }
    
    public function hasTyp(): bool
    {
        return $this->typ->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getTyp() : string
    {
        return $this->typ->getValue();
    }

    /**
     * @param string $typ
     */
    public function setTyp(string $typ)
    {
        $this->typ->setChanged(true);
        $this->typ->setValue($typ);
    }
    
    public function hasSystem(): bool
    {
        return $this->system->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getSystem() : string
    {
        return $this->system->getValue();
    }

    /**
     * @param string $system
     */
    public function setSystem(string $system)
    {
        $this->system->setChanged(true);
        $this->system->setValue($system);
    }
    
    public function hasZaehler(): bool
    {
        return $this->zaehler->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getZaehler() : int
    {
        return $this->zaehler->getValue();
    }

    /**
     * @param int $zaehler
     */
    public function setZaehler(int $zaehler)
    {
        $this->zaehler->setChanged(true);
        $this->zaehler->setValue($zaehler);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): StatistikBrowserOS
    {
        return new StatistikBrowserOS();
    }
}