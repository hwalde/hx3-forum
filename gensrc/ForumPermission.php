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
use businesslogic\forum\ForumPermissionRecord;

class ForumPermission implements Table {

    const table = 'forumpermission';
   
    public static function as(string $aliasName): ForumPermissionAlias
    {
        return new ForumPermissionAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::forumPermissionOd(),
			self::forumId(),
			self::userGroupId(),
			self::forumPermissions()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : ForumPermissionRecord
    {
        return new ForumPermissionRecord();
    }
    
    public static function forumPermissionOd() : ColumnField
    {
        return new ColumnField('forumPermissionOd', 'ForumPermission', 'forumpermission', 'forumpermissionid');
    }
    public static function forumId() : ColumnField
    {
        return new ColumnField('forumId', 'ForumPermission', 'forumpermission', 'forumid');
    }
    public static function userGroupId() : ColumnField
    {
        return new ColumnField('userGroupId', 'ForumPermission', 'forumpermission', 'usergroupid');
    }
    public static function forumPermissions() : ColumnField
    {
        return new ColumnField('forumPermissions', 'ForumPermission', 'forumpermission', 'forumpermissions');
    }

    public function getTableName(): string
    {
        return 'forumpermission';
    }
    
    public function __listColumns() : array
    {
        return ['forumpermissionid', 'forumid', 'usergroupid', 'forumpermissions'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['forumpermissionid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'forumpermissionid' => 'integer', 
			'forumid' => 'integer', 
			'usergroupid' => 'integer', 
			'forumpermissions' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'forumpermissionid' => 'forumPermissionOd', 
			'forumid' => 'forumId', 
			'usergroupid' => 'userGroupId', 
			'forumpermissions' => 'forumPermissions'
		];
    }
}