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

class Faq implements Table {

    const table = 'faq';
   
    public static function as(string $aliasName): FaqAlias
    {
        return new FaqAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::faqName(),
			self::faqParent(),
			self::displayOrder(),
			self::volatile(),
			self::product()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : FaqRecord
    {
        return new FaqRecord();
    }
    
    public static function faqName() : ColumnField
    {
        return new ColumnField('faq', 'faqname');
    }
    public static function faqParent() : ColumnField
    {
        return new ColumnField('faq', 'faqparent');
    }
    public static function displayOrder() : ColumnField
    {
        return new ColumnField('faq', 'displayorder');
    }
    public static function volatile() : ColumnField
    {
        return new ColumnField('faq', 'volatile');
    }
    public static function product() : ColumnField
    {
        return new ColumnField('faq', 'product');
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

}