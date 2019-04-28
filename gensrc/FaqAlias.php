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

class FaqAlias extends TableAlias {
   
    public function faqName() : ColumnField
    {
        return new ColumnField('faq', 'faqname', $this->getAliasName());
    }
    public function faqParent() : ColumnField
    {
        return new ColumnField('faq', 'faqparent', $this->getAliasName());
    }
    public function displayOrder() : ColumnField
    {
        return new ColumnField('faq', 'displayorder', $this->getAliasName());
    }
    public function volatile() : ColumnField
    {
        return new ColumnField('faq', 'volatile', $this->getAliasName());
    }
    public function product() : ColumnField
    {
        return new ColumnField('faq', 'product', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'faq';
    }
    
    public function __listColumns() : array
    {
        return ['faqname', 'faqparent', 'displayorder', 'volatile', 'product'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'faqname' => 'string', 
			'faqparent' => 'string', 
			'displayorder' => 'integer', 
			'volatile' => 'integer', 
			'product' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'faqname' => 'faqName', 
			'faqparent' => 'faqParent', 
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
            $this->faqName(),
			$this->faqParent(),
			$this->displayOrder(),
			$this->volatile(),
			$this->product()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : FaqRecord
    {
        return new FaqRecord();
    }
}