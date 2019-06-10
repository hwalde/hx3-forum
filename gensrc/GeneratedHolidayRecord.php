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

class GeneratedHolidayRecord implements Record {
    
    /** @var $holidayId RecordValue */
    protected $holidayId;
    
    /** @var $recurring RecordValue */
    protected $recurring;
    
    /** @var $recurOption RecordValue */
    protected $recurOption;
    
    /** @var $allowSmilies RecordValue */
    protected $allowSmilies;

    public function __construct() {
		$this->holidayId = new RecordValue();
		$this->recurring = new RecordValue();
		$this->recurOption = new RecordValue();
		$this->allowSmilies = new RecordValue();
    }
    
    public function hasHolidayId(): bool
    {
        return $this->holidayId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getHolidayId() : int
    {
        return $this->holidayId->getValue();
    }

    /**
     * @param int $holidayId
     */
    public function setHolidayId(int $holidayId)
    {
        $this->holidayId->setChanged(true);
        $this->holidayId->setValue($holidayId);
    }
    
    public function hasRecurring(): bool
    {
        return $this->recurring->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getRecurring() : int
    {
        return $this->recurring->getValue();
    }

    /**
     * @param int $recurring
     */
    public function setRecurring(int $recurring)
    {
        $this->recurring->setChanged(true);
        $this->recurring->setValue($recurring);
    }
    
    public function hasRecurOption(): bool
    {
        return $this->recurOption->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getRecurOption() : string
    {
        return $this->recurOption->getValue();
    }

    /**
     * @param string $recurOption
     */
    public function setRecurOption(string $recurOption)
    {
        $this->recurOption->setChanged(true);
        $this->recurOption->setValue($recurOption);
    }
    
    public function hasAllowSmilies(): bool
    {
        return $this->allowSmilies->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAllowSmilies() : int
    {
        return $this->allowSmilies->getValue();
    }

    /**
     * @param int $allowSmilies
     */
    public function setAllowSmilies(int $allowSmilies)
    {
        $this->allowSmilies->setChanged(true);
        $this->allowSmilies->setValue($allowSmilies);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Holiday
    {
        return new Holiday();
    }
}