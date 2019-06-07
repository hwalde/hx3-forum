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

class PhraseType implements Table {

    const table = 'phrasetype';
   
    public static function as(string $aliasName): PhraseTypeAlias
    {
        return new PhraseTypeAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::fieldName(),
			self::title(),
			self::editRows(),
			self::product(),
			self::special()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PhraseTypeRecord
    {
        return new PhraseTypeRecord();
    }
    
    public static function fieldName() : ColumnField
    {
        return new ColumnField('fieldName', 'PhraseType', 'phrasetype', 'fieldname');
    }
    public static function title() : ColumnField
    {
        return new ColumnField('title', 'PhraseType', 'phrasetype', 'title');
    }
    public static function editRows() : ColumnField
    {
        return new ColumnField('editRows', 'PhraseType', 'phrasetype', 'editrows');
    }
    public static function product() : ColumnField
    {
        return new ColumnField('product', 'PhraseType', 'phrasetype', 'product');
    }
    public static function special() : ColumnField
    {
        return new ColumnField('special', 'PhraseType', 'phrasetype', 'special');
    }

    public function getTableName(): string
    {
        return 'phrasetype';
    }
    
    public function __listColumns() : array
    {
        return ['fieldname', 'title', 'editrows', 'product', 'special'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['fieldname'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'fieldname' => 'string', 
			'title' => 'string', 
			'editrows' => 'integer', 
			'product' => 'string', 
			'special' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'fieldname' => 'fieldName', 
			'title' => 'title', 
			'editrows' => 'editRows', 
			'product' => 'product', 
			'special' => 'special'
		];
    }
}