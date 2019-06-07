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

class GeneratedStatisticRefererRecord implements Record {
    
    /** @var $id int */
    protected $id;
    
    /** @var $referer string */
    protected $referer;
    
    /** @var $zaehler int */
    protected $zaehler;
    
    public function hasId(): bool
    {
        return isset($this->id);
    }    

    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }
    
    public function hasReferer(): bool
    {
        return isset($this->referer);
    }    

    /**
     * @return string
     */
    public function getReferer() : string
    {
        return $this->referer;
    }

    /**
     * @param string $referer
     */
    public function setReferer(string $referer)
    {
        $this->referer = $referer;
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
    public function __getModel(): StatisticReferer
    {
        return new StatisticReferer();
    }
}