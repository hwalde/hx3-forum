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

class GeneratedStatisticCountriesRecord implements Record {
    
    /** @var $id RecordValue */
    protected $id;
    
    /** @var $countryCode RecordValue */
    protected $countryCode;
    
    /** @var $countryName RecordValue */
    protected $countryName;
    
    /** @var $flagLink RecordValue */
    protected $flagLink;
    
    /** @var $balkenLink RecordValue */
    protected $balkenLink;
    
    /** @var $hostCounter RecordValue */
    protected $hostCounter;
    
    /** @var $browserLanguageCounter RecordValue */
    protected $browserLanguageCounter;

    public function __construct() {
		$this->id = new RecordValue();
		$this->countryCode = new RecordValue();
		$this->countryName = new RecordValue();
		$this->flagLink = new RecordValue();
		$this->balkenLink = new RecordValue();
		$this->hostCounter = new RecordValue();
		$this->browserLanguageCounter = new RecordValue();
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
    
    public function hasCountryCode(): bool
    {
        return $this->countryCode->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode->getValue();
    }

    /**
     * @param string $countryCode
     */
    public function setCountryCode(string $countryCode)
    {
        $this->countryCode->setChanged(true);
        $this->countryCode->setValue($countryCode);
    }
    
    public function hasCountryName(): bool
    {
        return $this->countryName->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getCountryName() : string
    {
        return $this->countryName->getValue();
    }

    /**
     * @param string $countryName
     */
    public function setCountryName(string $countryName)
    {
        $this->countryName->setChanged(true);
        $this->countryName->setValue($countryName);
    }
    
    public function hasFlagLink(): bool
    {
        return $this->flagLink->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getFlagLink() : string
    {
        return $this->flagLink->getValue();
    }

    /**
     * @param string $flagLink
     */
    public function setFlagLink(string $flagLink)
    {
        $this->flagLink->setChanged(true);
        $this->flagLink->setValue($flagLink);
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
    
    public function hasHostCounter(): bool
    {
        return $this->hostCounter->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getHostCounter() : int
    {
        return $this->hostCounter->getValue();
    }

    /**
     * @param int $hostCounter
     */
    public function setHostCounter(int $hostCounter)
    {
        $this->hostCounter->setChanged(true);
        $this->hostCounter->setValue($hostCounter);
    }
    
    public function hasBrowserLanguageCounter(): bool
    {
        return $this->browserLanguageCounter->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getBrowserLanguageCounter() : int
    {
        return $this->browserLanguageCounter->getValue();
    }

    /**
     * @param int $browserLanguageCounter
     */
    public function setBrowserLanguageCounter(int $browserLanguageCounter)
    {
        $this->browserLanguageCounter->setChanged(true);
        $this->browserLanguageCounter->setValue($browserLanguageCounter);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): StatisticCountries
    {
        return new StatisticCountries();
    }
}