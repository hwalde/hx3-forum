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

class ProductCode implements Table {

    const table = 'productcode';
   
    public static function as(string $aliasName): ProductCodeAlias
    {
        return new ProductCodeAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::productCodeId(),
			self::productId(),
			self::version(),
			self::installCode(),
			self::uninstallCode()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : ProductCodeRecord
    {
        return new ProductCodeRecord();
    }
    
    public static function productCodeId() : ColumnField
    {
        return new ColumnField('productCodeId', 'ProductCode', 'productcode', 'productcodeid');
    }
    public static function productId() : ColumnField
    {
        return new ColumnField('productId', 'ProductCode', 'productcode', 'productid');
    }
    public static function version() : ColumnField
    {
        return new ColumnField('version', 'ProductCode', 'productcode', 'version');
    }
    public static function installCode() : ColumnField
    {
        return new ColumnField('installCode', 'ProductCode', 'productcode', 'installcode');
    }
    public static function uninstallCode() : ColumnField
    {
        return new ColumnField('uninstallCode', 'ProductCode', 'productcode', 'uninstallcode');
    }

    public function getTableName(): string
    {
        return 'productcode';
    }
    
    public function __listColumns() : array
    {
        return ['productcodeid', 'productid', 'version', 'installcode', 'uninstallcode'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['productcodeid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'productcodeid' => 'integer', 
			'productid' => 'string', 
			'version' => 'string', 
			'installcode' => 'string', 
			'uninstallcode' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'productcodeid' => 'productCodeId', 
			'productid' => 'productId', 
			'version' => 'version', 
			'installcode' => 'installCode', 
			'uninstallcode' => 'uninstallCode'
		];
    }
}