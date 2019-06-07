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

class TachyForumCounter implements Table {

    const table = 'tachyforumcounter';
   
    public static function as(string $aliasName): TachyForumCounterAlias
    {
        return new TachyForumCounterAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::userId(),
			self::forumId(),
			self::threadCount(),
			self::replyCount()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : TachyForumCounterRecord
    {
        return new TachyForumCounterRecord();
    }
    
    public static function userId() : ColumnField
    {
        return new ColumnField('userId', 'TachyForumCounter', 'tachyforumcounter', 'userid');
    }
    public static function forumId() : ColumnField
    {
        return new ColumnField('forumId', 'TachyForumCounter', 'tachyforumcounter', 'forumid');
    }
    public static function threadCount() : ColumnField
    {
        return new ColumnField('threadCount', 'TachyForumCounter', 'tachyforumcounter', 'threadcount');
    }
    public static function replyCount() : ColumnField
    {
        return new ColumnField('replyCount', 'TachyForumCounter', 'tachyforumcounter', 'replycount');
    }

    public function getTableName(): string
    {
        return 'tachyforumcounter';
    }
    
    public function __listColumns() : array
    {
        return ['userid', 'forumid', 'threadcount', 'replycount'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['userid', 'forumid'];
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
			'threadcount' => 'integer', 
			'replycount' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'userid' => 'userId', 
			'forumid' => 'forumId', 
			'threadcount' => 'threadCount', 
			'replycount' => 'replyCount'
		];
    }
}