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
use businesslogic\thread\ThreadRecord;

class Thread implements Table {

    const table = 'thread';
   
    public static function as(string $aliasName): ThreadAlias
    {
        return new ThreadAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::threadId(),
			self::title(),
			self::firstPostId(),
			self::lastPost(),
			self::forumId(),
			self::pollId(),
			self::open(),
			self::replyCount(),
			self::postUserName(),
			self::postUserId(),
			self::lastPoster(),
			self::dateLine(),
			self::views(),
			self::iconId(),
			self::notes(),
			self::visible(),
			self::sticky(),
			self::voteNum(),
			self::voteTotal(),
			self::attach(),
			self::similar(),
			self::importThreadId(),
			self::importForumId(),
			self::hiddenCount(),
			self::deletedCount(),
			self::lastPostId(),
			self::prefixId(),
			self::tagList(),
			self::vbSeoLinkbacksNo()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : ThreadRecord
    {
        return new ThreadRecord();
    }
    
    public static function threadId() : ColumnField
    {
        return new ColumnField('threadId', 'Thread', 'thread', 'threadid');
    }
    public static function title() : ColumnField
    {
        return new ColumnField('title', 'Thread', 'thread', 'title');
    }
    public static function firstPostId() : ColumnField
    {
        return new ColumnField('firstPostId', 'Thread', 'thread', 'firstpostid');
    }
    public static function lastPost() : ColumnField
    {
        return new ColumnField('lastPost', 'Thread', 'thread', 'lastpost');
    }
    public static function forumId() : ColumnField
    {
        return new ColumnField('forumId', 'Thread', 'thread', 'forumid');
    }
    public static function pollId() : ColumnField
    {
        return new ColumnField('pollId', 'Thread', 'thread', 'pollid');
    }
    public static function open() : ColumnField
    {
        return new ColumnField('open', 'Thread', 'thread', 'open');
    }
    public static function replyCount() : ColumnField
    {
        return new ColumnField('replyCount', 'Thread', 'thread', 'replycount');
    }
    public static function postUserName() : ColumnField
    {
        return new ColumnField('postUserName', 'Thread', 'thread', 'postusername');
    }
    public static function postUserId() : ColumnField
    {
        return new ColumnField('postUserId', 'Thread', 'thread', 'postuserid');
    }
    public static function lastPoster() : ColumnField
    {
        return new ColumnField('lastPoster', 'Thread', 'thread', 'lastposter');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'Thread', 'thread', 'dateline');
    }
    public static function views() : ColumnField
    {
        return new ColumnField('views', 'Thread', 'thread', 'views');
    }
    public static function iconId() : ColumnField
    {
        return new ColumnField('iconId', 'Thread', 'thread', 'iconid');
    }
    public static function notes() : ColumnField
    {
        return new ColumnField('notes', 'Thread', 'thread', 'notes');
    }
    public static function visible() : ColumnField
    {
        return new ColumnField('visible', 'Thread', 'thread', 'visible');
    }
    public static function sticky() : ColumnField
    {
        return new ColumnField('sticky', 'Thread', 'thread', 'sticky');
    }
    public static function voteNum() : ColumnField
    {
        return new ColumnField('voteNum', 'Thread', 'thread', 'votenum');
    }
    public static function voteTotal() : ColumnField
    {
        return new ColumnField('voteTotal', 'Thread', 'thread', 'votetotal');
    }
    public static function attach() : ColumnField
    {
        return new ColumnField('attach', 'Thread', 'thread', 'attach');
    }
    public static function similar() : ColumnField
    {
        return new ColumnField('similar', 'Thread', 'thread', 'similar');
    }
    public static function importThreadId() : ColumnField
    {
        return new ColumnField('importThreadId', 'Thread', 'thread', 'importthreadid');
    }
    public static function importForumId() : ColumnField
    {
        return new ColumnField('importForumId', 'Thread', 'thread', 'importforumid');
    }
    public static function hiddenCount() : ColumnField
    {
        return new ColumnField('hiddenCount', 'Thread', 'thread', 'hiddencount');
    }
    public static function deletedCount() : ColumnField
    {
        return new ColumnField('deletedCount', 'Thread', 'thread', 'deletedcount');
    }
    public static function lastPostId() : ColumnField
    {
        return new ColumnField('lastPostId', 'Thread', 'thread', 'lastpostid');
    }
    public static function prefixId() : ColumnField
    {
        return new ColumnField('prefixId', 'Thread', 'thread', 'prefixid');
    }
    public static function tagList() : ColumnField
    {
        return new ColumnField('tagList', 'Thread', 'thread', 'taglist');
    }
    public static function vbSeoLinkbacksNo() : ColumnField
    {
        return new ColumnField('vbSeoLinkbacksNo', 'Thread', 'thread', 'vbseo_linkbacks_no');
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
}