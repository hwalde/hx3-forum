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

class AdminLog implements Table {

    const table = 'adminlog';
   
    public static function as(string $aliasName): AdminLogAlias
    {
        return new AdminLogAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::adminLogId(),
			self::userId(),
			self::dateLine(),
			self::script(),
			self::action(),
			self::extraInfo(),
			self::ipAddress()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : AdminLogRecord
    {
        return new AdminLogRecord();
    }
    
    public static function adminLogId() : ColumnField
    {
        return new ColumnField('adminLogId', 'AdminLog', 'adminlog', 'adminlogid');
    }
    public static function userId() : ColumnField
    {
        return new ColumnField('userId', 'AdminLog', 'adminlog', 'userid');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'AdminLog', 'adminlog', 'dateline');
    }
    public static function script() : ColumnField
    {
        return new ColumnField('script', 'AdminLog', 'adminlog', 'script');
    }
    public static function action() : ColumnField
    {
        return new ColumnField('action', 'AdminLog', 'adminlog', 'action');
    }
    public static function extraInfo() : ColumnField
    {
        return new ColumnField('extraInfo', 'AdminLog', 'adminlog', 'extrainfo');
    }
    public static function ipAddress() : ColumnField
    {
        return new ColumnField('ipAddress', 'AdminLog', 'adminlog', 'ipaddress');
    }

    public function getTableName(): string
    {
        return 'adminlog';
    }
    
    public function __listColumns() : array
    {
        return ['adminlogid', 'userid', 'dateline', 'script', 'action', 'extrainfo', 'ipaddress'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['adminlogid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'adminlogid' => 'integer', 
			'userid' => 'integer', 
			'dateline' => 'integer', 
			'script' => 'string', 
			'action' => 'string', 
			'extrainfo' => 'string', 
			'ipaddress' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'adminlogid' => 'adminLogId', 
			'userid' => 'userId', 
			'dateline' => 'dateLine', 
			'script' => 'script', 
			'action' => 'action', 
			'extrainfo' => 'extraInfo', 
			'ipaddress' => 'ipAddress'
		];
    }
}