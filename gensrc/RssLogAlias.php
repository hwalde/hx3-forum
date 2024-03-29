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

class RssLogAlias extends TableAlias {
   
    public function rssFeedId() : ColumnField
    {
        return new ColumnField('rssFeedId', 'RssLog', 'rsslog', 'rssfeedid', $this->getAliasName());
    }
    public function itemId() : ColumnField
    {
        return new ColumnField('itemId', 'RssLog', 'rsslog', 'itemid', $this->getAliasName());
    }
    public function itemType() : ColumnField
    {
        return new ColumnField('itemType', 'RssLog', 'rsslog', 'itemtype', $this->getAliasName());
    }
    public function uniqueHash() : ColumnField
    {
        return new ColumnField('uniqueHash', 'RssLog', 'rsslog', 'uniquehash', $this->getAliasName());
    }
    public function contentHash() : ColumnField
    {
        return new ColumnField('contentHash', 'RssLog', 'rsslog', 'contenthash', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'RssLog', 'rsslog', 'dateline', $this->getAliasName());
    }
    public function threadActionTime() : ColumnField
    {
        return new ColumnField('threadActionTime', 'RssLog', 'rsslog', 'threadactiontime', $this->getAliasName());
    }
    public function threadActionComplete() : ColumnField
    {
        return new ColumnField('threadActionComplete', 'RssLog', 'rsslog', 'threadactioncomplete', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'rsslog';
    }
    
    public function __listColumns() : array
    {
        return ['rssfeedid', 'itemid', 'itemtype', 'uniquehash', 'contenthash', 'dateline', 'threadactiontime', 'threadactioncomplete'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['rssfeedid', 'itemid', 'itemtype'];
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->rssFeedId(),
			$this->itemId(),
			$this->itemType(),
			$this->uniqueHash(),
			$this->contentHash(),
			$this->dateLine(),
			$this->threadActionTime(),
			$this->threadActionComplete()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : RssLogRecord
    {
        return new RssLogRecord();
    }
}