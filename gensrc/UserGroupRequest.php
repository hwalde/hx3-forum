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

class UserGroupRequest implements Table {

    const table = 'usergrouprequest';
   
    public static function as(string $aliasName): UserGroupRequestAlias
    {
        return new UserGroupRequestAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::usergrouprequestid(),
			self::userId(),
			self::userGroupId(),
			self::reason(),
			self::dateLine()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : UserGroupRequestRecord
    {
        return new UserGroupRequestRecord();
    }
    
    public static function usergrouprequestid() : ColumnField
    {
        return new ColumnField('usergrouprequest', 'usergrouprequestid');
    }
    public static function userId() : ColumnField
    {
        return new ColumnField('usergrouprequest', 'userid');
    }
    public static function userGroupId() : ColumnField
    {
        return new ColumnField('usergrouprequest', 'usergroupid');
    }
    public static function reason() : ColumnField
    {
        return new ColumnField('usergrouprequest', 'reason');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('usergrouprequest', 'dateline');
    }

    public function getTableName(): string
    {
        return 'usergrouprequest';
    }
    
    public function __listColumns() : array
    {
        return ['usergrouprequestid', 'userid', 'usergroupid', 'reason', 'dateline'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'usergrouprequestid' => 'integer', 
			'userid' => 'integer', 
			'usergroupid' => 'integer', 
			'reason' => 'string', 
			'dateline' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'usergrouprequestid' => 'usergrouprequestid', 
			'userid' => 'userId', 
			'usergroupid' => 'userGroupId', 
			'reason' => 'reason', 
			'dateline' => 'dateLine'
		];
    }

}