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

class GroupMessageAlias extends TableAlias {
   
    public function gmId() : ColumnField
    {
        return new ColumnField('gmId', 'GroupMessage', 'groupmessage', 'gmid', $this->getAliasName());
    }
    public function groupId() : ColumnField
    {
        return new ColumnField('groupId', 'GroupMessage', 'groupmessage', 'groupid', $this->getAliasName());
    }
    public function postUserId() : ColumnField
    {
        return new ColumnField('postUserId', 'GroupMessage', 'groupmessage', 'postuserid', $this->getAliasName());
    }
    public function postUserName() : ColumnField
    {
        return new ColumnField('postUserName', 'GroupMessage', 'groupmessage', 'postusername', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'GroupMessage', 'groupmessage', 'dateline', $this->getAliasName());
    }
    public function state() : ColumnField
    {
        return new ColumnField('state', 'GroupMessage', 'groupmessage', 'state', $this->getAliasName());
    }
    public function title() : ColumnField
    {
        return new ColumnField('title', 'GroupMessage', 'groupmessage', 'title', $this->getAliasName());
    }
    public function pageText() : ColumnField
    {
        return new ColumnField('pageText', 'GroupMessage', 'groupmessage', 'pagetext', $this->getAliasName());
    }
    public function ipAddress() : ColumnField
    {
        return new ColumnField('ipAddress', 'GroupMessage', 'groupmessage', 'ipaddress', $this->getAliasName());
    }
    public function allowSmilie() : ColumnField
    {
        return new ColumnField('allowSmilie', 'GroupMessage', 'groupmessage', 'allowsmilie', $this->getAliasName());
    }
    public function reportThreadId() : ColumnField
    {
        return new ColumnField('reportThreadId', 'GroupMessage', 'groupmessage', 'reportthreadid', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'groupmessage';
    }
    
    public function __listColumns() : array
    {
        return ['gmid', 'groupid', 'postuserid', 'postusername', 'dateline', 'state', 'title', 'pagetext', 'ipaddress', 'allowsmilie', 'reportthreadid'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['gmid'];
    }
    
    public function __listNullableColumns() : array
    {
        return ['pagetext'];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'gmid' => 'integer', 
			'groupid' => 'integer', 
			'postuserid' => 'integer', 
			'postusername' => 'string', 
			'dateline' => 'integer', 
			'state' => 'string', 
			'title' => 'string', 
			'pagetext' => 'string', 
			'ipaddress' => 'integer', 
			'allowsmilie' => 'integer', 
			'reportthreadid' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'gmid' => 'gmId', 
			'groupid' => 'groupId', 
			'postuserid' => 'postUserId', 
			'postusername' => 'postUserName', 
			'dateline' => 'dateLine', 
			'state' => 'state', 
			'title' => 'title', 
			'pagetext' => 'pageText', 
			'ipaddress' => 'ipAddress', 
			'allowsmilie' => 'allowSmilie', 
			'reportthreadid' => 'reportThreadId'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->gmId(),
			$this->groupId(),
			$this->postUserId(),
			$this->postUserName(),
			$this->dateLine(),
			$this->state(),
			$this->title(),
			$this->pageText(),
			$this->ipAddress(),
			$this->allowSmilie(),
			$this->reportThreadId()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : GroupMessageRecord
    {
        return new GroupMessageRecord();
    }
}