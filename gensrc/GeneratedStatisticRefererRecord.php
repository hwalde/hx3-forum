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

class GeneratedStatisticRefererRecord implements Record {
    
    /** @var $id RecordValue */
    protected $id;
    
    /** @var $referer RecordValue */
    protected $referer;
    
    /** @var $zaehler RecordValue */
    protected $zaehler;

    public function __construct() {
		$this->id = new RecordValue();
		$this->referer = new RecordValue();
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
    
    public function hasReferer(): bool
    {
        return $this->referer->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getReferer() : string
    {
        return $this->referer->getValue();
    }

    /**
     * @param string $referer
     */
    public function setReferer(string $referer)
    {
        $this->referer->setChanged(true);
        $this->referer->setValue($referer);
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
    public function __getModel(): StatisticReferer
    {
        return new StatisticReferer();
    }
}