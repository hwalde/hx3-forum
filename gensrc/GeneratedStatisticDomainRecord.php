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

class GeneratedStatisticDomainRecord implements Record {
    
    /** @var $id int */
    protected $id;
    
    /** @var $domain string */
    protected $domain;
    
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
    
    public function hasDomain(): bool
    {
        return isset($this->domain);
    }    

    /**
     * @return string
     */
    public function getDomain() : string
    {
        return $this->domain;
    }

    /**
     * @param string $domain
     */
    public function setDomain(string $domain)
    {
        $this->domain = $domain;
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
    public function __getModel(): StatisticDomain
    {
        return new StatisticDomain();
    }
}