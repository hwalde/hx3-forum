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

class CalendarModeratorAlias extends TableAlias {
   
    public function calendarModeratorId() : ColumnField
    {
        return new ColumnField('calendarModeratorId', 'CalendarModerator', 'calendarmoderator', 'calendarmoderatorid', $this->getAliasName());
    }
    public function userId() : ColumnField
    {
        return new ColumnField('userId', 'CalendarModerator', 'calendarmoderator', 'userid', $this->getAliasName());
    }
    public function calendarId() : ColumnField
    {
        return new ColumnField('calendarId', 'CalendarModerator', 'calendarmoderator', 'calendarid', $this->getAliasName());
    }
    public function newEventEmail() : ColumnField
    {
        return new ColumnField('newEventEmail', 'CalendarModerator', 'calendarmoderator', 'neweventemail', $this->getAliasName());
    }
    public function permissions() : ColumnField
    {
        return new ColumnField('permissions', 'CalendarModerator', 'calendarmoderator', 'permissions', $this->getAliasName());
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->calendarModeratorId(),
			$this->userId(),
			$this->calendarId(),
			$this->newEventEmail(),
			$this->permissions()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : CalendarModeratorRecord
    {
        return new CalendarModeratorRecord();
    }
}