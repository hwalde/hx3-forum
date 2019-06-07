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

class ModeratorLogAlias extends TableAlias {
   
    public function moderatorLogId() : ColumnField
    {
        return new ColumnField('moderatorLogId', 'ModeratorLog', 'moderatorlog', 'moderatorlogid', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'ModeratorLog', 'moderatorlog', 'dateline', $this->getAliasName());
    }
    public function userId() : ColumnField
    {
        return new ColumnField('userId', 'ModeratorLog', 'moderatorlog', 'userid', $this->getAliasName());
    }
    public function forumId() : ColumnField
    {
        return new ColumnField('forumId', 'ModeratorLog', 'moderatorlog', 'forumid', $this->getAliasName());
    }
    public function threadId() : ColumnField
    {
        return new ColumnField('threadId', 'ModeratorLog', 'moderatorlog', 'threadid', $this->getAliasName());
    }
    public function postId() : ColumnField
    {
        return new ColumnField('postId', 'ModeratorLog', 'moderatorlog', 'postid', $this->getAliasName());
    }
    public function pollId() : ColumnField
    {
        return new ColumnField('pollId', 'ModeratorLog', 'moderatorlog', 'pollid', $this->getAliasName());
    }
    public function action() : ColumnField
    {
        return new ColumnField('action', 'ModeratorLog', 'moderatorlog', 'action', $this->getAliasName());
    }
    public function type() : ColumnField
    {
        return new ColumnField('type', 'ModeratorLog', 'moderatorlog', 'type', $this->getAliasName());
    }
    public function threadTitle() : ColumnField
    {
        return new ColumnField('threadTitle', 'ModeratorLog', 'moderatorlog', 'threadtitle', $this->getAliasName());
    }
    public function attachmentId() : ColumnField
    {
        return new ColumnField('attachmentId', 'ModeratorLog', 'moderatorlog', 'attachmentid', $this->getAliasName());
    }
    public function ipAddress() : ColumnField
    {
        return new ColumnField('ipAddress', 'ModeratorLog', 'moderatorlog', 'ipaddress', $this->getAliasName());
    }
    public function id1() : ColumnField
    {
        return new ColumnField('id1', 'ModeratorLog', 'moderatorlog', 'id1', $this->getAliasName());
    }
    public function id2() : ColumnField
    {
        return new ColumnField('id2', 'ModeratorLog', 'moderatorlog', 'id2', $this->getAliasName());
    }
    public function id3() : ColumnField
    {
        return new ColumnField('id3', 'ModeratorLog', 'moderatorlog', 'id3', $this->getAliasName());
    }
    public function id4() : ColumnField
    {
        return new ColumnField('id4', 'ModeratorLog', 'moderatorlog', 'id4', $this->getAliasName());
    }
    public function id5() : ColumnField
    {
        return new ColumnField('id5', 'ModeratorLog', 'moderatorlog', 'id5', $this->getAliasName());
    }
    public function product() : ColumnField
    {
        return new ColumnField('product', 'ModeratorLog', 'moderatorlog', 'product', $this->getAliasName());
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->moderatorLogId(),
			$this->dateLine(),
			$this->userId(),
			$this->forumId(),
			$this->threadId(),
			$this->postId(),
			$this->pollId(),
			$this->action(),
			$this->type(),
			$this->threadTitle(),
			$this->attachmentId(),
			$this->ipAddress(),
			$this->id1(),
			$this->id2(),
			$this->id3(),
			$this->id4(),
			$this->id5(),
			$this->product()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : ModeratorLogRecord
    {
        return new ModeratorLogRecord();
    }
}