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

class GeneratedStrikesRecord implements Record {
    
    /** @var $strikeTime int */
    private $strikeTime;
    
    /** @var $strikeIp string */
    private $strikeIp;
    
    /** @var $userName string */
    private $userName;
    
    public function hasStrikeTime(): bool
    {
        return isset($this->strikeTime);
    }    

    /**
     * @return int
     */
    public function getStrikeTime() : int
    {
        return $this->strikeTime;
    }

    /**
     * @param int $strikeTime
     */
    public function setStrikeTime(int $strikeTime)
    {
        $this->strikeTime = $strikeTime;
    }
    
    public function hasStrikeIp(): bool
    {
        return isset($this->strikeIp);
    }    

    /**
     * @return string
     */
    public function getStrikeIp() : string
    {
        return $this->strikeIp;
    }

    /**
     * @param string $strikeIp
     */
    public function setStrikeIp(string $strikeIp)
    {
        $this->strikeIp = $strikeIp;
    }
    
    public function hasUserName(): bool
    {
        return isset($this->userName);
    }    

    /**
     * @return string
     */
    public function getUserName() : string
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     */
    public function setUserName(string $userName)
    {
        $this->userName = $userName;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Strikes
    {
        return new Strikes();
    }
}