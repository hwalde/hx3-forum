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

class RssLog implements Table {

    const table = 'rsslog';
   
    public static function as(string $aliasName): RssLogAlias
    {
        return new RssLogAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::rssFeedId(),
			self::itemId(),
			self::itemType(),
			self::uniqueHash(),
			self::contentHash(),
			self::dateLine(),
			self::threadActionTime(),
			self::threadActionComplete()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : RssLogRecord
    {
        return new RssLogRecord();
    }
    
    public static function rssFeedId() : ColumnField
    {
        return new ColumnField('rsslog', 'rssfeedid');
    }
    public static function itemId() : ColumnField
    {
        return new ColumnField('rsslog', 'itemid');
    }
    public static function itemType() : ColumnField
    {
        return new ColumnField('rsslog', 'itemtype');
    }
    public static function uniqueHash() : ColumnField
    {
        return new ColumnField('rsslog', 'uniquehash');
    }
    public static function contentHash() : ColumnField
    {
        return new ColumnField('rsslog', 'contenthash');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('rsslog', 'dateline');
    }
    public static function threadActionTime() : ColumnField
    {
        return new ColumnField('rsslog', 'threadactiontime');
    }
    public static function threadActionComplete() : ColumnField
    {
        return new ColumnField('rsslog', 'threadactioncomplete');
    }

    public function getTableName(): string
    {
        return 'rsslog';
    }
    
    public function __listColumns() : array
    {
        return ['rssfeedid', 'itemid', 'itemtype', 'uniquehash', 'contenthash', 'dateline', 'threadactiontime', 'threadactioncomplete'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'rssfeedid' => 'integer', 
			'itemid' => 'integer', 
			'itemtype' => 'string', 
			'uniquehash' => 'string', 
			'contenthash' => 'string', 
			'dateline' => 'integer', 
			'threadactiontime' => 'integer', 
			'threadactioncomplete' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'rssfeedid' => 'rssFeedId', 
			'itemid' => 'itemId', 
			'itemtype' => 'itemType', 
			'uniquehash' => 'uniqueHash', 
			'contenthash' => 'contentHash', 
			'dateline' => 'dateLine', 
			'threadactiontime' => 'threadActionTime', 
			'threadactioncomplete' => 'threadActionComplete'
		];
    }

}