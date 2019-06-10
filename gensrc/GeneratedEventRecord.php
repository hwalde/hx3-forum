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

class GeneratedEventRecord implements Record {
    
    /** @var $eventId RecordValue */
    protected $eventId;
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $event RecordValue */
    protected $event;
    
    /** @var $title RecordValue */
    protected $title;
    
    /** @var $allowSmilies RecordValue */
    protected $allowSmilies;
    
    /** @var $recurring RecordValue */
    protected $recurring;
    
    /** @var $recurOption RecordValue */
    protected $recurOption;
    
    /** @var $calendarId RecordValue */
    protected $calendarId;
    
    /** @var $customFields RecordValue */
    protected $customFields;
    
    /** @var $visible RecordValue */
    protected $visible;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;
    
    /** @var $utc RecordValue */
    protected $utc;
    
    /** @var $dateLineFrom RecordValue */
    protected $dateLineFrom;
    
    /** @var $dateLineTo RecordValue */
    protected $dateLineTo;
    
    /** @var $dst RecordValue */
    protected $dst;

    public function __construct() {
		$this->eventId = new RecordValue();
		$this->userId = new RecordValue();
		$this->event = new RecordValue();
		$this->title = new RecordValue();
		$this->allowSmilies = new RecordValue();
		$this->recurring = new RecordValue();
		$this->recurOption = new RecordValue();
		$this->calendarId = new RecordValue();
		$this->customFields = new RecordValue();
		$this->visible = new RecordValue();
		$this->dateLine = new RecordValue();
		$this->utc = new RecordValue();
		$this->dateLineFrom = new RecordValue();
		$this->dateLineTo = new RecordValue();
		$this->dst = new RecordValue();
    }
    
    public function hasEventId(): bool
    {
        return $this->eventId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getEventId() : int
    {
        return $this->eventId->getValue();
    }

    /**
     * @param int $eventId
     */
    public function setEventId(int $eventId)
    {
        $this->eventId->setChanged(true);
        $this->eventId->setValue($eventId);
    }
    
    public function hasUserId(): bool
    {
        return $this->userId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getUserId() : int
    {
        return $this->userId->getValue();
    }

    /**
     * @param int $userId
     */
    public function setUserId(int $userId)
    {
        $this->userId->setChanged(true);
        $this->userId->setValue($userId);
    }
    
    public function hasEvent(): bool
    {
        return $this->event->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getEvent() : string
    {
        return $this->event->getValue();
    }

    /**
     * @param string $event
     */
    public function setEvent(string $event)
    {
        $this->event->setChanged(true);
        $this->event->setValue($event);
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
    
    public function hasCustomFields(): bool
    {
        return $this->customFields->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getCustomFields() : string
    {
        return $this->customFields->getValue();
    }

    /**
     * @param string $customFields
     */
    public function setCustomFields(string $customFields)
    {
        $this->customFields->setChanged(true);
        $this->customFields->setValue($customFields);
    }
    
    public function hasVisible(): bool
    {
        return $this->visible->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getVisible() : int
    {
        return $this->visible->getValue();
    }

    /**
     * @param int $visible
     */
    public function setVisible(int $visible)
    {
        $this->visible->setChanged(true);
        $this->visible->setValue($visible);
    }
    
    public function hasDateLine(): bool
    {
        return $this->dateLine->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getDateLine() : int
    {
        return $this->dateLine->getValue();
    }

    /**
     * @param int $dateLine
     */
    public function setDateLine(int $dateLine)
    {
        $this->dateLine->setChanged(true);
        $this->dateLine->setValue($dateLine);
    }
    
    public function hasUtc(): bool
    {
        return $this->utc->hasBeenSet();
    }    

    /**
     * @return mixed
     */
    public function getUtc()
    {
        return $this->utc->getValue();
    }

    /**
     * @param mixed $utc
     */
    public function setUtc($utc)
    {
        $this->utc->setChanged(true);
        $this->utc->setValue($utc);
    }
    
    public function hasDateLineFrom(): bool
    {
        return $this->dateLineFrom->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getDateLineFrom() : int
    {
        return $this->dateLineFrom->getValue();
    }

    /**
     * @param int $dateLineFrom
     */
    public function setDateLineFrom(int $dateLineFrom)
    {
        $this->dateLineFrom->setChanged(true);
        $this->dateLineFrom->setValue($dateLineFrom);
    }
    
    public function hasDateLineTo(): bool
    {
        return $this->dateLineTo->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getDateLineTo() : int
    {
        return $this->dateLineTo->getValue();
    }

    /**
     * @param int $dateLineTo
     */
    public function setDateLineTo(int $dateLineTo)
    {
        $this->dateLineTo->setChanged(true);
        $this->dateLineTo->setValue($dateLineTo);
    }
    
    public function hasDst(): bool
    {
        return $this->dst->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getDst() : int
    {
        return $this->dst->getValue();
    }

    /**
     * @param int $dst
     */
    public function setDst(int $dst)
    {
        $this->dst->setChanged(true);
        $this->dst->setValue($dst);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Event
    {
        return new Event();
    }
}