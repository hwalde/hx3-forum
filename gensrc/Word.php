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

class Word implements Table {

    const table = 'word';
   
    public static function as(string $aliasName): WordAlias
    {
        return new WordAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::wordId(),
			self::title()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : WordRecord
    {
        return new WordRecord();
    }
    
    public static function wordId() : ColumnField
    {
        return new ColumnField('word', 'wordid');
    }
    public static function title() : ColumnField
    {
        return new ColumnField('word', 'title');
    }

    public function getTableName(): string
    {
        return 'word';
    }
    
    public function __listColumns() : array
    {
        return ['wordid', 'title'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'wordid' => 'integer', 
			'title' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'wordid' => 'wordId', 
			'title' => 'title'
		];
    }

}