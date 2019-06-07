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

use POOQ\TableAlias;
use POOQ\ColumnField;
use POOQ\ColumnFieldList;

class EventAlias extends TableAlias {
   
    public function eventId() : ColumnField
    {
        return new ColumnField('eventId', 'Event', 'event', 'eventid', $this->getAliasName());
    }
    public function userId() : ColumnField
    {
        return new ColumnField('userId', 'Event', 'event', 'userid', $this->getAliasName());
    }
    public function event() : ColumnField
    {
        return new ColumnField('event', 'Event', 'event', 'event', $this->getAliasName());
    }
    public function title() : ColumnField
    {
        return new ColumnField('title', 'Event', 'event', 'title', $this->getAliasName());
    }
    public function allowSmilies() : ColumnField
    {
        return new ColumnField('allowSmilies', 'Event', 'event', 'allowsmilies', $this->getAliasName());
    }
    public function recurring() : ColumnField
    {
        return new ColumnField('recurring', 'Event', 'event', 'recurring', $this->getAliasName());
    }
    public function recurOption() : ColumnField
    {
        return new ColumnField('recurOption', 'Event', 'event', 'recuroption', $this->getAliasName());
    }
    public function calendarId() : ColumnField
    {
        return new ColumnField('calendarId', 'Event', 'event', 'calendarid', $this->getAliasName());
    }
    public function customFields() : ColumnField
    {
        return new ColumnField('customFields', 'Event', 'event', 'customfields', $this->getAliasName());
    }
    public function visible() : ColumnField
    {
        return new ColumnField('visible', 'Event', 'event', 'visible', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'Event', 'event', 'dateline', $this->getAliasName());
    }
    public function utc() : ColumnField
    {
        return new ColumnField('utc', 'Event', 'event', 'utc', $this->getAliasName());
    }
    public function dateLineFrom() : ColumnField
    {
        return new ColumnField('dateLineFrom', 'Event', 'event', 'dateline_from', $this->getAliasName());
    }
    public function dateLineTo() : ColumnField
    {
        return new ColumnField('dateLineTo', 'Event', 'event', 'dateline_to', $this->getAliasName());
    }
    public function dst() : ColumnField
    {
        return new ColumnField('dst', 'Event', 'event', 'dst', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'event';
    }
    
    public function __listColumns() : array
    {
        return ['eventid', 'userid', 'event', 'title', 'allowsmilies', 'recurring', 'recuroption', 'calendarid', 'customfields', 'visible', 'dateline', 'utc', 'dateline_from', 'dateline_to', 'dst'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['eventid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'eventid' => 'integer', 
			'userid' => 'integer', 
			'event' => 'string', 
			'title' => 'string', 
			'allowsmilies' => 'integer', 
			'recurring' => 'integer', 
			'recuroption' => 'string', 
			'calendarid' => 'integer', 
			'customfields' => 'string', 
			'visible' => 'integer', 
			'dateline' => 'integer', 
			'utc' => 'unknown', 
			'dateline_from' => 'integer', 
			'dateline_to' => 'integer', 
			'dst' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'eventid' => 'eventId', 
			'userid' => 'userId', 
			'event' => 'event', 
			'title' => 'title', 
			'allowsmilies' => 'allowSmilies', 
			'recurring' => 'recurring', 
			'recuroption' => 'recurOption', 
			'calendarid' => 'calendarId', 
			'customfields' => 'customFields', 
			'visible' => 'visible', 
			'dateline' => 'dateLine', 
			'utc' => 'utc', 
			'dateline_from' => 'dateLineFrom', 
			'dateline_to' => 'dateLineTo', 
			'dst' => 'dst'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->eventId(),
			$this->userId(),
			$this->event(),
			$this->title(),
			$this->allowSmilies(),
			$this->recurring(),
			$this->recurOption(),
			$this->calendarId(),
			$this->customFields(),
			$this->visible(),
			$this->dateLine(),
			$this->utc(),
			$this->dateLineFrom(),
			$this->dateLineTo(),
			$this->dst()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : EventRecord
    {
        return new EventRecord();
    }
}