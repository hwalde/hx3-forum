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

class GeneratedStatisticCountriesRecord implements Record {
    
    /** @var $id int */
    private $id;
    
    /** @var $countryCode string */
    private $countryCode;
    
    /** @var $countryName string */
    private $countryName;
    
    /** @var $flagLink string */
    private $flagLink;
    
    /** @var $balkenLink string */
    private $balkenLink;
    
    /** @var $hostCounter int */
    private $hostCounter;
    
    /** @var $browserLanguageCounter int */
    private $browserLanguageCounter;
    
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
    
    public function hasCountryCode(): bool
    {
        return isset($this->countryCode);
    }    

    /**
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     */
    public function setCountryCode(string $countryCode)
    {
        $this->countryCode = $countryCode;
    }
    
    public function hasCountryName(): bool
    {
        return isset($this->countryName);
    }    

    /**
     * @return string
     */
    public function getCountryName() : string
    {
        return $this->countryName;
    }

    /**
     * @param string $countryName
     */
    public function setCountryName(string $countryName)
    {
        $this->countryName = $countryName;
    }
    
    public function hasFlagLink(): bool
    {
        return isset($this->flagLink);
    }    

    /**
     * @return string
     */
    public function getFlagLink() : string
    {
        return $this->flagLink;
    }

    /**
     * @param string $flagLink
     */
    public function setFlagLink(string $flagLink)
    {
        $this->flagLink = $flagLink;
    }
    
    public function hasBalkenLink(): bool
    {
        return isset($this->balkenLink);
    }    

    /**
     * @return string
     */
    public function getBalkenLink() : string
    {
        return $this->balkenLink;
    }

    /**
     * @param string $balkenLink
     */
    public function setBalkenLink(string $balkenLink)
    {
        $this->balkenLink = $balkenLink;
    }
    
    public function hasHostCounter(): bool
    {
        return isset($this->hostCounter);
    }    

    /**
     * @return int
     */
    public function getHostCounter() : int
    {
        return $this->hostCounter;
    }

    /**
     * @param int $hostCounter
     */
    public function setHostCounter(int $hostCounter)
    {
        $this->hostCounter = $hostCounter;
    }
    
    public function hasBrowserLanguageCounter(): bool
    {
        return isset($this->browserLanguageCounter);
    }    

    /**
     * @return int
     */
    public function getBrowserLanguageCounter() : int
    {
        return $this->browserLanguageCounter;
    }

    /**
     * @param int $browserLanguageCounter
     */
    public function setBrowserLanguageCounter(int $browserLanguageCounter)
    {
        $this->browserLanguageCounter = $browserLanguageCounter;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): StatisticCountries
    {
        return new StatisticCountries();
    }
}