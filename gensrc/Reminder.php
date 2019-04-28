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

class Reminder implements Table {

    const table = 'reminder';
   
    public static function as(string $aliasName): ReminderAlias
    {
        return new ReminderAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::reminderId(),
			self::userId(),
			self::title(),
			self::text(),
			self::dueDate(),
			self::adminOnly(),
			self::completedBy(),
			self::completedTime()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : ReminderRecord
    {
        return new ReminderRecord();
    }
    
    public static function reminderId() : ColumnField
    {
        return new ColumnField('reminder', 'reminderid');
    }
    public static function userId() : ColumnField
    {
        return new ColumnField('reminder', 'userid');
    }
    public static function title() : ColumnField
    {
        return new ColumnField('reminder', 'title');
    }
    public static function text() : ColumnField
    {
        return new ColumnField('reminder', 'text');
    }
    public static function dueDate() : ColumnField
    {
        return new ColumnField('reminder', 'duedate');
    }
    public static function adminOnly() : ColumnField
    {
        return new ColumnField('reminder', 'adminonly');
    }
    public static function completedBy() : ColumnField
    {
        return new ColumnField('reminder', 'completedby');
    }
    public static function completedTime() : ColumnField
    {
        return new ColumnField('reminder', 'completedtime');
    }

    public function getTableName(): string
    {
        return 'reminder';
    }
    
    public function __listColumns() : array
    {
        return ['reminderid', 'userid', 'title', 'text', 'duedate', 'adminonly', 'completedby', 'completedtime'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'reminderid' => 'integer', 
			'userid' => 'integer', 
			'title' => 'string', 
			'text' => 'string', 
			'duedate' => 'integer', 
			'adminonly' => 'integer', 
			'completedby' => 'integer', 
			'completedtime' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'reminderid' => 'reminderId', 
			'userid' => 'userId', 
			'title' => 'title', 
			'text' => 'text', 
			'duedate' => 'dueDate', 
			'adminonly' => 'adminOnly', 
			'completedby' => 'completedBy', 
			'completedtime' => 'completedTime'
		];
    }

}