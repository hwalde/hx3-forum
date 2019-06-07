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

class Prefix implements Table {

    const table = 'prefix';
   
    public static function as(string $aliasName): PrefixAlias
    {
        return new PrefixAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::prefixId(),
			self::prefixSetId(),
			self::displayOrder()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PrefixRecord
    {
        return new PrefixRecord();
    }
    
    public static function prefixId() : ColumnField
    {
        return new ColumnField('prefixId', 'Prefix', 'prefix', 'prefixid');
    }
    public static function prefixSetId() : ColumnField
    {
        return new ColumnField('prefixSetId', 'Prefix', 'prefix', 'prefixsetid');
    }
    public static function displayOrder() : ColumnField
    {
        return new ColumnField('displayOrder', 'Prefix', 'prefix', 'displayorder');
    }

    public function getTableName(): string
    {
        return 'prefix';
    }
    
    public function __listColumns() : array
    {
        return ['prefixid', 'prefixsetid', 'displayorder'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['prefixid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'prefixid' => 'string', 
			'prefixsetid' => 'string', 
			'displayorder' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'prefixid' => 'prefixId', 
			'prefixsetid' => 'prefixSetId', 
			'displayorder' => 'displayOrder'
		];
    }
}