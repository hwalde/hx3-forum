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

class GeneratedStatisticDomainRecord implements Record {
    
    /** @var $id RecordValue */
    protected $id;
    
    /** @var $domain RecordValue */
    protected $domain;
    
    /** @var $zaehler RecordValue */
    protected $zaehler;

    public function __construct() {
		$this->id = new RecordValue();
		$this->domain = new RecordValue();
		$this->zaehler = new RecordValue();
    }
    
    public function hasId(): bool
    {
        return $this->id->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id->getValue();
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id->setChanged(true);
        $this->id->setValue($id);
    }
    
    public function hasDomain(): bool
    {
        return $this->domain->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getDomain() : string
    {
        return $this->domain->getValue();
    }

    /**
     * @param string $domain
     */
    public function setDomain(string $domain)
    {
        $this->domain->setChanged(true);
        $this->domain->setValue($domain);
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
    public function __getModel(): StatisticDomain
    {
        return new StatisticDomain();
    }
}