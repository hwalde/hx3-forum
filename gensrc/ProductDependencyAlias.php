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

class ProductDependencyAlias extends TableAlias {
   
    public function productDependencyId() : ColumnField
    {
        return new ColumnField('productdependency', 'productdependencyid', $this->getAliasName());
    }
    public function productId() : ColumnField
    {
        return new ColumnField('productdependency', 'productid', $this->getAliasName());
    }
    public function dependencyType() : ColumnField
    {
        return new ColumnField('productdependency', 'dependencytype', $this->getAliasName());
    }
    public function parentProductId() : ColumnField
    {
        return new ColumnField('productdependency', 'parentproductid', $this->getAliasName());
    }
    public function minVersion() : ColumnField
    {
        return new ColumnField('productdependency', 'minversion', $this->getAliasName());
    }
    public function maxVersion() : ColumnField
    {
        return new ColumnField('productdependency', 'maxversion', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'productdependency';
    }
    
    public function __listColumns() : array
    {
        return ['productdependencyid', 'productid', 'dependencytype', 'parentproductid', 'minversion', 'maxversion'];
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->productDependencyId(),
			$this->productId(),
			$this->dependencyType(),
			$this->parentProductId(),
			$this->minVersion(),
			$this->maxVersion()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : ProductDependencyRecord
    {
        return new ProductDependencyRecord();
    }
}