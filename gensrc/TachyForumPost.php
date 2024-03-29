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

class TachyForumPost implements Table {

    const table = 'tachyforumpost';
   
    public static function as(string $aliasName): TachyForumPostAlias
    {
        return new TachyForumPostAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::userId(),
			self::forumId(),
			self::lastPost(),
			self::lastPoster(),
			self::lastThread(),
			self::lastThreadId(),
			self::lastIconId(),
			self::lastPostId(),
			self::lastPrefixId()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : TachyForumPostRecord
    {
        return new TachyForumPostRecord();
    }
    
    public static function userId() : ColumnField
    {
        return new ColumnField('userId', 'TachyForumPost', 'tachyforumpost', 'userid');
    }
    public static function forumId() : ColumnField
    {
        return new ColumnField('forumId', 'TachyForumPost', 'tachyforumpost', 'forumid');
    }
    public static function lastPost() : ColumnField
    {
        return new ColumnField('lastPost', 'TachyForumPost', 'tachyforumpost', 'lastpost');
    }
    public static function lastPoster() : ColumnField
    {
        return new ColumnField('lastPoster', 'TachyForumPost', 'tachyforumpost', 'lastposter');
    }
    public static function lastThread() : ColumnField
    {
        return new ColumnField('lastThread', 'TachyForumPost', 'tachyforumpost', 'lastthread');
    }
    public static function lastThreadId() : ColumnField
    {
        return new ColumnField('lastThreadId', 'TachyForumPost', 'tachyforumpost', 'lastthreadid');
    }
    public static function lastIconId() : ColumnField
    {
        return new ColumnField('lastIconId', 'TachyForumPost', 'tachyforumpost', 'lasticonid');
    }
    public static function lastPostId() : ColumnField
    {
        return new ColumnField('lastPostId', 'TachyForumPost', 'tachyforumpost', 'lastpostid');
    }
    public static function lastPrefixId() : ColumnField
    {
        return new ColumnField('lastPrefixId', 'TachyForumPost', 'tachyforumpost', 'lastprefixid');
    }

    public function getTableName(): string
    {
        return 'tachyforumpost';
    }
    
    public function __listColumns() : array
    {
        return ['userid', 'forumid', 'lastpost', 'lastposter', 'lastthread', 'lastthreadid', 'lasticonid', 'lastpostid', 'lastprefixid'];
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
			'lastpost' => 'integer', 
			'lastposter' => 'string', 
			'lastthread' => 'string', 
			'lastthreadid' => 'integer', 
			'lasticonid' => 'integer', 
			'lastpostid' => 'integer', 
			'lastprefixid' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'userid' => 'userId', 
			'forumid' => 'forumId', 
			'lastpost' => 'lastPost', 
			'lastposter' => 'lastPoster', 
			'lastthread' => 'lastThread', 
			'lastthreadid' => 'lastThreadId', 
			'lasticonid' => 'lastIconId', 
			'lastpostid' => 'lastPostId', 
			'lastprefixid' => 'lastPrefixId'
		];
    }
}