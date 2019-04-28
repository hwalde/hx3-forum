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

class ReminderAlias extends TableAlias {
   
    public function reminderId() : ColumnField
    {
        return new ColumnField('reminder', 'reminderid', $this->getAliasName());
    }
    public function userId() : ColumnField
    {
        return new ColumnField('reminder', 'userid', $this->getAliasName());
    }
    public function title() : ColumnField
    {
        return new ColumnField('reminder', 'title', $this->getAliasName());
    }
    public function text() : ColumnField
    {
        return new ColumnField('reminder', 'text', $this->getAliasName());
    }
    public function dueDate() : ColumnField
    {
        return new ColumnField('reminder', 'duedate', $this->getAliasName());
    }
    public function adminOnly() : ColumnField
    {
        return new ColumnField('reminder', 'adminonly', $this->getAliasName());
    }
    public function completedBy() : ColumnField
    {
        return new ColumnField('reminder', 'completedby', $this->getAliasName());
    }
    public function completedTime() : ColumnField
    {
        return new ColumnField('reminder', 'completedtime', $this->getAliasName());
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->reminderId(),
			$this->userId(),
			$this->title(),
			$this->text(),
			$this->dueDate(),
			$this->adminOnly(),
			$this->completedBy(),
			$this->completedTime()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : ReminderRecord
    {
        return new ReminderRecord();
    }
}