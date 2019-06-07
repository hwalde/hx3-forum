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

class TagThread implements Table {

    const table = 'tagthread';
   
    public static function as(string $aliasName): TagThreadAlias
    {
        return new TagThreadAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::tagId(),
			self::threadId(),
			self::userId(),
			self::dateLine()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : TagThreadRecord
    {
        return new TagThreadRecord();
    }
    
    public static function tagId() : ColumnField
    {
        return new ColumnField('tagId', 'TagThread', 'tagthread', 'tagid');
    }
    public static function threadId() : ColumnField
    {
        return new ColumnField('threadId', 'TagThread', 'tagthread', 'threadid');
    }
    public static function userId() : ColumnField
    {
        return new ColumnField('userId', 'TagThread', 'tagthread', 'userid');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'TagThread', 'tagthread', 'dateline');
    }

    public function getTableName(): string
    {
        return 'tagthread';
    }
    
    public function __listColumns() : array
    {
        return ['tagid', 'threadid', 'userid', 'dateline'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['tagid', 'threadid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'tagid' => 'integer', 
			'threadid' => 'integer', 
			'userid' => 'integer', 
			'dateline' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'tagid' => 'tagId', 
			'threadid' => 'threadId', 
			'userid' => 'userId', 
			'dateline' => 'dateLine'
		];
    }
}