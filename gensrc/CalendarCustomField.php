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

class CalendarCustomField implements Table {

    const table = 'calendarcustomfield';
   
    public static function as(string $aliasName): CalendarCustomFieldAlias
    {
        return new CalendarCustomFieldAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::calendarCustomFieldId(),
			self::calendarId(),
			self::title(),
			self::description(),
			self::options(),
			self::allowEntry(),
			self::required(),
			self::length()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : CalendarCustomFieldRecord
    {
        return new CalendarCustomFieldRecord();
    }
    
    public static function calendarCustomFieldId() : ColumnField
    {
        return new ColumnField('calendarcustomfield', 'calendarcustomfieldid');
    }
    public static function calendarId() : ColumnField
    {
        return new ColumnField('calendarcustomfield', 'calendarid');
    }
    public static function title() : ColumnField
    {
        return new ColumnField('calendarcustomfield', 'title');
    }
    public static function description() : ColumnField
    {
        return new ColumnField('calendarcustomfield', 'description');
    }
    public static function options() : ColumnField
    {
        return new ColumnField('calendarcustomfield', 'options');
    }
    public static function allowEntry() : ColumnField
    {
        return new ColumnField('calendarcustomfield', 'allowentry');
    }
    public static function required() : ColumnField
    {
        return new ColumnField('calendarcustomfield', 'required');
    }
    public static function length() : ColumnField
    {
        return new ColumnField('calendarcustomfield', 'length');
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

}