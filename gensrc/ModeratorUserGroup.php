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

class ModeratorUserGroup implements Table {

    const table = 'moderatorusergroup';
   
    public static function as(string $aliasName): ModeratorUserGroupAlias
    {
        return new ModeratorUserGroupAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::moderatorUserGroupId(),
			self::userGroupId(),
			self::forumId(),
			self::permissions()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : ModeratorUserGroupRecord
    {
        return new ModeratorUserGroupRecord();
    }
    
    public static function moderatorUserGroupId() : ColumnField
    {
        return new ColumnField('moderatorUserGroupId', 'ModeratorUserGroup', 'moderatorusergroup', 'moderatorusergroupid');
    }
    public static function userGroupId() : ColumnField
    {
        return new ColumnField('userGroupId', 'ModeratorUserGroup', 'moderatorusergroup', 'usergroupid');
    }
    public static function forumId() : ColumnField
    {
        return new ColumnField('forumId', 'ModeratorUserGroup', 'moderatorusergroup', 'forumid');
    }
    public static function permissions() : ColumnField
    {
        return new ColumnField('permissions', 'ModeratorUserGroup', 'moderatorusergroup', 'permissions');
    }

    public function getTableName(): string
    {
        return 'moderatorusergroup';
    }
    
    public function __listColumns() : array
    {
        return ['moderatorusergroupid', 'usergroupid', 'forumid', 'permissions'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['moderatorusergroupid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'moderatorusergroupid' => 'integer', 
			'usergroupid' => 'integer', 
			'forumid' => 'integer', 
			'permissions' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'moderatorusergroupid' => 'moderatorUserGroupId', 
			'usergroupid' => 'userGroupId', 
			'forumid' => 'forumId', 
			'permissions' => 'permissions'
		];
    }
}