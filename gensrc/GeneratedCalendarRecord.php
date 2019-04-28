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

class GeneratedCalendarRecord implements Record {
    
    /** @var $calendarId int */
    private $calendarId;
    
    /** @var $title string */
    private $title;
    
    /** @var $description string */
    private $description;
    
    /** @var $displayOrder int */
    private $displayOrder;
    
    /** @var $newEventEmail string|null */
    private $newEventEmail;
    
    /** @var $moderateNew int */
    private $moderateNew;
    
    /** @var $startOfWeek int */
    private $startOfWeek;
    
    /** @var $options int */
    private $options;
    
    /** @var $cutOff int */
    private $cutOff;
    
    /** @var $eventCount int */
    private $eventCount;
    
    /** @var $birthdayCount int */
    private $birthdayCount;
    
    /** @var $startYear int */
    private $startYear;
    
    /** @var $endYear int */
    private $endYear;
    
    /** @var $holidays int */
    private $holidays;
    
    public function hasCalendarId(): bool
    {
        return isset($this->calendarId);
    }    

    /**
     * @return int
     */
    public function getCalendarId() : int
    {
        return $this->calendarId;
    }

    /**
     * @param int $calendarId
     */
    public function setCalendarId(int $calendarId)
    {
        $this->calendarId = $calendarId;
    }
    
    public function hasTitle(): bool
    {
        return isset($this->title);
    }    

    /**
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }
    
    public function hasDescription(): bool
    {
        return isset($this->description);
    }    

    /**
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }
    
    public function hasDisplayOrder(): bool
    {
        return isset($this->displayOrder);
    }    

    /**
     * @return int
     */
    public function getDisplayOrder() : int
    {
        return $this->displayOrder;
    }

    /**
     * @param int $displayOrder
     */
    public function setDisplayOrder(int $displayOrder)
    {
        $this->displayOrder = $displayOrder;
    }
    
    public function hasNewEventEmail(): bool
    {
        return isset($this->newEventEmail);
    }    

    /**
     * @return string|null
     */
    public function getNewEventEmail() : ?string
    {
        return $this->newEventEmail;
    }

    /**
     * @param string|null $newEventEmail
     */
    public function setNewEventEmail(?string $newEventEmail)
    {
        $this->newEventEmail = $newEventEmail;
    }
    
    public function hasModerateNew(): bool
    {
        return isset($this->moderateNew);
    }    

    /**
     * @return int
     */
    public function getModerateNew() : int
    {
        return $this->moderateNew;
    }

    /**
     * @param int $moderateNew
     */
    public function setModerateNew(int $moderateNew)
    {
        $this->moderateNew = $moderateNew;
    }
    
    public function hasStartOfWeek(): bool
    {
        return isset($this->startOfWeek);
    }    

    /**
     * @return int
     */
    public function getStartOfWeek() : int
    {
        return $this->startOfWeek;
    }

    /**
     * @param int $startOfWeek
     */
    public function setStartOfWeek(int $startOfWeek)
    {
        $this->startOfWeek = $startOfWeek;
    }
    
    public function hasOptions(): bool
    {
        return isset($this->options);
    }    

    /**
     * @return int
     */
    public function getOptions() : int
    {
        return $this->options;
    }

    /**
     * @param int $options
     */
    public function setOptions(int $options)
    {
        $this->options = $options;
    }
    
    public function hasCutOff(): bool
    {
        return isset($this->cutOff);
    }    

    /**
     * @return int
     */
    public function getCutOff() : int
    {
        return $this->cutOff;
    }

    /**
     * @param int $cutOff
     */
    public function setCutOff(int $cutOff)
    {
        $this->cutOff = $cutOff;
    }
    
    public function hasEventCount(): bool
    {
        return isset($this->eventCount);
    }    

    /**
     * @return int
     */
    public function getEventCount() : int
    {
        return $this->eventCount;
    }

    /**
     * @param int $eventCount
     */
    public function setEventCount(int $eventCount)
    {
        $this->eventCount = $eventCount;
    }
    
    public function hasBirthdayCount(): bool
    {
        return isset($this->birthdayCount);
    }    

    /**
     * @return int
     */
    public function getBirthdayCount() : int
    {
        return $this->birthdayCount;
    }

    /**
     * @param int $birthdayCount
     */
    public function setBirthdayCount(int $birthdayCount)
    {
        $this->birthdayCount = $birthdayCount;
    }
    
    public function hasStartYear(): bool
    {
        return isset($this->startYear);
    }    

    /**
     * @return int
     */
    public function getStartYear() : int
    {
        return $this->startYear;
    }

    /**
     * @param int $startYear
     */
    public function setStartYear(int $startYear)
    {
        $this->startYear = $startYear;
    }
    
    public function hasEndYear(): bool
    {
        return isset($this->endYear);
    }    

    /**
     * @return int
     */
    public function getEndYear() : int
    {
        return $this->endYear;
    }

    /**
     * @param int $endYear
     */
    public function setEndYear(int $endYear)
    {
        $this->endYear = $endYear;
    }
    
    public function hasHolidays(): bool
    {
        return isset($this->holidays);
    }    

    /**
     * @return int
     */
    public function getHolidays() : int
    {
        return $this->holidays;
    }

    /**
     * @param int $holidays
     */
    public function setHolidays(int $holidays)
    {
        $this->holidays = $holidays;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Calendar
    {
        return new Calendar();
    }
}