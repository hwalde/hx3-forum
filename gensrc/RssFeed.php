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

class RssFeed implements Table {

    const table = 'rssfeed';
   
    public static function as(string $aliasName): RssFeedAlias
    {
        return new RssFeedAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::rssFeedId(),
			self::title(),
			self::url(),
			self::port(),
			self::ttl(),
			self::maxResults(),
			self::userId(),
			self::forumId(),
			self::iconId(),
			self::titleTemplate(),
			self::bodyTemplate(),
			self::searchWords(),
			self::itemType(),
			self::threadActionDelay(),
			self::endAnnouncement(),
			self::options(),
			self::lastRun(),
			self::prefixId()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : RssFeedRecord
    {
        return new RssFeedRecord();
    }
    
    public static function rssFeedId() : ColumnField
    {
        return new ColumnField('rssFeedId', 'RssFeed', 'rssfeed', 'rssfeedid');
    }
    public static function title() : ColumnField
    {
        return new ColumnField('title', 'RssFeed', 'rssfeed', 'title');
    }
    public static function url() : ColumnField
    {
        return new ColumnField('url', 'RssFeed', 'rssfeed', 'url');
    }
    public static function port() : ColumnField
    {
        return new ColumnField('port', 'RssFeed', 'rssfeed', 'port');
    }
    public static function ttl() : ColumnField
    {
        return new ColumnField('ttl', 'RssFeed', 'rssfeed', 'ttl');
    }
    public static function maxResults() : ColumnField
    {
        return new ColumnField('maxResults', 'RssFeed', 'rssfeed', 'maxresults');
    }
    public static function userId() : ColumnField
    {
        return new ColumnField('userId', 'RssFeed', 'rssfeed', 'userid');
    }
    public static function forumId() : ColumnField
    {
        return new ColumnField('forumId', 'RssFeed', 'rssfeed', 'forumid');
    }
    public static function iconId() : ColumnField
    {
        return new ColumnField('iconId', 'RssFeed', 'rssfeed', 'iconid');
    }
    public static function titleTemplate() : ColumnField
    {
        return new ColumnField('titleTemplate', 'RssFeed', 'rssfeed', 'titletemplate');
    }
    public static function bodyTemplate() : ColumnField
    {
        return new ColumnField('bodyTemplate', 'RssFeed', 'rssfeed', 'bodytemplate');
    }
    public static function searchWords() : ColumnField
    {
        return new ColumnField('searchWords', 'RssFeed', 'rssfeed', 'searchwords');
    }
    public static function itemType() : ColumnField
    {
        return new ColumnField('itemType', 'RssFeed', 'rssfeed', 'itemtype');
    }
    public static function threadActionDelay() : ColumnField
    {
        return new ColumnField('threadActionDelay', 'RssFeed', 'rssfeed', 'threadactiondelay');
    }
    public static function endAnnouncement() : ColumnField
    {
        return new ColumnField('endAnnouncement', 'RssFeed', 'rssfeed', 'endannouncement');
    }
    public static function options() : ColumnField
    {
        return new ColumnField('options', 'RssFeed', 'rssfeed', 'options');
    }
    public static function lastRun() : ColumnField
    {
        return new ColumnField('lastRun', 'RssFeed', 'rssfeed', 'lastrun');
    }
    public static function prefixId() : ColumnField
    {
        return new ColumnField('prefixId', 'RssFeed', 'rssfeed', 'prefixid');
    }

    public function getTableName(): string
    {
        return 'rssfeed';
    }
    
    public function __listColumns() : array
    {
        return ['rssfeedid', 'title', 'url', 'port', 'ttl', 'maxresults', 'userid', 'forumid', 'iconid', 'titletemplate', 'bodytemplate', 'searchwords', 'itemtype', 'threadactiondelay', 'endannouncement', 'options', 'lastrun', 'prefixid'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['rssfeedid'];
    }
    
    public function __listNullableColumns() : array
    {
        return ['url'];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'rssfeedid' => 'integer', 
			'title' => 'string', 
			'url' => 'string', 
			'port' => 'integer', 
			'ttl' => 'integer', 
			'maxresults' => 'integer', 
			'userid' => 'integer', 
			'forumid' => 'integer', 
			'iconid' => 'integer', 
			'titletemplate' => 'string', 
			'bodytemplate' => 'string', 
			'searchwords' => 'string', 
			'itemtype' => 'string', 
			'threadactiondelay' => 'integer', 
			'endannouncement' => 'integer', 
			'options' => 'integer', 
			'lastrun' => 'integer', 
			'prefixid' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'rssfeedid' => 'rssFeedId', 
			'title' => 'title', 
			'url' => 'url', 
			'port' => 'port', 
			'ttl' => 'ttl', 
			'maxresults' => 'maxResults', 
			'userid' => 'userId', 
			'forumid' => 'forumId', 
			'iconid' => 'iconId', 
			'titletemplate' => 'titleTemplate', 
			'bodytemplate' => 'bodyTemplate', 
			'searchwords' => 'searchWords', 
			'itemtype' => 'itemType', 
			'threadactiondelay' => 'threadActionDelay', 
			'endannouncement' => 'endAnnouncement', 
			'options' => 'options', 
			'lastrun' => 'lastRun', 
			'prefixid' => 'prefixId'
		];
    }
}