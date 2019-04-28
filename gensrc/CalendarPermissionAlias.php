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

class CalendarPermissionAlias extends TableAlias {
   
    public function calendarPermissionId() : ColumnField
    {
        return new ColumnField('calendarpermission', 'calendarpermissionid', $this->getAliasName());
    }
    public function calendarId() : ColumnField
    {
        return new ColumnField('calendarpermission', 'calendarid', $this->getAliasName());
    }
    public function userGroupId() : ColumnField
    {
        return new ColumnField('calendarpermission', 'usergroupid', $this->getAliasName());
    }
    public function calendarPermissions() : ColumnField
    {
        return new ColumnField('calendarpermission', 'calendarpermissions', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'calendarpermission';
    }
    
    public function __listColumns() : array
    {
        return ['calendarpermissionid', 'calendarid', 'usergroupid', 'calendarpermissions'];
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->calendarPermissionId(),
			$this->calendarId(),
			$this->userGroupId(),
			$this->calendarPermissions()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : CalendarPermissionRecord
    {
        return new CalendarPermissionRecord();
    }
}