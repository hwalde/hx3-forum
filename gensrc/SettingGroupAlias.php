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

class SettingGroupAlias extends TableAlias {
   
    public function groupTitle() : ColumnField
    {
        return new ColumnField('settinggroup', 'grouptitle', $this->getAliasName());
    }
    public function displayOrder() : ColumnField
    {
        return new ColumnField('settinggroup', 'displayorder', $this->getAliasName());
    }
    public function volatile() : ColumnField
    {
        return new ColumnField('settinggroup', 'volatile', $this->getAliasName());
    }
    public function product() : ColumnField
    {
        return new ColumnField('settinggroup', 'product', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'settinggroup';
    }
    
    public function __listColumns() : array
    {
        return ['grouptitle', 'displayorder', 'volatile', 'product'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'grouptitle' => 'string', 
			'displayorder' => 'integer', 
			'volatile' => 'integer', 
			'product' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'grouptitle' => 'groupTitle', 
			'displayorder' => 'displayOrder', 
			'volatile' => 'volatile', 
			'product' => 'product'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->groupTitle(),
			$this->displayOrder(),
			$this->volatile(),
			$this->product()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : SettingGroupRecord
    {
        return new SettingGroupRecord();
    }
}