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

class ProductAlias extends TableAlias {
   
    public function productId() : ColumnField
    {
        return new ColumnField('productId', 'Product', 'product', 'productid', $this->getAliasName());
    }
    public function title() : ColumnField
    {
        return new ColumnField('title', 'Product', 'product', 'title', $this->getAliasName());
    }
    public function description() : ColumnField
    {
        return new ColumnField('description', 'Product', 'product', 'description', $this->getAliasName());
    }
    public function version() : ColumnField
    {
        return new ColumnField('version', 'Product', 'product', 'version', $this->getAliasName());
    }
    public function active() : ColumnField
    {
        return new ColumnField('active', 'Product', 'product', 'active', $this->getAliasName());
    }
    public function url() : ColumnField
    {
        return new ColumnField('url', 'Product', 'product', 'url', $this->getAliasName());
    }
    public function versioncheckurl() : ColumnField
    {
        return new ColumnField('versioncheckurl', 'Product', 'product', 'versioncheckurl', $this->getAliasName());
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->productId(),
			$this->title(),
			$this->description(),
			$this->version(),
			$this->active(),
			$this->url(),
			$this->versioncheckurl()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : ProductRecord
    {
        return new ProductRecord();
    }
}