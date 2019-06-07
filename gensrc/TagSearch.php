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

class TagSearch implements Table {

    const table = 'tagsearch';
   
    public static function as(string $aliasName): TagSearchAlias
    {
        return new TagSearchAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::tagId(),
			self::dateLine()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : TagSearchRecord
    {
        return new TagSearchRecord();
    }
    
    public static function tagId() : ColumnField
    {
        return new ColumnField('tagId', 'TagSearch', 'tagsearch', 'tagid');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'TagSearch', 'tagsearch', 'dateline');
    }

    public function getTableName(): string
    {
        return 'tagsearch';
    }
    
    public function __listColumns() : array
    {
        return ['tagid', 'dateline'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return [];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'tagid' => 'integer', 
			'dateline' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'tagid' => 'tagId', 
			'dateline' => 'dateLine'
		];
    }
}