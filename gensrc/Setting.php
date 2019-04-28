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

class Setting implements Table {

    const table = 'setting';
   
    public static function as(string $aliasName): SettingAlias
    {
        return new SettingAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::varName(),
			self::groupTitle(),
			self::value(),
			self::defaultValue(),
			self::optionCode(),
			self::displayOrder(),
			self::advanced(),
			self::volatile(),
			self::product(),
			self::dataType(),
			self::blackList(),
			self::validationCode()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : SettingRecord
    {
        return new SettingRecord();
    }
    
    public static function varName() : ColumnField
    {
        return new ColumnField('setting', 'varname');
    }
    public static function groupTitle() : ColumnField
    {
        return new ColumnField('setting', 'grouptitle');
    }
    public static function value() : ColumnField
    {
        return new ColumnField('setting', 'value');
    }
    public static function defaultValue() : ColumnField
    {
        return new ColumnField('setting', 'defaultvalue');
    }
    public static function optionCode() : ColumnField
    {
        return new ColumnField('setting', 'optioncode');
    }
    public static function displayOrder() : ColumnField
    {
        return new ColumnField('setting', 'displayorder');
    }
    public static function advanced() : ColumnField
    {
        return new ColumnField('setting', 'advanced');
    }
    public static function volatile() : ColumnField
    {
        return new ColumnField('setting', 'volatile');
    }
    public static function product() : ColumnField
    {
        return new ColumnField('setting', 'product');
    }
    public static function dataType() : ColumnField
    {
        return new ColumnField('setting', 'datatype');
    }
    public static function blackList() : ColumnField
    {
        return new ColumnField('setting', 'blacklist');
    }
    public static function validationCode() : ColumnField
    {
        return new ColumnField('setting', 'validationcode');
    }

    public function getTableName(): string
    {
        return 'setting';
    }
    
    public function __listColumns() : array
    {
        return ['varname', 'grouptitle', 'value', 'defaultvalue', 'optioncode', 'displayorder', 'advanced', 'volatile', 'product', 'datatype', 'blacklist', 'validationcode'];
    }
    
    public function __listNullableColumns() : array
    {
        return ['validationcode'];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'varname' => 'string', 
			'grouptitle' => 'string', 
			'value' => 'string', 
			'defaultvalue' => 'string', 
			'optioncode' => 'string', 
			'displayorder' => 'integer', 
			'advanced' => 'integer', 
			'volatile' => 'integer', 
			'product' => 'string', 
			'datatype' => 'string', 
			'blacklist' => 'integer', 
			'validationcode' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'varname' => 'varName', 
			'grouptitle' => 'groupTitle', 
			'value' => 'value', 
			'defaultvalue' => 'defaultValue', 
			'optioncode' => 'optionCode', 
			'displayorder' => 'displayOrder', 
			'advanced' => 'advanced', 
			'volatile' => 'volatile', 
			'product' => 'product', 
			'datatype' => 'dataType', 
			'blacklist' => 'blackList', 
			'validationcode' => 'validationCode'
		];
    }

}