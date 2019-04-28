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

class SettingGroup implements Table {

    const table = 'settinggroup';
   
    public static function as(string $aliasName): SettingGroupAlias
    {
        return new SettingGroupAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::groupTitle(),
			self::displayOrder(),
			self::volatile(),
			self::product()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : SettingGroupRecord
    {
        return new SettingGroupRecord();
    }
    
    public static function groupTitle() : ColumnField
    {
        return new ColumnField('settinggroup', 'grouptitle');
    }
    public static function displayOrder() : ColumnField
    {
        return new ColumnField('settinggroup', 'displayorder');
    }
    public static function volatile() : ColumnField
    {
        return new ColumnField('settinggroup', 'volatile');
    }
    public static function product() : ColumnField
    {
        return new ColumnField('settinggroup', 'product');
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

}