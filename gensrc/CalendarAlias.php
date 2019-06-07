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

class CalendarAlias extends TableAlias {
   
    public function calendarId() : ColumnField
    {
        return new ColumnField('calendarId', 'Calendar', 'calendar', 'calendarid', $this->getAliasName());
    }
    public function title() : ColumnField
    {
        return new ColumnField('title', 'Calendar', 'calendar', 'title', $this->getAliasName());
    }
    public function description() : ColumnField
    {
        return new ColumnField('description', 'Calendar', 'calendar', 'description', $this->getAliasName());
    }
    public function displayOrder() : ColumnField
    {
        return new ColumnField('displayOrder', 'Calendar', 'calendar', 'displayorder', $this->getAliasName());
    }
    public function newEventEmail() : ColumnField
    {
        return new ColumnField('newEventEmail', 'Calendar', 'calendar', 'neweventemail', $this->getAliasName());
    }
    public function moderateNew() : ColumnField
    {
        return new ColumnField('moderateNew', 'Calendar', 'calendar', 'moderatenew', $this->getAliasName());
    }
    public function startOfWeek() : ColumnField
    {
        return new ColumnField('startOfWeek', 'Calendar', 'calendar', 'startofweek', $this->getAliasName());
    }
    public function options() : ColumnField
    {
        return new ColumnField('options', 'Calendar', 'calendar', 'options', $this->getAliasName());
    }
    public function cutOff() : ColumnField
    {
        return new ColumnField('cutOff', 'Calendar', 'calendar', 'cutoff', $this->getAliasName());
    }
    public function eventCount() : ColumnField
    {
        return new ColumnField('eventCount', 'Calendar', 'calendar', 'eventcount', $this->getAliasName());
    }
    public function birthdayCount() : ColumnField
    {
        return new ColumnField('birthdayCount', 'Calendar', 'calendar', 'birthdaycount', $this->getAliasName());
    }
    public function startYear() : ColumnField
    {
        return new ColumnField('startYear', 'Calendar', 'calendar', 'startyear', $this->getAliasName());
    }
    public function endYear() : ColumnField
    {
        return new ColumnField('endYear', 'Calendar', 'calendar', 'endyear', $this->getAliasName());
    }
    public function holidays() : ColumnField
    {
        return new ColumnField('holidays', 'Calendar', 'calendar', 'holidays', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'calendar';
    }
    
    public function __listColumns() : array
    {
        return ['calendarid', 'title', 'description', 'displayorder', 'neweventemail', 'moderatenew', 'startofweek', 'options', 'cutoff', 'eventcount', 'birthdaycount', 'startyear', 'endyear', 'holidays'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['calendarid'];
    }
    
    public function __listNullableColumns() : array
    {
        return ['neweventemail'];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'calendarid' => 'integer', 
			'title' => 'string', 
			'description' => 'string', 
			'displayorder' => 'integer', 
			'neweventemail' => 'string', 
			'moderatenew' => 'integer', 
			'startofweek' => 'integer', 
			'options' => 'integer', 
			'cutoff' => 'integer', 
			'eventcount' => 'integer', 
			'birthdaycount' => 'integer', 
			'startyear' => 'integer', 
			'endyear' => 'integer', 
			'holidays' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'calendarid' => 'calendarId', 
			'title' => 'title', 
			'description' => 'description', 
			'displayorder' => 'displayOrder', 
			'neweventemail' => 'newEventEmail', 
			'moderatenew' => 'moderateNew', 
			'startofweek' => 'startOfWeek', 
			'options' => 'options', 
			'cutoff' => 'cutOff', 
			'eventcount' => 'eventCount', 
			'birthdaycount' => 'birthdayCount', 
			'startyear' => 'startYear', 
			'endyear' => 'endYear', 
			'holidays' => 'holidays'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->calendarId(),
			$this->title(),
			$this->description(),
			$this->displayOrder(),
			$this->newEventEmail(),
			$this->moderateNew(),
			$this->startOfWeek(),
			$this->options(),
			$this->cutOff(),
			$this->eventCount(),
			$this->birthdayCount(),
			$this->startYear(),
			$this->endYear(),
			$this->holidays()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : CalendarRecord
    {
        return new CalendarRecord();
    }
}