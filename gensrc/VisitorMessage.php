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

class VisitorMessage implements Table {

    const table = 'visitormessage';
   
    public static function as(string $aliasName): VisitorMessageAlias
    {
        return new VisitorMessageAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::vmId(),
			self::userId(),
			self::postUserId(),
			self::postUserName(),
			self::dateLine(),
			self::state(),
			self::title(),
			self::pageText(),
			self::ipAddress(),
			self::allowSmilie(),
			self::reportThreadId(),
			self::messageRead()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : VisitorMessageRecord
    {
        return new VisitorMessageRecord();
    }
    
    public static function vmId() : ColumnField
    {
        return new ColumnField('vmId', 'VisitorMessage', 'visitormessage', 'vmid');
    }
    public static function userId() : ColumnField
    {
        return new ColumnField('userId', 'VisitorMessage', 'visitormessage', 'userid');
    }
    public static function postUserId() : ColumnField
    {
        return new ColumnField('postUserId', 'VisitorMessage', 'visitormessage', 'postuserid');
    }
    public static function postUserName() : ColumnField
    {
        return new ColumnField('postUserName', 'VisitorMessage', 'visitormessage', 'postusername');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'VisitorMessage', 'visitormessage', 'dateline');
    }
    public static function state() : ColumnField
    {
        return new ColumnField('state', 'VisitorMessage', 'visitormessage', 'state');
    }
    public static function title() : ColumnField
    {
        return new ColumnField('title', 'VisitorMessage', 'visitormessage', 'title');
    }
    public static function pageText() : ColumnField
    {
        return new ColumnField('pageText', 'VisitorMessage', 'visitormessage', 'pagetext');
    }
    public static function ipAddress() : ColumnField
    {
        return new ColumnField('ipAddress', 'VisitorMessage', 'visitormessage', 'ipaddress');
    }
    public static function allowSmilie() : ColumnField
    {
        return new ColumnField('allowSmilie', 'VisitorMessage', 'visitormessage', 'allowsmilie');
    }
    public static function reportThreadId() : ColumnField
    {
        return new ColumnField('reportThreadId', 'VisitorMessage', 'visitormessage', 'reportthreadid');
    }
    public static function messageRead() : ColumnField
    {
        return new ColumnField('messageRead', 'VisitorMessage', 'visitormessage', 'messageread');
    }

    public function getTableName(): string
    {
        return 'visitormessage';
    }
    
    public function __listColumns() : array
    {
        return ['vmid', 'userid', 'postuserid', 'postusername', 'dateline', 'state', 'title', 'pagetext', 'ipaddress', 'allowsmilie', 'reportthreadid', 'messageread'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['vmid'];
    }
    
    public function __listNullableColumns() : array
    {
        return ['pagetext'];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'vmid' => 'integer', 
			'userid' => 'integer', 
			'postuserid' => 'integer', 
			'postusername' => 'string', 
			'dateline' => 'integer', 
			'state' => 'string', 
			'title' => 'string', 
			'pagetext' => 'string', 
			'ipaddress' => 'integer', 
			'allowsmilie' => 'integer', 
			'reportthreadid' => 'integer', 
			'messageread' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'vmid' => 'vmId', 
			'userid' => 'userId', 
			'postuserid' => 'postUserId', 
			'postusername' => 'postUserName', 
			'dateline' => 'dateLine', 
			'state' => 'state', 
			'title' => 'title', 
			'pagetext' => 'pageText', 
			'ipaddress' => 'ipAddress', 
			'allowsmilie' => 'allowSmilie', 
			'reportthreadid' => 'reportThreadId', 
			'messageread' => 'messageRead'
		];
    }
}