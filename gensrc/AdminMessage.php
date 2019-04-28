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

class AdminMessage implements Table {

    const table = 'adminmessage';
   
    public static function as(string $aliasName): AdminMessageAlias
    {
        return new AdminMessageAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::adminMessageId(),
			self::varName(),
			self::dismissable(),
			self::script(),
			self::action(),
			self::execUrl(),
			self::method(),
			self::dateLine(),
			self::status(),
			self::statusUserId()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : AdminMessageRecord
    {
        return new AdminMessageRecord();
    }
    
    public static function adminMessageId() : ColumnField
    {
        return new ColumnField('adminmessage', 'adminmessageid');
    }
    public static function varName() : ColumnField
    {
        return new ColumnField('adminmessage', 'varname');
    }
    public static function dismissable() : ColumnField
    {
        return new ColumnField('adminmessage', 'dismissable');
    }
    public static function script() : ColumnField
    {
        return new ColumnField('adminmessage', 'script');
    }
    public static function action() : ColumnField
    {
        return new ColumnField('adminmessage', 'action');
    }
    public static function execUrl() : ColumnField
    {
        return new ColumnField('adminmessage', 'execurl');
    }
    public static function method() : ColumnField
    {
        return new ColumnField('adminmessage', 'method');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('adminmessage', 'dateline');
    }
    public static function status() : ColumnField
    {
        return new ColumnField('adminmessage', 'status');
    }
    public static function statusUserId() : ColumnField
    {
        return new ColumnField('adminmessage', 'statususerid');
    }

    public function getTableName(): string
    {
        return 'adminmessage';
    }
    
    public function __listColumns() : array
    {
        return ['adminmessageid', 'varname', 'dismissable', 'script', 'action', 'execurl', 'method', 'dateline', 'status', 'statususerid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'adminmessageid' => 'integer', 
			'varname' => 'string', 
			'dismissable' => 'integer', 
			'script' => 'string', 
			'action' => 'string', 
			'execurl' => 'string', 
			'method' => 'string', 
			'dateline' => 'integer', 
			'status' => 'string', 
			'statususerid' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'adminmessageid' => 'adminMessageId', 
			'varname' => 'varName', 
			'dismissable' => 'dismissable', 
			'script' => 'script', 
			'action' => 'action', 
			'execurl' => 'execUrl', 
			'method' => 'method', 
			'dateline' => 'dateLine', 
			'status' => 'status', 
			'statususerid' => 'statusUserId'
		];
    }

}