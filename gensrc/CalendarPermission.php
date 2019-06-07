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

class CalendarPermission implements Table {

    const table = 'calendarpermission';
   
    public static function as(string $aliasName): CalendarPermissionAlias
    {
        return new CalendarPermissionAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::calendarPermissionId(),
			self::calendarId(),
			self::userGroupId(),
			self::calendarPermissions()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : CalendarPermissionRecord
    {
        return new CalendarPermissionRecord();
    }
    
    public static function calendarPermissionId() : ColumnField
    {
        return new ColumnField('calendarPermissionId', 'CalendarPermission', 'calendarpermission', 'calendarpermissionid');
    }
    public static function calendarId() : ColumnField
    {
        return new ColumnField('calendarId', 'CalendarPermission', 'calendarpermission', 'calendarid');
    }
    public static function userGroupId() : ColumnField
    {
        return new ColumnField('userGroupId', 'CalendarPermission', 'calendarpermission', 'usergroupid');
    }
    public static function calendarPermissions() : ColumnField
    {
        return new ColumnField('calendarPermissions', 'CalendarPermission', 'calendarpermission', 'calendarpermissions');
    }

    public function getTableName(): string
    {
        return 'calendarpermission';
    }
    
    public function __listColumns() : array
    {
        return ['calendarpermissionid', 'calendarid', 'usergroupid', 'calendarpermissions'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['calendarpermissionid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'calendarpermissionid' => 'integer', 
			'calendarid' => 'integer', 
			'usergroupid' => 'integer', 
			'calendarpermissions' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'calendarpermissionid' => 'calendarPermissionId', 
			'calendarid' => 'calendarId', 
			'usergroupid' => 'userGroupId', 
			'calendarpermissions' => 'calendarPermissions'
		];
    }
}