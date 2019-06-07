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

class GeneratedHolidayRecord implements Record {
    
    /** @var $holidayId int */
    protected $holidayId;
    
    /** @var $recurring int */
    protected $recurring;
    
    /** @var $recurOption string */
    protected $recurOption;
    
    /** @var $allowSmilies int */
    protected $allowSmilies;
    
    public function hasHolidayId(): bool
    {
        return isset($this->holidayId);
    }    

    /**
     * @return int
     */
    public function getHolidayId() : int
    {
        return $this->holidayId;
    }

    /**
     * @param int $holidayId
     */
    public function setHolidayId(int $holidayId)
    {
        $this->holidayId = $holidayId;
    }
    
    public function hasRecurring(): bool
    {
        return isset($this->recurring);
    }    

    /**
     * @return int
     */
    public function getRecurring() : int
    {
        return $this->recurring;
    }

    /**
     * @param int $recurring
     */
    public function setRecurring(int $recurring)
    {
        $this->recurring = $recurring;
    }
    
    public function hasRecurOption(): bool
    {
        return isset($this->recurOption);
    }    

    /**
     * @return string
     */
    public function getRecurOption() : string
    {
        return $this->recurOption;
    }

    /**
     * @param string $recurOption
     */
    public function setRecurOption(string $recurOption)
    {
        $this->recurOption = $recurOption;
    }
    
    public function hasAllowSmilies(): bool
    {
        return isset($this->allowSmilies);
    }    

    /**
     * @return int
     */
    public function getAllowSmilies() : int
    {
        return $this->allowSmilies;
    }

    /**
     * @param int $allowSmilies
     */
    public function setAllowSmilies(int $allowSmilies)
    {
        $this->allowSmilies = $allowSmilies;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Holiday
    {
        return new Holiday();
    }
}