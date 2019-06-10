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

class GeneratedStatisticSpiderRecord implements Record {
    
    /** @var $id RecordValue */
    protected $id;
    
    /** @var $spiderName RecordValue */
    protected $spiderName;
    
    /** @var $spiderLink RecordValue */
    protected $spiderLink;
    
    /** @var $balkenLink RecordValue */
    protected $balkenLink;
    
    /** @var $zaehler RecordValue */
    protected $zaehler;

    public function __construct() {
		$this->id = new RecordValue();
		$this->spiderName = new RecordValue();
		$this->spiderLink = new RecordValue();
		$this->balkenLink = new RecordValue();
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
    
    public function hasSpiderName(): bool
    {
        return $this->spiderName->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getSpiderName() : string
    {
        return $this->spiderName->getValue();
    }

    /**
     * @param string $spiderName
     */
    public function setSpiderName(string $spiderName)
    {
        $this->spiderName->setChanged(true);
        $this->spiderName->setValue($spiderName);
    }
    
    public function hasSpiderLink(): bool
    {
        return $this->spiderLink->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getSpiderLink() : string
    {
        return $this->spiderLink->getValue();
    }

    /**
     * @param string $spiderLink
     */
    public function setSpiderLink(string $spiderLink)
    {
        $this->spiderLink->setChanged(true);
        $this->spiderLink->setValue($spiderLink);
    }
    
    public function hasBalkenLink(): bool
    {
        return $this->balkenLink->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getBalkenLink() : string
    {
        return $this->balkenLink->getValue();
    }

    /**
     * @param string $balkenLink
     */
    public function setBalkenLink(string $balkenLink)
    {
        $this->balkenLink->setChanged(true);
        $this->balkenLink->setValue($balkenLink);
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
    public function __getModel(): StatisticSpider
    {
        return new StatisticSpider();
    }
}