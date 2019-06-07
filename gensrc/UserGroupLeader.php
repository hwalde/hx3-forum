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

class UserGroupLeader implements Table {

    const table = 'usergroupleader';
   
    public static function as(string $aliasName): UserGroupLeaderAlias
    {
        return new UserGroupLeaderAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::usergroupleaderid(),
			self::userId(),
			self::userGroupId()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : UserGroupLeaderRecord
    {
        return new UserGroupLeaderRecord();
    }
    
    public static function usergroupleaderid() : ColumnField
    {
        return new ColumnField('usergroupleaderid', 'UserGroupLeader', 'usergroupleader', 'usergroupleaderid');
    }
    public static function userId() : ColumnField
    {
        return new ColumnField('userId', 'UserGroupLeader', 'usergroupleader', 'userid');
    }
    public static function userGroupId() : ColumnField
    {
        return new ColumnField('userGroupId', 'UserGroupLeader', 'usergroupleader', 'usergroupid');
    }

    public function getTableName(): string
    {
        return 'usergroupleader';
    }
    
    public function __listColumns() : array
    {
        return ['usergroupleaderid', 'userid', 'usergroupid'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['usergroupleaderid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'usergroupleaderid' => 'integer', 
			'userid' => 'integer', 
			'usergroupid' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'usergroupleaderid' => 'usergroupleaderid', 
			'userid' => 'userId', 
			'usergroupid' => 'userGroupId'
		];
    }
}