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

class ForumRead implements Table {

    const table = 'forumread';
   
    public static function as(string $aliasName): ForumReadAlias
    {
        return new ForumReadAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::userId(),
			self::forumId(),
			self::readTime()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : ForumReadRecord
    {
        return new ForumReadRecord();
    }
    
    public static function userId() : ColumnField
    {
        return new ColumnField('forumread', 'userid');
    }
    public static function forumId() : ColumnField
    {
        return new ColumnField('forumread', 'forumid');
    }
    public static function readTime() : ColumnField
    {
        return new ColumnField('forumread', 'readtime');
    }

    public function getTableName(): string
    {
        return 'forumread';
    }
    
    public function __listColumns() : array
    {
        return ['userid', 'forumid', 'readtime'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'userid' => 'integer', 
			'forumid' => 'integer', 
			'readtime' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'userid' => 'userId', 
			'forumid' => 'forumId', 
			'readtime' => 'readTime'
		];
    }

}