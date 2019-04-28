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
        return new ColumnField('moderatorlog', 'moderatorlogid');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('moderatorlog', 'dateline');
    }
    public static function userId() : ColumnField
    {
        return new ColumnField('moderatorlog', 'userid');
    }
    public static function forumId() : ColumnField
    {
        return new ColumnField('moderatorlog', 'forumid');
    }
    public static function threadId() : ColumnField
    {
        return new ColumnField('moderatorlog', 'threadid');
    }
    public static function postId() : ColumnField
    {
        return new ColumnField('moderatorlog', 'postid');
    }
    public static function pollId() : ColumnField
    {
        return new ColumnField('moderatorlog', 'pollid');
    }
    public static function action() : ColumnField
    {
        return new ColumnField('moderatorlog', 'action');
    }
    public static function type() : ColumnField
    {
        return new ColumnField('moderatorlog', 'type');
    }
    public static function threadTitle() : ColumnField
    {
        return new ColumnField('moderatorlog', 'threadtitle');
    }
    public static function attachmentId() : ColumnField
    {
        return new ColumnField('moderatorlog', 'attachmentid');
    }
    public static function ipAddress() : ColumnField
    {
        return new ColumnField('moderatorlog', 'ipaddress');
    }
    public static function id1() : ColumnField
    {
        return new ColumnField('moderatorlog', 'id1');
    }
    public static function id2() : ColumnField
    {
        return new ColumnField('moderatorlog', 'id2');
    }
    public static function id3() : ColumnField
    {
        return new ColumnField('moderatorlog', 'id3');
    }
    public static function id4() : ColumnField
    {
        return new ColumnField('moderatorlog', 'id4');
    }
    public static function id5() : ColumnField
    {
        return new ColumnField('moderatorlog', 'id5');
    }
    public static function product() : ColumnField
    {
        return new ColumnField('moderatorlog', 'product');
    }

    public function getTableName(): string
    {
        return 'moderatorlog';
    }
    
    public function __listColumns() : array
    {
        return ['moderatorlogid', 'dateline', 'userid', 'forumid', 'threadid', 'postid', 'pollid', 'action', 'type', 'threadtitle', 'attachmentid', 'ipaddress', 'id1', 'id2', 'id3', 'id4', 'id5', 'product'];
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