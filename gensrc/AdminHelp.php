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

class AdminHelp implements Table {

    const table = 'adminhelp';
   
    public static function as(string $aliasName): AdminHelpAlias
    {
        return new AdminHelpAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::adminHelpId(),
			self::script(),
			self::action(),
			self::optionName(),
			self::displayOrder(),
			self::volatile(),
			self::product()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : AdminHelpRecord
    {
        return new AdminHelpRecord();
    }
    
    public static function adminHelpId() : ColumnField
    {
        return new ColumnField('adminHelpId', 'AdminHelp', 'adminhelp', 'adminhelpid');
    }
    public static function script() : ColumnField
    {
        return new ColumnField('script', 'AdminHelp', 'adminhelp', 'script');
    }
    public static function action() : ColumnField
    {
        return new ColumnField('action', 'AdminHelp', 'adminhelp', 'action');
    }
    public static function optionName() : ColumnField
    {
        return new ColumnField('optionName', 'AdminHelp', 'adminhelp', 'optionname');
    }
    public static function displayOrder() : ColumnField
    {
        return new ColumnField('displayOrder', 'AdminHelp', 'adminhelp', 'displayorder');
    }
    public static function volatile() : ColumnField
    {
        return new ColumnField('volatile', 'AdminHelp', 'adminhelp', 'volatile');
    }
    public static function product() : ColumnField
    {
        return new ColumnField('product', 'AdminHelp', 'adminhelp', 'product');
    }

    public function getTableName(): string
    {
        return 'adminhelp';
    }
    
    public function __listColumns() : array
    {
        return ['adminhelpid', 'script', 'action', 'optionname', 'displayorder', 'volatile', 'product'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['adminhelpid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'adminhelpid' => 'integer', 
			'script' => 'string', 
			'action' => 'string', 
			'optionname' => 'string', 
			'displayorder' => 'integer', 
			'volatile' => 'integer', 
			'product' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'adminhelpid' => 'adminHelpId', 
			'script' => 'script', 
			'action' => 'action', 
			'optionname' => 'optionName', 
			'displayorder' => 'displayOrder', 
			'volatile' => 'volatile', 
			'product' => 'product'
		];
    }
}