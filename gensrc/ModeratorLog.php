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

class ModeratorLog implements Table {

    const table = 'moderatorlog';
   
    public static function as(string $aliasName): ModeratorLogAlias
    {
        return new ModeratorLogAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::moderatorLogId(),
			self::dateLine(),
			self::userId(),
			self::forumId(),
			self::threadId(),
			self::postId(),
			self::pollId(),
			self::action(),
			self::type(),
			self::threadTitle(),
			self::attachmentId(),
			self::ipAddress(),
			self::id1(),
			self::id2(),
			self::id3(),
			self::id4(),
			self::id5(),
			self::product()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : ModeratorLogRecord
    {
        return new ModeratorLogRecord();
    }
    
    public static function moderatorLogId() : ColumnField
    {
        return new ColumnField('moderatorLogId', 'ModeratorLog', 'moderatorlog', 'moderatorlogid');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'ModeratorLog', 'moderatorlog', 'dateline');
    }
    public static function userId() : ColumnField
    {
        return new ColumnField('userId', 'ModeratorLog', 'moderatorlog', 'userid');
    }
    public static function forumId() : ColumnField
    {
        return new ColumnField('forumId', 'ModeratorLog', 'moderatorlog', 'forumid');
    }
    public static function threadId() : ColumnField
    {
        return new ColumnField('threadId', 'ModeratorLog', 'moderatorlog', 'threadid');
    }
    public static function postId() : ColumnField
    {
        return new ColumnField('postId', 'ModeratorLog', 'moderatorlog', 'postid');
    }
    public static function pollId() : ColumnField
    {
        return new ColumnField('pollId', 'ModeratorLog', 'moderatorlog', 'pollid');
    }
    public static function action() : ColumnField
    {
        return new ColumnField('action', 'ModeratorLog', 'moderatorlog', 'action');
    }
    public static function type() : ColumnField
    {
        return new ColumnField('type', 'ModeratorLog', 'moderatorlog', 'type');
    }
    public static function threadTitle() : ColumnField
    {
        return new ColumnField('threadTitle', 'ModeratorLog', 'moderatorlog', 'threadtitle');
    }
    public static function attachmentId() : ColumnField
    {
        return new ColumnField('attachmentId', 'ModeratorLog', 'moderatorlog', 'attachmentid');
    }
    public static function ipAddress() : ColumnField
    {
        return new ColumnField('ipAddress', 'ModeratorLog', 'moderatorlog', 'ipaddress');
    }
    public static function id1() : ColumnField
    {
        return new ColumnField('id1', 'ModeratorLog', 'moderatorlog', 'id1');
    }
    public static function id2() : ColumnField
    {
        return new ColumnField('id2', 'ModeratorLog', 'moderatorlog', 'id2');
    }
    public static function id3() : ColumnField
    {
        return new ColumnField('id3', 'ModeratorLog', 'moderatorlog', 'id3');
    }
    public static function id4() : ColumnField
    {
        return new ColumnField('id4', 'ModeratorLog', 'moderatorlog', 'id4');
    }
    public static function id5() : ColumnField
    {
        return new ColumnField('id5', 'ModeratorLog', 'moderatorlog', 'id5');
    }
    public static function product() : ColumnField
    {
        return new ColumnField('product', 'ModeratorLog', 'moderatorlog', 'product');
    }

    public function getTableName(): string
    {
        return 'moderatorlog';
    }
    
    public function __listColumns() : array
    {
        return ['moderatorlogid', 'dateline', 'userid', 'forumid', 'threadid', 'postid', 'pollid', 'action', 'type', 'threadtitle', 'attachmentid', 'ipaddress', 'id1', 'id2', 'id3', 'id4', 'id5', 'product'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['moderatorlogid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'moderatorlogid' => 'integer', 
			'dateline' => 'integer', 
			'userid' => 'integer', 
			'forumid' => 'integer', 
			'threadid' => 'integer', 
			'postid' => 'integer', 
			'pollid' => 'integer', 
			'action' => 'string', 
			'type' => 'integer', 
			'threadtitle' => 'string', 
			'attachmentid' => 'integer', 
			'ipaddress' => 'string', 
			'id1' => 'integer', 
			'id2' => 'integer', 
			'id3' => 'integer', 
			'id4' => 'integer', 
			'id5' => 'integer', 
			'product' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'moderatorlogid' => 'moderatorLogId', 
			'dateline' => 'dateLine', 
			'userid' => 'userId', 
			'forumid' => 'forumId', 
			'threadid' => 'threadId', 
			'postid' => 'postId', 
			'pollid' => 'pollId', 
			'action' => 'action', 
			'type' => 'type', 
			'threadtitle' => 'threadTitle', 
			'attachmentid' => 'attachmentId', 
			'ipaddress' => 'ipAddress', 
			'id1' => 'id1', 
			'id2' => 'id2', 
			'id3' => 'id3', 
			'id4' => 'id4', 
			'id5' => 'id5', 
			'product' => 'product'
		];
    }
}