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

class CalendarModerator implements Table {

    const table = 'calendarmoderator';
   
    public static function as(string $aliasName): CalendarModeratorAlias
    {
        return new CalendarModeratorAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::calendarModeratorId(),
			self::userId(),
			self::calendarId(),
			self::newEventEmail(),
			self::permissions()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : CalendarModeratorRecord
    {
        return new CalendarModeratorRecord();
    }
    
    public static function calendarModeratorId() : ColumnField
    {
        return new ColumnField('calendarModeratorId', 'CalendarModerator', 'calendarmoderator', 'calendarmoderatorid');
    }
    public static function userId() : ColumnField
    {
        return new ColumnField('userId', 'CalendarModerator', 'calendarmoderator', 'userid');
    }
    public static function calendarId() : ColumnField
    {
        return new ColumnField('calendarId', 'CalendarModerator', 'calendarmoderator', 'calendarid');
    }
    public static function newEventEmail() : ColumnField
    {
        return new ColumnField('newEventEmail', 'CalendarModerator', 'calendarmoderator', 'neweventemail');
    }
    public static function permissions() : ColumnField
    {
        return new ColumnField('permissions', 'CalendarModerator', 'calendarmoderator', 'permissions');
    }

    public function getTableName(): string
    {
        return 'calendarmoderator';
    }
    
    public function __listColumns() : array
    {
        return ['calendarmoderatorid', 'userid', 'calendarid', 'neweventemail', 'permissions'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['calendarmoderatorid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'calendarmoderatorid' => 'integer', 
			'userid' => 'integer', 
			'calendarid' => 'integer', 
			'neweventemail' => 'integer', 
			'permissions' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'calendarmoderatorid' => 'calendarModeratorId', 
			'userid' => 'userId', 
			'calendarid' => 'calendarId', 
			'neweventemail' => 'newEventEmail', 
			'permissions' => 'permissions'
		];
    }
}