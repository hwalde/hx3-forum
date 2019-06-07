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

class TachyForumPostAlias extends TableAlias {
   
    public function userId() : ColumnField
    {
        return new ColumnField('userId', 'TachyForumPost', 'tachyforumpost', 'userid', $this->getAliasName());
    }
    public function forumId() : ColumnField
    {
        return new ColumnField('forumId', 'TachyForumPost', 'tachyforumpost', 'forumid', $this->getAliasName());
    }
    public function lastPost() : ColumnField
    {
        return new ColumnField('lastPost', 'TachyForumPost', 'tachyforumpost', 'lastpost', $this->getAliasName());
    }
    public function lastPoster() : ColumnField
    {
        return new ColumnField('lastPoster', 'TachyForumPost', 'tachyforumpost', 'lastposter', $this->getAliasName());
    }
    public function lastThread() : ColumnField
    {
        return new ColumnField('lastThread', 'TachyForumPost', 'tachyforumpost', 'lastthread', $this->getAliasName());
    }
    public function lastThreadId() : ColumnField
    {
        return new ColumnField('lastThreadId', 'TachyForumPost', 'tachyforumpost', 'lastthreadid', $this->getAliasName());
    }
    public function lastIconId() : ColumnField
    {
        return new ColumnField('lastIconId', 'TachyForumPost', 'tachyforumpost', 'lasticonid', $this->getAliasName());
    }
    public function lastPostId() : ColumnField
    {
        return new ColumnField('lastPostId', 'TachyForumPost', 'tachyforumpost', 'lastpostid', $this->getAliasName());
    }
    public function lastPrefixId() : ColumnField
    {
        return new ColumnField('lastPrefixId', 'TachyForumPost', 'tachyforumpost', 'lastprefixid', $this->getAliasName());
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->userId(),
			$this->forumId(),
			$this->lastPost(),
			$this->lastPoster(),
			$this->lastThread(),
			$this->lastThreadId(),
			$this->lastIconId(),
			$this->lastPostId(),
			$this->lastPrefixId()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : TachyForumPostRecord
    {
        return new TachyForumPostRecord();
    }
}