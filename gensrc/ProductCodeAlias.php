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

class ProductCodeAlias extends TableAlias {
   
    public function productCodeId() : ColumnField
    {
        return new ColumnField('productcode', 'productcodeid', $this->getAliasName());
    }
    public function productId() : ColumnField
    {
        return new ColumnField('productcode', 'productid', $this->getAliasName());
    }
    public function version() : ColumnField
    {
        return new ColumnField('productcode', 'version', $this->getAliasName());
    }
    public function installCode() : ColumnField
    {
        return new ColumnField('productcode', 'installcode', $this->getAliasName());
    }
    public function uninstallCode() : ColumnField
    {
        return new ColumnField('productcode', 'uninstallcode', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'productcode';
    }
    
    public function __listColumns() : array
    {
        return ['productcodeid', 'productid', 'version', 'installcode', 'uninstallcode'];
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->productCodeId(),
			$this->productId(),
			$this->version(),
			$this->installCode(),
			$this->uninstallCode()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : ProductCodeRecord
    {
        return new ProductCodeRecord();
    }
}