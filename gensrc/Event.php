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

class Event implements Table {

    const table = 'event';
   
    public static function as(string $aliasName): EventAlias
    {
        return new EventAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::eventId(),
			self::userId(),
			self::event(),
			self::title(),
			self::allowSmilies(),
			self::recurring(),
			self::recurOption(),
			self::calendarId(),
			self::customFields(),
			self::visible(),
			self::dateLine(),
			self::utc(),
			self::dateLineFrom(),
			self::dateLineTo(),
			self::dst()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : EventRecord
    {
        return new EventRecord();
    }
    
    public static function eventId() : ColumnField
    {
        return new ColumnField('eventId', 'Event', 'event', 'eventid');
    }
    public static function userId() : ColumnField
    {
        return new ColumnField('userId', 'Event', 'event', 'userid');
    }
    public static function event() : ColumnField
    {
        return new ColumnField('event', 'Event', 'event', 'event');
    }
    public static function title() : ColumnField
    {
        return new ColumnField('title', 'Event', 'event', 'title');
    }
    public static function allowSmilies() : ColumnField
    {
        return new ColumnField('allowSmilies', 'Event', 'event', 'allowsmilies');
    }
    public static function recurring() : ColumnField
    {
        return new ColumnField('recurring', 'Event', 'event', 'recurring');
    }
    public static function recurOption() : ColumnField
    {
        return new ColumnField('recurOption', 'Event', 'event', 'recuroption');
    }
    public static function calendarId() : ColumnField
    {
        return new ColumnField('calendarId', 'Event', 'event', 'calendarid');
    }
    public static function customFields() : ColumnField
    {
        return new ColumnField('customFields', 'Event', 'event', 'customfields');
    }
    public static function visible() : ColumnField
    {
        return new ColumnField('visible', 'Event', 'event', 'visible');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'Event', 'event', 'dateline');
    }
    public static function utc() : ColumnField
    {
        return new ColumnField('utc', 'Event', 'event', 'utc');
    }
    public static function dateLineFrom() : ColumnField
    {
        return new ColumnField('dateLineFrom', 'Event', 'event', 'dateline_from');
    }
    public static function dateLineTo() : ColumnField
    {
        return new ColumnField('dateLineTo', 'Event', 'event', 'dateline_to');
    }
    public static function dst() : ColumnField
    {
        return new ColumnField('dst', 'Event', 'event', 'dst');
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
}