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

class GeneratedEventRecord implements Record {
    
    /** @var $eventId int */
    private $eventId;
    
    /** @var $userId int */
    private $userId;
    
    /** @var $event string */
    private $event;
    
    /** @var $title string */
    private $title;
    
    /** @var $allowSmilies int */
    private $allowSmilies;
    
    /** @var $recurring int */
    private $recurring;
    
    /** @var $recurOption string */
    private $recurOption;
    
    /** @var $calendarId int */
    private $calendarId;
    
    /** @var $customFields string */
    private $customFields;
    
    /** @var $visible int */
    private $visible;
    
    /** @var $dateLine int */
    private $dateLine;
    
    /** @var $utc mixed */
    private $utc;
    
    /** @var $dateLineFrom int */
    private $dateLineFrom;
    
    /** @var $dateLineTo int */
    private $dateLineTo;
    
    /** @var $dst int */
    private $dst;
    
    public function hasEventId(): bool
    {
        return isset($this->eventId);
    }    

    /**
     * @return int
     */
    public function getEventId() : int
    {
        return $this->eventId;
    }

    /**
     * @param int $eventId
     */
    public function setEventId(int $eventId)
    {
        $this->eventId = $eventId;
    }
    
    public function hasUserId(): bool
    {
        return isset($this->userId);
    }    

    /**
     * @return int
     */
    public function getUserId() : int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId(int $userId)
    {
        $this->userId = $userId;
    }
    
    public function hasEvent(): bool
    {
        return isset($this->event);
    }    

    /**
     * @return string
     */
    public function getEvent() : string
    {
        return $this->event;
    }

    /**
     * @param string $event
     */
    public function setEvent(string $event)
    {
        $this->event = $event;
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
    
    public function hasCustomFields(): bool
    {
        return isset($this->customFields);
    }    

    /**
     * @return string
     */
    public function getCustomFields() : string
    {
        return $this->customFields;
    }

    /**
     * @param string $customFields
     */
    public function setCustomFields(string $customFields)
    {
        $this->customFields = $customFields;
    }
    
    public function hasVisible(): bool
    {
        return isset($this->visible);
    }    

    /**
     * @return int
     */
    public function getVisible() : int
    {
        return $this->visible;
    }

    /**
     * @param int $visible
     */
    public function setVisible(int $visible)
    {
        $this->visible = $visible;
    }
    
    public function hasDateLine(): bool
    {
        return isset($this->dateLine);
    }    

    /**
     * @return int
     */
    public function getDateLine() : int
    {
        return $this->dateLine;
    }

    /**
     * @param int $dateLine
     */
    public function setDateLine(int $dateLine)
    {
        $this->dateLine = $dateLine;
    }
    
    public function hasUtc(): bool
    {
        return isset($this->utc);
    }    

    /**
     * @return mixed
     */
    public function getUtc()
    {
        return $this->utc;
    }

    /**
     * @param mixed $utc
     */
    public function setUtc($utc)
    {
        $this->utc = $utc;
    }
    
    public function hasDateLineFrom(): bool
    {
        return isset($this->dateLineFrom);
    }    

    /**
     * @return int
     */
    public function getDateLineFrom() : int
    {
        return $this->dateLineFrom;
    }

    /**
     * @param int $dateLineFrom
     */
    public function setDateLineFrom(int $dateLineFrom)
    {
        $this->dateLineFrom = $dateLineFrom;
    }
    
    public function hasDateLineTo(): bool
    {
        return isset($this->dateLineTo);
    }    

    /**
     * @return int
     */
    public function getDateLineTo() : int
    {
        return $this->dateLineTo;
    }

    /**
     * @param int $dateLineTo
     */
    public function setDateLineTo(int $dateLineTo)
    {
        $this->dateLineTo = $dateLineTo;
    }
    
    public function hasDst(): bool
    {
        return isset($this->dst);
    }    

    /**
     * @return int
     */
    public function getDst() : int
    {
        return $this->dst;
    }

    /**
     * @param int $dst
     */
    public function setDst(int $dst)
    {
        $this->dst = $dst;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Event
    {
        return new Event();
    }
}