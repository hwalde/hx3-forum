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

use POOQ\ColumnField;
use POOQ\ColumnFieldList;
use POOQ\Table;

class Calendar implements Table {

    const table = 'calendar';
   
    public static function as(string $aliasName): CalendarAlias
    {
        return new CalendarAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::calendarId(),
			self::title(),
			self::description(),
			self::displayOrder(),
			self::newEventEmail(),
			self::moderateNew(),
			self::startOfWeek(),
			self::options(),
			self::cutOff(),
			self::eventCount(),
			self::birthdayCount(),
			self::startYear(),
			self::endYear(),
			self::holidays()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : CalendarRecord
    {
        return new CalendarRecord();
    }
    
    public static function calendarId() : ColumnField
    {
        return new ColumnField('calendarId', 'Calendar', 'calendar', 'calendarid');
    }
    public static function title() : ColumnField
    {
        return new ColumnField('title', 'Calendar', 'calendar', 'title');
    }
    public static function description() : ColumnField
    {
        return new ColumnField('description', 'Calendar', 'calendar', 'description');
    }
    public static function displayOrder() : ColumnField
    {
        return new ColumnField('displayOrder', 'Calendar', 'calendar', 'displayorder');
    }
    public static function newEventEmail() : ColumnField
    {
        return new ColumnField('newEventEmail', 'Calendar', 'calendar', 'neweventemail');
    }
    public static function moderateNew() : ColumnField
    {
        return new ColumnField('moderateNew', 'Calendar', 'calendar', 'moderatenew');
    }
    public static function startOfWeek() : ColumnField
    {
        return new ColumnField('startOfWeek', 'Calendar', 'calendar', 'startofweek');
    }
    public static function options() : ColumnField
    {
        return new ColumnField('options', 'Calendar', 'calendar', 'options');
    }
    public static function cutOff() : ColumnField
    {
        return new ColumnField('cutOff', 'Calendar', 'calendar', 'cutoff');
    }
    public static function eventCount() : ColumnField
    {
        return new ColumnField('eventCount', 'Calendar', 'calendar', 'eventcount');
    }
    public static function birthdayCount() : ColumnField
    {
        return new ColumnField('birthdayCount', 'Calendar', 'calendar', 'birthdaycount');
    }
    public static function startYear() : ColumnField
    {
        return new ColumnField('startYear', 'Calendar', 'calendar', 'startyear');
    }
    public static function endYear() : ColumnField
    {
        return new ColumnField('endYear', 'Calendar', 'calendar', 'endyear');
    }
    public static function holidays() : ColumnField
    {
        return new ColumnField('holidays', 'Calendar', 'calendar', 'holidays');
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
}