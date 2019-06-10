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

class GeneratedCalendarRecord implements Record {
    
    /** @var $calendarId RecordValue */
    protected $calendarId;
    
    /** @var $title RecordValue */
    protected $title;
    
    /** @var $description RecordValue */
    protected $description;
    
    /** @var $displayOrder RecordValue */
    protected $displayOrder;
    
    /** @var $newEventEmail RecordValue */
    protected $newEventEmail;
    
    /** @var $moderateNew RecordValue */
    protected $moderateNew;
    
    /** @var $startOfWeek RecordValue */
    protected $startOfWeek;
    
    /** @var $options RecordValue */
    protected $options;
    
    /** @var $cutOff RecordValue */
    protected $cutOff;
    
    /** @var $eventCount RecordValue */
    protected $eventCount;
    
    /** @var $birthdayCount RecordValue */
    protected $birthdayCount;
    
    /** @var $startYear RecordValue */
    protected $startYear;
    
    /** @var $endYear RecordValue */
    protected $endYear;
    
    /** @var $holidays RecordValue */
    protected $holidays;

    public function __construct() {
		$this->calendarId = new RecordValue();
		$this->title = new RecordValue();
		$this->description = new RecordValue();
		$this->displayOrder = new RecordValue();
		$this->newEventEmail = new RecordValue();
		$this->moderateNew = new RecordValue();
		$this->startOfWeek = new RecordValue();
		$this->options = new RecordValue();
		$this->cutOff = new RecordValue();
		$this->eventCount = new RecordValue();
		$this->birthdayCount = new RecordValue();
		$this->startYear = new RecordValue();
		$this->endYear = new RecordValue();
		$this->holidays = new RecordValue();
    }
    
    public function hasCalendarId(): bool
    {
        return $this->calendarId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getCalendarId() : int
    {
        return $this->calendarId->getValue();
    }

    /**
     * @param int $calendarId
     */
    public function setCalendarId(int $calendarId)
    {
        $this->calendarId->setChanged(true);
        $this->calendarId->setValue($calendarId);
    }
    
    public function hasTitle(): bool
    {
        return $this->title->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title->getValue();
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title->setChanged(true);
        $this->title->setValue($title);
    }
    
    public function hasDescription(): bool
    {
        return $this->description->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description->getValue();
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->description->setChanged(true);
        $this->description->setValue($description);
    }
    
    public function hasDisplayOrder(): bool
    {
        return $this->displayOrder->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getDisplayOrder() : int
    {
        return $this->displayOrder->getValue();
    }

    /**
     * @param int $displayOrder
     */
    public function setDisplayOrder(int $displayOrder)
    {
        $this->displayOrder->setChanged(true);
        $this->displayOrder->setValue($displayOrder);
    }
    
    public function hasNewEventEmail(): bool
    {
        return $this->newEventEmail->hasBeenSet();
    }    

    /**
     * @return string|null
     */
    public function getNewEventEmail() : ?string
    {
        return $this->newEventEmail->getValue();
    }

    /**
     * @param string|null $newEventEmail
     */
    public function setNewEventEmail(?string $newEventEmail)
    {
        $this->newEventEmail->setChanged(true);
        $this->newEventEmail->setValue($newEventEmail);
    }
    
    public function hasModerateNew(): bool
    {
        return $this->moderateNew->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getModerateNew() : int
    {
        return $this->moderateNew->getValue();
    }

    /**
     * @param int $moderateNew
     */
    public function setModerateNew(int $moderateNew)
    {
        $this->moderateNew->setChanged(true);
        $this->moderateNew->setValue($moderateNew);
    }
    
    public function hasStartOfWeek(): bool
    {
        return $this->startOfWeek->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getStartOfWeek() : int
    {
        return $this->startOfWeek->getValue();
    }

    /**
     * @param int $startOfWeek
     */
    public function setStartOfWeek(int $startOfWeek)
    {
        $this->startOfWeek->setChanged(true);
        $this->startOfWeek->setValue($startOfWeek);
    }
    
    public function hasOptions(): bool
    {
        return $this->options->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getOptions() : int
    {
        return $this->options->getValue();
    }

    /**
     * @param int $options
     */
    public function setOptions(int $options)
    {
        $this->options->setChanged(true);
        $this->options->setValue($options);
    }
    
    public function hasCutOff(): bool
    {
        return $this->cutOff->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getCutOff() : int
    {
        return $this->cutOff->getValue();
    }

    /**
     * @param int $cutOff
     */
    public function setCutOff(int $cutOff)
    {
        $this->cutOff->setChanged(true);
        $this->cutOff->setValue($cutOff);
    }
    
    public function hasEventCount(): bool
    {
        return $this->eventCount->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getEventCount() : int
    {
        return $this->eventCount->getValue();
    }

    /**
     * @param int $eventCount
     */
    public function setEventCount(int $eventCount)
    {
        $this->eventCount->setChanged(true);
        $this->eventCount->setValue($eventCount);
    }
    
    public function hasBirthdayCount(): bool
    {
        return $this->birthdayCount->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getBirthdayCount() : int
    {
        return $this->birthdayCount->getValue();
    }

    /**
     * @param int $birthdayCount
     */
    public function setBirthdayCount(int $birthdayCount)
    {
        $this->birthdayCount->setChanged(true);
        $this->birthdayCount->setValue($birthdayCount);
    }
    
    public function hasStartYear(): bool
    {
        return $this->startYear->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getStartYear() : int
    {
        return $this->startYear->getValue();
    }

    /**
     * @param int $startYear
     */
    public function setStartYear(int $startYear)
    {
        $this->startYear->setChanged(true);
        $this->startYear->setValue($startYear);
    }
    
    public function hasEndYear(): bool
    {
        return $this->endYear->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getEndYear() : int
    {
        return $this->endYear->getValue();
    }

    /**
     * @param int $endYear
     */
    public function setEndYear(int $endYear)
    {
        $this->endYear->setChanged(true);
        $this->endYear->setValue($endYear);
    }
    
    public function hasHolidays(): bool
    {
        return $this->holidays->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getHolidays() : int
    {
        return $this->holidays->getValue();
    }

    /**
     * @param int $holidays
     */
    public function setHolidays(int $holidays)
    {
        $this->holidays->setChanged(true);
        $this->holidays->setValue($holidays);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Calendar
    {
        return new Calendar();
    }
}