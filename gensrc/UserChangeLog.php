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

class UserChangeLog implements Table {

    const table = 'userchangelog';
   
    public static function as(string $aliasName): UserChangeLogAlias
    {
        return new UserChangeLogAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::changeId(),
			self::userId(),
			self::fieldName(),
			self::newValue(),
			self::oldValue(),
			self::adminId(),
			self::changeTime(),
			self::changeUnIq()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : UserChangeLogRecord
    {
        return new UserChangeLogRecord();
    }
    
    public static function changeId() : ColumnField
    {
        return new ColumnField('changeId', 'UserChangeLog', 'userchangelog', 'changeid');
    }
    public static function userId() : ColumnField
    {
        return new ColumnField('userId', 'UserChangeLog', 'userchangelog', 'userid');
    }
    public static function fieldName() : ColumnField
    {
        return new ColumnField('fieldName', 'UserChangeLog', 'userchangelog', 'fieldname');
    }
    public static function newValue() : ColumnField
    {
        return new ColumnField('newValue', 'UserChangeLog', 'userchangelog', 'newvalue');
    }
    public static function oldValue() : ColumnField
    {
        return new ColumnField('oldValue', 'UserChangeLog', 'userchangelog', 'oldvalue');
    }
    public static function adminId() : ColumnField
    {
        return new ColumnField('adminId', 'UserChangeLog', 'userchangelog', 'adminid');
    }
    public static function changeTime() : ColumnField
    {
        return new ColumnField('changeTime', 'UserChangeLog', 'userchangelog', 'change_time');
    }
    public static function changeUnIq() : ColumnField
    {
        return new ColumnField('changeUnIq', 'UserChangeLog', 'userchangelog', 'change_uniq');
    }

    public function getTableName(): string
    {
        return 'userchangelog';
    }
    
    public function __listColumns() : array
    {
        return ['changeid', 'userid', 'fieldname', 'newvalue', 'oldvalue', 'adminid', 'change_time', 'change_uniq'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['changeid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'changeid' => 'integer', 
			'userid' => 'integer', 
			'fieldname' => 'string', 
			'newvalue' => 'string', 
			'oldvalue' => 'string', 
			'adminid' => 'integer', 
			'change_time' => 'integer', 
			'change_uniq' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'changeid' => 'changeId', 
			'userid' => 'userId', 
			'fieldname' => 'fieldName', 
			'newvalue' => 'newValue', 
			'oldvalue' => 'oldValue', 
			'adminid' => 'adminId', 
			'change_time' => 'changeTime', 
			'change_uniq' => 'changeUnIq'
		];
    }
}