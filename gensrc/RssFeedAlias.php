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

use POOQ\TableAlias;
use POOQ\ColumnField;
use POOQ\ColumnFieldList;

class RssFeedAlias extends TableAlias {
   
    public function rssFeedId() : ColumnField
    {
        return new ColumnField('rssFeedId', 'RssFeed', 'rssfeed', 'rssfeedid', $this->getAliasName());
    }
    public function title() : ColumnField
    {
        return new ColumnField('title', 'RssFeed', 'rssfeed', 'title', $this->getAliasName());
    }
    public function url() : ColumnField
    {
        return new ColumnField('url', 'RssFeed', 'rssfeed', 'url', $this->getAliasName());
    }
    public function port() : ColumnField
    {
        return new ColumnField('port', 'RssFeed', 'rssfeed', 'port', $this->getAliasName());
    }
    public function ttl() : ColumnField
    {
        return new ColumnField('ttl', 'RssFeed', 'rssfeed', 'ttl', $this->getAliasName());
    }
    public function maxResults() : ColumnField
    {
        return new ColumnField('maxResults', 'RssFeed', 'rssfeed', 'maxresults', $this->getAliasName());
    }
    public function userId() : ColumnField
    {
        return new ColumnField('userId', 'RssFeed', 'rssfeed', 'userid', $this->getAliasName());
    }
    public function forumId() : ColumnField
    {
        return new ColumnField('forumId', 'RssFeed', 'rssfeed', 'forumid', $this->getAliasName());
    }
    public function iconId() : ColumnField
    {
        return new ColumnField('iconId', 'RssFeed', 'rssfeed', 'iconid', $this->getAliasName());
    }
    public function titleTemplate() : ColumnField
    {
        return new ColumnField('titleTemplate', 'RssFeed', 'rssfeed', 'titletemplate', $this->getAliasName());
    }
    public function bodyTemplate() : ColumnField
    {
        return new ColumnField('bodyTemplate', 'RssFeed', 'rssfeed', 'bodytemplate', $this->getAliasName());
    }
    public function searchWords() : ColumnField
    {
        return new ColumnField('searchWords', 'RssFeed', 'rssfeed', 'searchwords', $this->getAliasName());
    }
    public function itemType() : ColumnField
    {
        return new ColumnField('itemType', 'RssFeed', 'rssfeed', 'itemtype', $this->getAliasName());
    }
    public function threadActionDelay() : ColumnField
    {
        return new ColumnField('threadActionDelay', 'RssFeed', 'rssfeed', 'threadactiondelay', $this->getAliasName());
    }
    public function endAnnouncement() : ColumnField
    {
        return new ColumnField('endAnnouncement', 'RssFeed', 'rssfeed', 'endannouncement', $this->getAliasName());
    }
    public function options() : ColumnField
    {
        return new ColumnField('options', 'RssFeed', 'rssfeed', 'options', $this->getAliasName());
    }
    public function lastRun() : ColumnField
    {
        return new ColumnField('lastRun', 'RssFeed', 'rssfeed', 'lastrun', $this->getAliasName());
    }
    public function prefixId() : ColumnField
    {
        return new ColumnField('prefixId', 'RssFeed', 'rssfeed', 'prefixid', $this->getAliasName());
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->rssFeedId(),
			$this->title(),
			$this->url(),
			$this->port(),
			$this->ttl(),
			$this->maxResults(),
			$this->userId(),
			$this->forumId(),
			$this->iconId(),
			$this->titleTemplate(),
			$this->bodyTemplate(),
			$this->searchWords(),
			$this->itemType(),
			$this->threadActionDelay(),
			$this->endAnnouncement(),
			$this->options(),
			$this->lastRun(),
			$this->prefixId()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : RssFeedRecord
    {
        return new RssFeedRecord();
    }
}