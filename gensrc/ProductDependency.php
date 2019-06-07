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

class ProductDependency implements Table {

    const table = 'productdependency';
   
    public static function as(string $aliasName): ProductDependencyAlias
    {
        return new ProductDependencyAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::productDependencyId(),
			self::productId(),
			self::dependencyType(),
			self::parentProductId(),
			self::minVersion(),
			self::maxVersion()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : ProductDependencyRecord
    {
        return new ProductDependencyRecord();
    }
    
    public static function productDependencyId() : ColumnField
    {
        return new ColumnField('productDependencyId', 'ProductDependency', 'productdependency', 'productdependencyid');
    }
    public static function productId() : ColumnField
    {
        return new ColumnField('productId', 'ProductDependency', 'productdependency', 'productid');
    }
    public static function dependencyType() : ColumnField
    {
        return new ColumnField('dependencyType', 'ProductDependency', 'productdependency', 'dependencytype');
    }
    public static function parentProductId() : ColumnField
    {
        return new ColumnField('parentProductId', 'ProductDependency', 'productdependency', 'parentproductid');
    }
    public static function minVersion() : ColumnField
    {
        return new ColumnField('minVersion', 'ProductDependency', 'productdependency', 'minversion');
    }
    public static function maxVersion() : ColumnField
    {
        return new ColumnField('maxVersion', 'ProductDependency', 'productdependency', 'maxversion');
    }

    public function getTableName(): string
    {
        return 'productdependency';
    }
    
    public function __listColumns() : array
    {
        return ['productdependencyid', 'productid', 'dependencytype', 'parentproductid', 'minversion', 'maxversion'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['productdependencyid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'productdependencyid' => 'integer', 
			'productid' => 'string', 
			'dependencytype' => 'string', 
			'parentproductid' => 'string', 
			'minversion' => 'string', 
			'maxversion' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'productdependencyid' => 'productDependencyId', 
			'productid' => 'productId', 
			'dependencytype' => 'dependencyType', 
			'parentproductid' => 'parentProductId', 
			'minversion' => 'minVersion', 
			'maxversion' => 'maxVersion'
		];
    }
}