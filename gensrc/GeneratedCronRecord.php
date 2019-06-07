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

class GeneratedCronRecord implements Record {
    
    /** @var $cronId int */
    protected $cronId;
    
    /** @var $nextRun int */
    protected $nextRun;
    
    /** @var $weekDay int */
    protected $weekDay;
    
    /** @var $day int */
    protected $day;
    
    /** @var $hour int */
    protected $hour;
    
    /** @var $minute string */
    protected $minute;
    
    /** @var $fileName string */
    protected $fileName;
    
    /** @var $logLevel int */
    protected $logLevel;
    
    /** @var $active int */
    protected $active;
    
    /** @var $varName string */
    protected $varName;
    
    /** @var $volatile int */
    protected $volatile;
    
    /** @var $product string */
    protected $product;
    
    public function hasCronId(): bool
    {
        return isset($this->cronId);
    }    

    /**
     * @return int
     */
    public function getCronId() : int
    {
        return $this->cronId;
    }

    /**
     * @param int $cronId
     */
    public function setCronId(int $cronId)
    {
        $this->cronId = $cronId;
    }
    
    public function hasNextRun(): bool
    {
        return isset($this->nextRun);
    }    

    /**
     * @return int
     */
    public function getNextRun() : int
    {
        return $this->nextRun;
    }

    /**
     * @param int $nextRun
     */
    public function setNextRun(int $nextRun)
    {
        $this->nextRun = $nextRun;
    }
    
    public function hasWeekDay(): bool
    {
        return isset($this->weekDay);
    }    

    /**
     * @return int
     */
    public function getWeekDay() : int
    {
        return $this->weekDay;
    }

    /**
     * @param int $weekDay
     */
    public function setWeekDay(int $weekDay)
    {
        $this->weekDay = $weekDay;
    }
    
    public function hasDay(): bool
    {
        return isset($this->day);
    }    

    /**
     * @return int
     */
    public function getDay() : int
    {
        return $this->day;
    }

    /**
     * @param int $day
     */
    public function setDay(int $day)
    {
        $this->day = $day;
    }
    
    public function hasHour(): bool
    {
        return isset($this->hour);
    }    

    /**
     * @return int
     */
    public function getHour() : int
    {
        return $this->hour;
    }

    /**
     * @param int $hour
     */
    public function setHour(int $hour)
    {
        $this->hour = $hour;
    }
    
    public function hasMinute(): bool
    {
        return isset($this->minute);
    }    

    /**
     * @return string
     */
    public function getMinute() : string
    {
        return $this->minute;
    }

    /**
     * @param string $minute
     */
    public function setMinute(string $minute)
    {
        $this->minute = $minute;
    }
    
    public function hasFileName(): bool
    {
        return isset($this->fileName);
    }    

    /**
     * @return string
     */
    public function getFileName() : string
    {
        return $this->fileName;
    }

    /**
     * @param string $fileName
     */
    public function setFileName(string $fileName)
    {
        $this->fileName = $fileName;
    }
    
    public function hasLogLevel(): bool
    {
        return isset($this->logLevel);
    }    

    /**
     * @return int
     */
    public function getLogLevel() : int
    {
        return $this->logLevel;
    }

    /**
     * @param int $logLevel
     */
    public function setLogLevel(int $logLevel)
    {
        $this->logLevel = $logLevel;
    }
    
    public function hasActive(): bool
    {
        return isset($this->active);
    }    

    /**
     * @return int
     */
    public function getActive() : int
    {
        return $this->active;
    }

    /**
     * @param int $active
     */
    public function setActive(int $active)
    {
        $this->active = $active;
    }
    
    public function hasVarName(): bool
    {
        return isset($this->varName);
    }    

    /**
     * @return string
     */
    public function getVarName() : string
    {
        return $this->varName;
    }

    /**
     * @param string $varName
     */
    public function setVarName(string $varName)
    {
        $this->varName = $varName;
    }
    
    public function hasVolatile(): bool
    {
        return isset($this->volatile);
    }    

    /**
     * @return int
     */
    public function getVolatile() : int
    {
        return $this->volatile;
    }

    /**
     * @param int $volatile
     */
    public function setVolatile(int $volatile)
    {
        $this->volatile = $volatile;
    }
    
    public function hasProduct(): bool
    {
        return isset($this->product);
    }    

    /**
     * @return string
     */
    public function getProduct() : string
    {
        return $this->product;
    }

    /**
     * @param string $product
     */
    public function setProduct(string $product)
    {
        $this->product = $product;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Cron
    {
        return new Cron();
    }
}