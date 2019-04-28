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

class UserChangeLogAlias extends TableAlias {
   
    public function changeId() : ColumnField
    {
        return new ColumnField('userchangelog', 'changeid', $this->getAliasName());
    }
    public function userId() : ColumnField
    {
        return new ColumnField('userchangelog', 'userid', $this->getAliasName());
    }
    public function fieldName() : ColumnField
    {
        return new ColumnField('userchangelog', 'fieldname', $this->getAliasName());
    }
    public function newValue() : ColumnField
    {
        return new ColumnField('userchangelog', 'newvalue', $this->getAliasName());
    }
    public function oldValue() : ColumnField
    {
        return new ColumnField('userchangelog', 'oldvalue', $this->getAliasName());
    }
    public function adminId() : ColumnField
    {
        return new ColumnField('userchangelog', 'adminid', $this->getAliasName());
    }
    public function changeTime() : ColumnField
    {
        return new ColumnField('userchangelog', 'change_time', $this->getAliasName());
    }
    public function changeUnIq() : ColumnField
    {
        return new ColumnField('userchangelog', 'change_uniq', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'userchangelog';
    }
    
    public function __listColumns() : array
    {
        return ['changeid', 'userid', 'fieldname', 'newvalue', 'oldvalue', 'adminid', 'change_time', 'change_uniq'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'changeid' => 'integer', 
			'userid' => 'integer', 
			'fieldname' => 'string', 
			'newvalue' => 'string', 
			'oldvalue' => 'string', 
			'adminid' => 'integer', 
			'change_time' => 'integer', 
			'change_uniq' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'changeid' => 'changeId', 
			'userid' => 'userId', 
			'fieldname' => 'fieldName', 
			'newvalue' => 'newValue', 
			'oldvalue' => 'oldValue', 
			'adminid' => 'adminId', 
			'change_time' => 'changeTime', 
			'change_uniq' => 'changeUnIq'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->changeId(),
			$this->userId(),
			$this->fieldName(),
			$this->newValue(),
			$this->oldValue(),
			$this->adminId(),
			$this->changeTime(),
			$this->changeUnIq()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : UserChangeLogRecord
    {
        return new UserChangeLogRecord();
    }
}