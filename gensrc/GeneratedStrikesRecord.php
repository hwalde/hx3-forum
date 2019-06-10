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
use POOQ\AbstractUpdateableRecord;
use POOQ\UpdateableRecord;

class GeneratedStrikesRecord extends AbstractUpdateableRecord implements UpdateableRecord {
    
    /** @var $strikeTime RecordValue */
    protected $strikeTime;
    
    /** @var $strikeIp RecordValue */
    protected $strikeIp;
    
    /** @var $userName RecordValue */
    protected $userName;

    public function __construct() {
		$this->strikeTime = new RecordValue();
		$this->strikeIp = new RecordValue();
		$this->userName = new RecordValue();
    }
    
    public function hasStrikeTime(): bool
    {
        return $this->strikeTime->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getStrikeTime() : int
    {
        return $this->strikeTime->getValue();
    }

    /**
     * @param int $strikeTime
     */
    public function setStrikeTime(int $strikeTime)
    {
        $this->strikeTime->setChanged(true);
        $this->strikeTime->setValue($strikeTime);
    }
    
    public function hasStrikeIp(): bool
    {
        return $this->strikeIp->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getStrikeIp() : string
    {
        return $this->strikeIp->getValue();
    }

    /**
     * @param string $strikeIp
     */
    public function setStrikeIp(string $strikeIp)
    {
        $this->strikeIp->setChanged(true);
        $this->strikeIp->setValue($strikeIp);
    }
    
    public function hasUserName(): bool
    {
        return $this->userName->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getUserName() : string
    {
        return $this->userName->getValue();
    }

    /**
     * @param string $userName
     */
    public function setUserName(string $userName)
    {
        $this->userName->setChanged(true);
        $this->userName->setValue($userName);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Strikes
    {
        return new Strikes();
    }
}