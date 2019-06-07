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

class UserFieldAlias extends TableAlias {
   
    public function userId() : ColumnField
    {
        return new ColumnField('userId', 'UserField', 'userfield', 'userid', $this->getAliasName());
    }
    public function temp() : ColumnField
    {
        return new ColumnField('temp', 'UserField', 'userfield', 'temp', $this->getAliasName());
    }
    public function field1() : ColumnField
    {
        return new ColumnField('field1', 'UserField', 'userfield', 'field1', $this->getAliasName());
    }
    public function field2() : ColumnField
    {
        return new ColumnField('field2', 'UserField', 'userfield', 'field2', $this->getAliasName());
    }
    public function field3() : ColumnField
    {
        return new ColumnField('field3', 'UserField', 'userfield', 'field3', $this->getAliasName());
    }
    public function field4() : ColumnField
    {
        return new ColumnField('field4', 'UserField', 'userfield', 'field4', $this->getAliasName());
    }
    public function field5() : ColumnField
    {
        return new ColumnField('field5', 'UserField', 'userfield', 'field5', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'userfield';
    }
    
    public function __listColumns() : array
    {
        return ['userid', 'temp', 'field1', 'field2', 'field3', 'field4', 'field5'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['userid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'userid' => 'integer', 
			'temp' => 'string', 
			'field1' => 'string', 
			'field2' => 'string', 
			'field3' => 'string', 
			'field4' => 'string', 
			'field5' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'userid' => 'userId', 
			'temp' => 'temp', 
			'field1' => 'field1', 
			'field2' => 'field2', 
			'field3' => 'field3', 
			'field4' => 'field4', 
			'field5' => 'field5'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->userId(),
			$this->temp(),
			$this->field1(),
			$this->field2(),
			$this->field3(),
			$this->field4(),
			$this->field5()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : UserFieldRecord
    {
        return new UserFieldRecord();
    }
}