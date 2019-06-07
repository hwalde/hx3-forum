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

use POOQ\AbstractUpdateableRecord;
use POOQ\UpdateableRecord;

class GeneratedStatistikBrowserOSRecord extends AbstractUpdateableRecord implements UpdateableRecord {
    
    /** @var $typ string */
    protected $typ;
    
    /** @var $system string */
    protected $system;
    
    /** @var $zaehler int */
    protected $zaehler;
    
    public function hasTyp(): bool
    {
        return isset($this->typ);
    }    

    /**
     * @return string
     */
    public function getTyp() : string
    {
        return $this->typ;
    }

    /**
     * @param string $typ
     */
    public function setTyp(string $typ)
    {
        $this->typ = $typ;
    }
    
    public function hasSystem(): bool
    {
        return isset($this->system);
    }    

    /**
     * @return string
     */
    public function getSystem() : string
    {
        return $this->system;
    }

    /**
     * @param string $system
     */
    public function setSystem(string $system)
    {
        $this->system = $system;
    }
    
    public function hasZaehler(): bool
    {
        return isset($this->zaehler);
    }    

    /**
     * @return int
     */
    public function getZaehler() : int
    {
        return $this->zaehler;
    }

    /**
     * @param int $zaehler
     */
    public function setZaehler(int $zaehler)
    {
        $this->zaehler = $zaehler;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): StatistikBrowserOS
    {
        return new StatistikBrowserOS();
    }
}