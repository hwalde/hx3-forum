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

class SettingAlias extends TableAlias {
   
    public function varName() : ColumnField
    {
        return new ColumnField('setting', 'varname', $this->getAliasName());
    }
    public function groupTitle() : ColumnField
    {
        return new ColumnField('setting', 'grouptitle', $this->getAliasName());
    }
    public function value() : ColumnField
    {
        return new ColumnField('setting', 'value', $this->getAliasName());
    }
    public function defaultValue() : ColumnField
    {
        return new ColumnField('setting', 'defaultvalue', $this->getAliasName());
    }
    public function optionCode() : ColumnField
    {
        return new ColumnField('setting', 'optioncode', $this->getAliasName());
    }
    public function displayOrder() : ColumnField
    {
        return new ColumnField('setting', 'displayorder', $this->getAliasName());
    }
    public function advanced() : ColumnField
    {
        return new ColumnField('setting', 'advanced', $this->getAliasName());
    }
    public function volatile() : ColumnField
    {
        return new ColumnField('setting', 'volatile', $this->getAliasName());
    }
    public function product() : ColumnField
    {
        return new ColumnField('setting', 'product', $this->getAliasName());
    }
    public function dataType() : ColumnField
    {
        return new ColumnField('setting', 'datatype', $this->getAliasName());
    }
    public function blackList() : ColumnField
    {
        return new ColumnField('setting', 'blacklist', $this->getAliasName());
    }
    public function validationCode() : ColumnField
    {
        return new ColumnField('setting', 'validationcode', $this->getAliasName());
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->varName(),
			$this->groupTitle(),
			$this->value(),
			$this->defaultValue(),
			$this->optionCode(),
			$this->displayOrder(),
			$this->advanced(),
			$this->volatile(),
			$this->product(),
			$this->dataType(),
			$this->blackList(),
			$this->validationCode()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : SettingRecord
    {
        return new SettingRecord();
    }
}