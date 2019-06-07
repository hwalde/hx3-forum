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

class GroupMessage implements Table {

    const table = 'groupmessage';
   
    public static function as(string $aliasName): GroupMessageAlias
    {
        return new GroupMessageAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::gmId(),
			self::groupId(),
			self::postUserId(),
			self::postUserName(),
			self::dateLine(),
			self::state(),
			self::title(),
			self::pageText(),
			self::ipAddress(),
			self::allowSmilie(),
			self::reportThreadId()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : GroupMessageRecord
    {
        return new GroupMessageRecord();
    }
    
    public static function gmId() : ColumnField
    {
        return new ColumnField('gmId', 'GroupMessage', 'groupmessage', 'gmid');
    }
    public static function groupId() : ColumnField
    {
        return new ColumnField('groupId', 'GroupMessage', 'groupmessage', 'groupid');
    }
    public static function postUserId() : ColumnField
    {
        return new ColumnField('postUserId', 'GroupMessage', 'groupmessage', 'postuserid');
    }
    public static function postUserName() : ColumnField
    {
        return new ColumnField('postUserName', 'GroupMessage', 'groupmessage', 'postusername');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'GroupMessage', 'groupmessage', 'dateline');
    }
    public static function state() : ColumnField
    {
        return new ColumnField('state', 'GroupMessage', 'groupmessage', 'state');
    }
    public static function title() : ColumnField
    {
        return new ColumnField('title', 'GroupMessage', 'groupmessage', 'title');
    }
    public static function pageText() : ColumnField
    {
        return new ColumnField('pageText', 'GroupMessage', 'groupmessage', 'pagetext');
    }
    public static function ipAddress() : ColumnField
    {
        return new ColumnField('ipAddress', 'GroupMessage', 'groupmessage', 'ipaddress');
    }
    public static function allowSmilie() : ColumnField
    {
        return new ColumnField('allowSmilie', 'GroupMessage', 'groupmessage', 'allowsmilie');
    }
    public static function reportThreadId() : ColumnField
    {
        return new ColumnField('reportThreadId', 'GroupMessage', 'groupmessage', 'reportthreadid');
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
}