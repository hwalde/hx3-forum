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

class PrefixSet implements Table {

    const table = 'prefixset';
   
    public static function as(string $aliasName): PrefixSetAlias
    {
        return new PrefixSetAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::prefixSetId(),
			self::displayOrder()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PrefixSetRecord
    {
        return new PrefixSetRecord();
    }
    
    public static function prefixSetId() : ColumnField
    {
        return new ColumnField('prefixset', 'prefixsetid');
    }
    public static function displayOrder() : ColumnField
    {
        return new ColumnField('prefixset', 'displayorder');
    }

    public function getTableName(): string
    {
        return 'prefixset';
    }
    
    public function __listColumns() : array
    {
        return ['prefixsetid', 'displayorder'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'prefixsetid' => 'string', 
			'displayorder' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'prefixsetid' => 'prefixSetId', 
			'displayorder' => 'displayOrder'
		];
    }

}