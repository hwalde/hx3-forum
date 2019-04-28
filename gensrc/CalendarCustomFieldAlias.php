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

class CalendarCustomFieldAlias extends TableAlias {
   
    public function calendarCustomFieldId() : ColumnField
    {
        return new ColumnField('calendarcustomfield', 'calendarcustomfieldid', $this->getAliasName());
    }
    public function calendarId() : ColumnField
    {
        return new ColumnField('calendarcustomfield', 'calendarid', $this->getAliasName());
    }
    public function title() : ColumnField
    {
        return new ColumnField('calendarcustomfield', 'title', $this->getAliasName());
    }
    public function description() : ColumnField
    {
        return new ColumnField('calendarcustomfield', 'description', $this->getAliasName());
    }
    public function options() : ColumnField
    {
        return new ColumnField('calendarcustomfield', 'options', $this->getAliasName());
    }
    public function allowEntry() : ColumnField
    {
        return new ColumnField('calendarcustomfield', 'allowentry', $this->getAliasName());
    }
    public function required() : ColumnField
    {
        return new ColumnField('calendarcustomfield', 'required', $this->getAliasName());
    }
    public function length() : ColumnField
    {
        return new ColumnField('calendarcustomfield', 'length', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'calendarcustomfield';
    }
    
    public function __listColumns() : array
    {
        return ['calendarcustomfieldid', 'calendarid', 'title', 'description', 'options', 'allowentry', 'required', 'length'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'calendarcustomfieldid' => 'integer', 
			'calendarid' => 'integer', 
			'title' => 'string', 
			'description' => 'string', 
			'options' => 'string', 
			'allowentry' => 'integer', 
			'required' => 'integer', 
			'length' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'calendarcustomfieldid' => 'calendarCustomFieldId', 
			'calendarid' => 'calendarId', 
			'title' => 'title', 
			'description' => 'description', 
			'options' => 'options', 
			'allowentry' => 'allowEntry', 
			'required' => 'required', 
			'length' => 'length'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->calendarCustomFieldId(),
			$this->calendarId(),
			$this->title(),
			$this->description(),
			$this->options(),
			$this->allowEntry(),
			$this->required(),
			$this->length()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : CalendarCustomFieldRecord
    {
        return new CalendarCustomFieldRecord();
    }
}