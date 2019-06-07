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

class GeneratedStatisticSpiderRecord implements Record {
    
    /** @var $id int */
    protected $id;
    
    /** @var $spiderName string */
    protected $spiderName;
    
    /** @var $spiderLink string */
    protected $spiderLink;
    
    /** @var $balkenLink string */
    protected $balkenLink;
    
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
    
    public function hasSpiderName(): bool
    {
        return isset($this->spiderName);
    }    

    /**
     * @return string
     */
    public function getSpiderName() : string
    {
        return $this->spiderName;
    }

    /**
     * @param string $spiderName
     */
    public function setSpiderName(string $spiderName)
    {
        $this->spiderName = $spiderName;
    }
    
    public function hasSpiderLink(): bool
    {
        return isset($this->spiderLink);
    }    

    /**
     * @return string
     */
    public function getSpiderLink() : string
    {
        return $this->spiderLink;
    }

    /**
     * @param string $spiderLink
     */
    public function setSpiderLink(string $spiderLink)
    {
        $this->spiderLink = $spiderLink;
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
    public function __getModel(): StatisticSpider
    {
        return new StatisticSpider();
    }
}