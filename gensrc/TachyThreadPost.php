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

class TachyThreadPost implements Table {

    const table = 'tachythreadpost';
   
    public static function as(string $aliasName): TachyThreadPostAlias
    {
        return new TachyThreadPostAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::userId(),
			self::threadId(),
			self::lastPost(),
			self::lastPoster(),
			self::lastPostId()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : TachyThreadPostRecord
    {
        return new TachyThreadPostRecord();
    }
    
    public static function userId() : ColumnField
    {
        return new ColumnField('userId', 'TachyThreadPost', 'tachythreadpost', 'userid');
    }
    public static function threadId() : ColumnField
    {
        return new ColumnField('threadId', 'TachyThreadPost', 'tachythreadpost', 'threadid');
    }
    public static function lastPost() : ColumnField
    {
        return new ColumnField('lastPost', 'TachyThreadPost', 'tachythreadpost', 'lastpost');
    }
    public static function lastPoster() : ColumnField
    {
        return new ColumnField('lastPoster', 'TachyThreadPost', 'tachythreadpost', 'lastposter');
    }
    public static function lastPostId() : ColumnField
    {
        return new ColumnField('lastPostId', 'TachyThreadPost', 'tachythreadpost', 'lastpostid');
    }

    public function getTableName(): string
    {
        return 'tachythreadpost';
    }
    
    public function __listColumns() : array
    {
        return ['userid', 'threadid', 'lastpost', 'lastposter', 'lastpostid'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['userid', 'threadid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'userid' => 'integer', 
			'threadid' => 'integer', 
			'lastpost' => 'integer', 
			'lastposter' => 'string', 
			'lastpostid' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'userid' => 'userId', 
			'threadid' => 'threadId', 
			'lastpost' => 'lastPost', 
			'lastposter' => 'lastPoster', 
			'lastpostid' => 'lastPostId'
		];
    }
}