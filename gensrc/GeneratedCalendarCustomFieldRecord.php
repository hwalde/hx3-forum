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

class GeneratedCalendarCustomFieldRecord implements Record {
    
    /** @var $calendarCustomFieldId int */
    protected $calendarCustomFieldId;
    
    /** @var $calendarId int */
    protected $calendarId;
    
    /** @var $title string */
    protected $title;
    
    /** @var $description string */
    protected $description;
    
    /** @var $options string */
    protected $options;
    
    /** @var $allowEntry int */
    protected $allowEntry;
    
    /** @var $required int */
    protected $required;
    
    /** @var $length int */
    protected $length;
    
    public function hasCalendarCustomFieldId(): bool
    {
        return isset($this->calendarCustomFieldId);
    }    

    /**
     * @return int
     */
    public function getCalendarCustomFieldId() : int
    {
        return $this->calendarCustomFieldId;
    }

    /**
     * @param int $calendarCustomFieldId
     */
    public function setCalendarCustomFieldId(int $calendarCustomFieldId)
    {
        $this->calendarCustomFieldId = $calendarCustomFieldId;
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
    
    public function hasOptions(): bool
    {
        return isset($this->options);
    }    

    /**
     * @return string
     */
    public function getOptions() : string
    {
        return $this->options;
    }

    /**
     * @param string $options
     */
    public function setOptions(string $options)
    {
        $this->options = $options;
    }
    
    public function hasAllowEntry(): bool
    {
        return isset($this->allowEntry);
    }    

    /**
     * @return int
     */
    public function getAllowEntry() : int
    {
        return $this->allowEntry;
    }

    /**
     * @param int $allowEntry
     */
    public function setAllowEntry(int $allowEntry)
    {
        $this->allowEntry = $allowEntry;
    }
    
    public function hasRequired(): bool
    {
        return isset($this->required);
    }    

    /**
     * @return int
     */
    public function getRequired() : int
    {
        return $this->required;
    }

    /**
     * @param int $required
     */
    public function setRequired(int $required)
    {
        $this->required = $required;
    }
    
    public function hasLength(): bool
    {
        return isset($this->length);
    }    

    /**
     * @return int
     */
    public function getLength() : int
    {
        return $this->length;
    }

    /**
     * @param int $length
     */
    public function setLength(int $length)
    {
        $this->length = $length;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): CalendarCustomField
    {
        return new CalendarCustomField();
    }
}