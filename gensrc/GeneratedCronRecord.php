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

class GeneratedCronRecord implements Record {
    
    /** @var $cronId RecordValue */
    protected $cronId;
    
    /** @var $nextRun RecordValue */
    protected $nextRun;
    
    /** @var $weekDay RecordValue */
    protected $weekDay;
    
    /** @var $day RecordValue */
    protected $day;
    
    /** @var $hour RecordValue */
    protected $hour;
    
    /** @var $minute RecordValue */
    protected $minute;
    
    /** @var $fileName RecordValue */
    protected $fileName;
    
    /** @var $logLevel RecordValue */
    protected $logLevel;
    
    /** @var $active RecordValue */
    protected $active;
    
    /** @var $varName RecordValue */
    protected $varName;
    
    /** @var $volatile RecordValue */
    protected $volatile;
    
    /** @var $product RecordValue */
    protected $product;

    public function __construct() {
		$this->cronId = new RecordValue();
		$this->nextRun = new RecordValue();
		$this->weekDay = new RecordValue();
		$this->day = new RecordValue();
		$this->hour = new RecordValue();
		$this->minute = new RecordValue();
		$this->fileName = new RecordValue();
		$this->logLevel = new RecordValue();
		$this->active = new RecordValue();
		$this->varName = new RecordValue();
		$this->volatile = new RecordValue();
		$this->product = new RecordValue();
    }
    
    public function hasCronId(): bool
    {
        return $this->cronId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getCronId() : int
    {
        return $this->cronId->getValue();
    }

    /**
     * @param int $cronId
     */
    public function setCronId(int $cronId)
    {
        $this->cronId->setChanged(true);
        $this->cronId->setValue($cronId);
    }
    
    public function hasNextRun(): bool
    {
        return $this->nextRun->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getNextRun() : int
    {
        return $this->nextRun->getValue();
    }

    /**
     * @param int $nextRun
     */
    public function setNextRun(int $nextRun)
    {
        $this->nextRun->setChanged(true);
        $this->nextRun->setValue($nextRun);
    }
    
    public function hasWeekDay(): bool
    {
        return $this->weekDay->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getWeekDay() : int
    {
        return $this->weekDay->getValue();
    }

    /**
     * @param int $weekDay
     */
    public function setWeekDay(int $weekDay)
    {
        $this->weekDay->setChanged(true);
        $this->weekDay->setValue($weekDay);
    }
    
    public function hasDay(): bool
    {
        return $this->day->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getDay() : int
    {
        return $this->day->getValue();
    }

    /**
     * @param int $day
     */
    public function setDay(int $day)
    {
        $this->day->setChanged(true);
        $this->day->setValue($day);
    }
    
    public function hasHour(): bool
    {
        return $this->hour->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getHour() : int
    {
        return $this->hour->getValue();
    }

    /**
     * @param int $hour
     */
    public function setHour(int $hour)
    {
        $this->hour->setChanged(true);
        $this->hour->setValue($hour);
    }
    
    public function hasMinute(): bool
    {
        return $this->minute->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getMinute() : string
    {
        return $this->minute->getValue();
    }

    /**
     * @param string $minute
     */
    public function setMinute(string $minute)
    {
        $this->minute->setChanged(true);
        $this->minute->setValue($minute);
    }
    
    public function hasFileName(): bool
    {
        return $this->fileName->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getFileName() : string
    {
        return $this->fileName->getValue();
    }

    /**
     * @param string $fileName
     */
    public function setFileName(string $fileName)
    {
        $this->fileName->setChanged(true);
        $this->fileName->setValue($fileName);
    }
    
    public function hasLogLevel(): bool
    {
        return $this->logLevel->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getLogLevel() : int
    {
        return $this->logLevel->getValue();
    }

    /**
     * @param int $logLevel
     */
    public function setLogLevel(int $logLevel)
    {
        $this->logLevel->setChanged(true);
        $this->logLevel->setValue($logLevel);
    }
    
    public function hasActive(): bool
    {
        return $this->active->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getActive() : int
    {
        return $this->active->getValue();
    }

    /**
     * @param int $active
     */
    public function setActive(int $active)
    {
        $this->active->setChanged(true);
        $this->active->setValue($active);
    }
    
    public function hasVarName(): bool
    {
        return $this->varName->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getVarName() : string
    {
        return $this->varName->getValue();
    }

    /**
     * @param string $varName
     */
    public function setVarName(string $varName)
    {
        $this->varName->setChanged(true);
        $this->varName->setValue($varName);
    }
    
    public function hasVolatile(): bool
    {
        return $this->volatile->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getVolatile() : int
    {
        return $this->volatile->getValue();
    }

    /**
     * @param int $volatile
     */
    public function setVolatile(int $volatile)
    {
        $this->volatile->setChanged(true);
        $this->volatile->setValue($volatile);
    }
    
    public function hasProduct(): bool
    {
        return $this->product->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getProduct() : string
    {
        return $this->product->getValue();
    }

    /**
     * @param string $product
     */
    public function setProduct(string $product)
    {
        $this->product->setChanged(true);
        $this->product->setValue($product);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Cron
    {
        return new Cron();
    }
}