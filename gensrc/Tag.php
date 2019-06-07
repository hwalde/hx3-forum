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

class Tag implements Table {

    const table = 'tag';
   
    public static function as(string $aliasName): TagAlias
    {
        return new TagAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::tagId(),
			self::tagText(),
			self::dateLine()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : TagRecord
    {
        return new TagRecord();
    }
    
    public static function tagId() : ColumnField
    {
        return new ColumnField('tagId', 'Tag', 'tag', 'tagid');
    }
    public static function tagText() : ColumnField
    {
        return new ColumnField('tagText', 'Tag', 'tag', 'tagtext');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'Tag', 'tag', 'dateline');
    }

    public function getTableName(): string
    {
        return 'tag';
    }
    
    public function __listColumns() : array
    {
        return ['tagid', 'tagtext', 'dateline'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['tagid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'tagid' => 'integer', 
			'tagtext' => 'string', 
			'dateline' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'tagid' => 'tagId', 
			'tagtext' => 'tagText', 
			'dateline' => 'dateLine'
		];
    }
}