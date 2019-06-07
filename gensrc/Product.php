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

class Product implements Table {

    const table = 'product';
   
    public static function as(string $aliasName): ProductAlias
    {
        return new ProductAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::productId(),
			self::title(),
			self::description(),
			self::version(),
			self::active(),
			self::url(),
			self::versioncheckurl()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : ProductRecord
    {
        return new ProductRecord();
    }
    
    public static function productId() : ColumnField
    {
        return new ColumnField('productId', 'Product', 'product', 'productid');
    }
    public static function title() : ColumnField
    {
        return new ColumnField('title', 'Product', 'product', 'title');
    }
    public static function description() : ColumnField
    {
        return new ColumnField('description', 'Product', 'product', 'description');
    }
    public static function version() : ColumnField
    {
        return new ColumnField('version', 'Product', 'product', 'version');
    }
    public static function active() : ColumnField
    {
        return new ColumnField('active', 'Product', 'product', 'active');
    }
    public static function url() : ColumnField
    {
        return new ColumnField('url', 'Product', 'product', 'url');
    }
    public static function versioncheckurl() : ColumnField
    {
        return new ColumnField('versioncheckurl', 'Product', 'product', 'versioncheckurl');
    }

    public function getTableName(): string
    {
        return 'product';
    }
    
    public function __listColumns() : array
    {
        return ['productid', 'title', 'description', 'version', 'active', 'url', 'versioncheckurl'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['productid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'productid' => 'string', 
			'title' => 'string', 
			'description' => 'string', 
			'version' => 'string', 
			'active' => 'integer', 
			'url' => 'string', 
			'versioncheckurl' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'productid' => 'productId', 
			'title' => 'title', 
			'description' => 'description', 
			'version' => 'version', 
			'active' => 'active', 
			'url' => 'url', 
			'versioncheckurl' => 'versioncheckurl'
		];
    }
}