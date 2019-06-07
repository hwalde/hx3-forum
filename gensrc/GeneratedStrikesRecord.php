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

class GeneratedStrikesRecord extends AbstractUpdateableRecord implements UpdateableRecord {
    
    /** @var $strikeTime int */
    protected $strikeTime;
    
    /** @var $strikeIp string */
    protected $strikeIp;
    
    /** @var $userName string */
    protected $userName;
    
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