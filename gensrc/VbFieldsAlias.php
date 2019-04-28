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

class VbFieldsAlias extends TableAlias {
   
    public function fieldId() : ColumnField
    {
        return new ColumnField('vbfields', 'fieldid', $this->getAliasName());
    }
    public function fieldName() : ColumnField
    {
        return new ColumnField('vbfields', 'fieldname', $this->getAliasName());
    }
    public function fieldType() : ColumnField
    {
        return new ColumnField('vbfields', 'fieldtype', $this->getAliasName());
    }
    public function isUnsigned() : ColumnField
    {
        return new ColumnField('vbfields', 'isunsigned', $this->getAliasName());
    }
    public function tableName() : ColumnField
    {
        return new ColumnField('vbfields', 'tablename', $this->getAliasName());
    }
    public function createSql() : ColumnField
    {
        return new ColumnField('vbfields', 'createsql', $this->getAliasName());
    }
    public function vbMandatory() : ColumnField
    {
        return new ColumnField('vbfields', 'vbmandatory', $this->getAliasName());
    }
    public function defaultValue() : ColumnField
    {
        return new ColumnField('vbfields', 'defaultvalue', $this->getAliasName());
    }
    public function dictionary() : ColumnField
    {
        return new ColumnField('vbfields', 'dictionary', $this->getAliasName());
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->fieldId(),
			$this->fieldName(),
			$this->fieldType(),
			$this->isUnsigned(),
			$this->tableName(),
			$this->createSql(),
			$this->vbMandatory(),
			$this->defaultValue(),
			$this->dictionary()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : VbFieldsRecord
    {
        return new VbFieldsRecord();
    }
}