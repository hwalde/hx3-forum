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

class VbFields implements Table {

    const table = 'vbfields';
   
    public static function as(string $aliasName): VbFieldsAlias
    {
        return new VbFieldsAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::fieldId(),
			self::fieldName(),
			self::fieldType(),
			self::isUnsigned(),
			self::tableName(),
			self::createSql(),
			self::vbMandatory(),
			self::defaultValue(),
			self::dictionary()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : VbFieldsRecord
    {
        return new VbFieldsRecord();
    }
    
    public static function fieldId() : ColumnField
    {
        return new ColumnField('vbfields', 'fieldid');
    }
    public static function fieldName() : ColumnField
    {
        return new ColumnField('vbfields', 'fieldname');
    }
    public static function fieldType() : ColumnField
    {
        return new ColumnField('vbfields', 'fieldtype');
    }
    public static function isUnsigned() : ColumnField
    {
        return new ColumnField('vbfields', 'isunsigned');
    }
    public static function tableName() : ColumnField
    {
        return new ColumnField('vbfields', 'tablename');
    }
    public static function createSql() : ColumnField
    {
        return new ColumnField('vbfields', 'createsql');
    }
    public static function vbMandatory() : ColumnField
    {
        return new ColumnField('vbfields', 'vbmandatory');
    }
    public static function defaultValue() : ColumnField
    {
        return new ColumnField('vbfields', 'defaultvalue');
    }
    public static function dictionary() : ColumnField
    {
        return new ColumnField('vbfields', 'dictionary');
    }

    public function getTableName(): string
    {
        return 'vbfields';
    }
    
    public function __listColumns() : array
    {
        return ['fieldid', 'fieldname', 'fieldtype', 'isunsigned', 'tablename', 'createsql', 'vbmandatory', 'defaultvalue', 'dictionary'];
    }
    
    public function __listNullableColumns() : array
    {
        return ['defaultvalue'];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'fieldid' => 'integer', 
			'fieldname' => 'string', 
			'fieldtype' => 'string', 
			'isunsigned' => 'string', 
			'tablename' => 'string', 
			'createsql' => 'string', 
			'vbmandatory' => 'string', 
			'defaultvalue' => 'string', 
			'dictionary' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'fieldid' => 'fieldId', 
			'fieldname' => 'fieldName', 
			'fieldtype' => 'fieldType', 
			'isunsigned' => 'isUnsigned', 
			'tablename' => 'tableName', 
			'createsql' => 'createSql', 
			'vbmandatory' => 'vbMandatory', 
			'defaultvalue' => 'defaultValue', 
			'dictionary' => 'dictionary'
		];
    }

}