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
use businesslogic\thread\ThreadRecord;

class ThreadAlias extends TableAlias {
   
    public function threadId() : ColumnField
    {
        return new ColumnField('threadId', 'Thread', 'thread', 'threadid', $this->getAliasName());
    }
    public function title() : ColumnField
    {
        return new ColumnField('title', 'Thread', 'thread', 'title', $this->getAliasName());
    }
    public function firstPostId() : ColumnField
    {
        return new ColumnField('firstPostId', 'Thread', 'thread', 'firstpostid', $this->getAliasName());
    }
    public function lastPost() : ColumnField
    {
        return new ColumnField('lastPost', 'Thread', 'thread', 'lastpost', $this->getAliasName());
    }
    public function forumId() : ColumnField
    {
        return new ColumnField('forumId', 'Thread', 'thread', 'forumid', $this->getAliasName());
    }
    public function pollId() : ColumnField
    {
        return new ColumnField('pollId', 'Thread', 'thread', 'pollid', $this->getAliasName());
    }
    public function open() : ColumnField
    {
        return new ColumnField('open', 'Thread', 'thread', 'open', $this->getAliasName());
    }
    public function replyCount() : ColumnField
    {
        return new ColumnField('replyCount', 'Thread', 'thread', 'replycount', $this->getAliasName());
    }
    public function postUserName() : ColumnField
    {
        return new ColumnField('postUserName', 'Thread', 'thread', 'postusername', $this->getAliasName());
    }
    public function postUserId() : ColumnField
    {
        return new ColumnField('postUserId', 'Thread', 'thread', 'postuserid', $this->getAliasName());
    }
    public function lastPoster() : ColumnField
    {
        return new ColumnField('lastPoster', 'Thread', 'thread', 'lastposter', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'Thread', 'thread', 'dateline', $this->getAliasName());
    }
    public function views() : ColumnField
    {
        return new ColumnField('views', 'Thread', 'thread', 'views', $this->getAliasName());
    }
    public function iconId() : ColumnField
    {
        return new ColumnField('iconId', 'Thread', 'thread', 'iconid', $this->getAliasName());
    }
    public function notes() : ColumnField
    {
        return new ColumnField('notes', 'Thread', 'thread', 'notes', $this->getAliasName());
    }
    public function visible() : ColumnField
    {
        return new ColumnField('visible', 'Thread', 'thread', 'visible', $this->getAliasName());
    }
    public function sticky() : ColumnField
    {
        return new ColumnField('sticky', 'Thread', 'thread', 'sticky', $this->getAliasName());
    }
    public function voteNum() : ColumnField
    {
        return new ColumnField('voteNum', 'Thread', 'thread', 'votenum', $this->getAliasName());
    }
    public function voteTotal() : ColumnField
    {
        return new ColumnField('voteTotal', 'Thread', 'thread', 'votetotal', $this->getAliasName());
    }
    public function attach() : ColumnField
    {
        return new ColumnField('attach', 'Thread', 'thread', 'attach', $this->getAliasName());
    }
    public function similar() : ColumnField
    {
        return new ColumnField('similar', 'Thread', 'thread', 'similar', $this->getAliasName());
    }
    public function importThreadId() : ColumnField
    {
        return new ColumnField('importThreadId', 'Thread', 'thread', 'importthreadid', $this->getAliasName());
    }
    public function importForumId() : ColumnField
    {
        return new ColumnField('importForumId', 'Thread', 'thread', 'importforumid', $this->getAliasName());
    }
    public function hiddenCount() : ColumnField
    {
        return new ColumnField('hiddenCount', 'Thread', 'thread', 'hiddencount', $this->getAliasName());
    }
    public function deletedCount() : ColumnField
    {
        return new ColumnField('deletedCount', 'Thread', 'thread', 'deletedcount', $this->getAliasName());
    }
    public function lastPostId() : ColumnField
    {
        return new ColumnField('lastPostId', 'Thread', 'thread', 'lastpostid', $this->getAliasName());
    }
    public function prefixId() : ColumnField
    {
        return new ColumnField('prefixId', 'Thread', 'thread', 'prefixid', $this->getAliasName());
    }
    public function tagList() : ColumnField
    {
        return new ColumnField('tagList', 'Thread', 'thread', 'taglist', $this->getAliasName());
    }
    public function vbSeoLinkbacksNo() : ColumnField
    {
        return new ColumnField('vbSeoLinkbacksNo', 'Thread', 'thread', 'vbseo_linkbacks_no', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'thread';
    }
    
    public function __listColumns() : array
    {
        return ['threadid', 'title', 'firstpostid', 'lastpost', 'forumid', 'pollid', 'open', 'replycount', 'postusername', 'postuserid', 'lastposter', 'dateline', 'views', 'iconid', 'notes', 'visible', 'sticky', 'votenum', 'votetotal', 'attach', 'similar', 'importthreadid', 'importforumid', 'hiddencount', 'deletedcount', 'lastpostid', 'prefixid', 'taglist', 'vbseo_linkbacks_no'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['threadid'];
    }
    
    public function __listNullableColumns() : array
    {
        return ['lastpost', 'postuserid', 'lastpostid', 'taglist'];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'threadid' => 'integer', 
			'title' => 'string', 
			'firstpostid' => 'integer', 
			'lastpost' => 'integer', 
			'forumid' => 'integer', 
			'pollid' => 'integer', 
			'open' => 'integer', 
			'replycount' => 'integer', 
			'postusername' => 'string', 
			'postuserid' => 'integer', 
			'lastposter' => 'string', 
			'dateline' => 'integer', 
			'views' => 'integer', 
			'iconid' => 'integer', 
			'notes' => 'string', 
			'visible' => 'integer', 
			'sticky' => 'integer', 
			'votenum' => 'integer', 
			'votetotal' => 'integer', 
			'attach' => 'integer', 
			'similar' => 'string', 
			'importthreadid' => 'integer', 
			'importforumid' => 'integer', 
			'hiddencount' => 'integer', 
			'deletedcount' => 'integer', 
			'lastpostid' => 'integer', 
			'prefixid' => 'string', 
			'taglist' => 'string', 
			'vbseo_linkbacks_no' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'threadid' => 'threadId', 
			'title' => 'title', 
			'firstpostid' => 'firstPostId', 
			'lastpost' => 'lastPost', 
			'forumid' => 'forumId', 
			'pollid' => 'pollId', 
			'open' => 'open', 
			'replycount' => 'replyCount', 
			'postusername' => 'postUserName', 
			'postuserid' => 'postUserId', 
			'lastposter' => 'lastPoster', 
			'dateline' => 'dateLine', 
			'views' => 'views', 
			'iconid' => 'iconId', 
			'notes' => 'notes', 
			'visible' => 'visible', 
			'sticky' => 'sticky', 
			'votenum' => 'voteNum', 
			'votetotal' => 'voteTotal', 
			'attach' => 'attach', 
			'similar' => 'similar', 
			'importthreadid' => 'importThreadId', 
			'importforumid' => 'importForumId', 
			'hiddencount' => 'hiddenCount', 
			'deletedcount' => 'deletedCount', 
			'lastpostid' => 'lastPostId', 
			'prefixid' => 'prefixId', 
			'taglist' => 'tagList', 
			'vbseo_linkbacks_no' => 'vbSeoLinkbacksNo'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->threadId(),
			$this->title(),
			$this->firstPostId(),
			$this->lastPost(),
			$this->forumId(),
			$this->pollId(),
			$this->open(),
			$this->replyCount(),
			$this->postUserName(),
			$this->postUserId(),
			$this->lastPoster(),
			$this->dateLine(),
			$this->views(),
			$this->iconId(),
			$this->notes(),
			$this->visible(),
			$this->sticky(),
			$this->voteNum(),
			$this->voteTotal(),
			$this->attach(),
			$this->similar(),
			$this->importThreadId(),
			$this->importForumId(),
			$this->hiddenCount(),
			$this->deletedCount(),
			$this->lastPostId(),
			$this->prefixId(),
			$this->tagList(),
			$this->vbSeoLinkbacksNo()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : ThreadRecord
    {
        return new ThreadRecord();
    }
}