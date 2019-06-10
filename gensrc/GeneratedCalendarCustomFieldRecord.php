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

class GeneratedCalendarCustomFieldRecord implements Record {
    
    /** @var $calendarCustomFieldId RecordValue */
    protected $calendarCustomFieldId;
    
    /** @var $calendarId RecordValue */
    protected $calendarId;
    
    /** @var $title RecordValue */
    protected $title;
    
    /** @var $description RecordValue */
    protected $description;
    
    /** @var $options RecordValue */
    protected $options;
    
    /** @var $allowEntry RecordValue */
    protected $allowEntry;
    
    /** @var $required RecordValue */
    protected $required;
    
    /** @var $length RecordValue */
    protected $length;

    public function __construct() {
		$this->calendarCustomFieldId = new RecordValue();
		$this->calendarId = new RecordValue();
		$this->title = new RecordValue();
		$this->description = new RecordValue();
		$this->options = new RecordValue();
		$this->allowEntry = new RecordValue();
		$this->required = new RecordValue();
		$this->length = new RecordValue();
    }
    
    public function hasCalendarCustomFieldId(): bool
    {
        return $this->calendarCustomFieldId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getCalendarCustomFieldId() : int
    {
        return $this->calendarCustomFieldId->getValue();
    }

    /**
     * @param int $calendarCustomFieldId
     */
    public function setCalendarCustomFieldId(int $calendarCustomFieldId)
    {
        $this->calendarCustomFieldId->setChanged(true);
        $this->calendarCustomFieldId->setValue($calendarCustomFieldId);
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
    
    public function hasOptions(): bool
    {
        return $this->options->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getOptions() : string
    {
        return $this->options->getValue();
    }

    /**
     * @param string $options
     */
    public function setOptions(string $options)
    {
        $this->options->setChanged(true);
        $this->options->setValue($options);
    }
    
    public function hasAllowEntry(): bool
    {
        return $this->allowEntry->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAllowEntry() : int
    {
        return $this->allowEntry->getValue();
    }

    /**
     * @param int $allowEntry
     */
    public function setAllowEntry(int $allowEntry)
    {
        $this->allowEntry->setChanged(true);
        $this->allowEntry->setValue($allowEntry);
    }
    
    public function hasRequired(): bool
    {
        return $this->required->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getRequired() : int
    {
        return $this->required->getValue();
    }

    /**
     * @param int $required
     */
    public function setRequired(int $required)
    {
        $this->required->setChanged(true);
        $this->required->setValue($required);
    }
    
    public function hasLength(): bool
    {
        return $this->length->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getLength() : int
    {
        return $this->length->getValue();
    }

    /**
     * @param int $length
     */
    public function setLength(int $length)
    {
        $this->length->setChanged(true);
        $this->length->setValue($length);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): CalendarCustomField
    {
        return new CalendarCustomField();
    }
}