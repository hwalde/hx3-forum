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

class Moderator implements Table {

    const table = 'moderator';
   
    public static function as(string $aliasName): ModeratorAlias
    {
        return new ModeratorAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::moderatorId(),
			self::userId(),
			self::forumId(),
			self::permissions(),
			self::importModeratorId(),
			self::moderatorUserGroupId(),
			self::modUserGroupId(),
			self::permissions2()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : ModeratorRecord
    {
        return new ModeratorRecord();
    }
    
    public static function moderatorId() : ColumnField
    {
        return new ColumnField('moderatorId', 'Moderator', 'moderator', 'moderatorid');
    }
    public static function userId() : ColumnField
    {
        return new ColumnField('userId', 'Moderator', 'moderator', 'userid');
    }
    public static function forumId() : ColumnField
    {
        return new ColumnField('forumId', 'Moderator', 'moderator', 'forumid');
    }
    public static function permissions() : ColumnField
    {
        return new ColumnField('permissions', 'Moderator', 'moderator', 'permissions');
    }
    public static function importModeratorId() : ColumnField
    {
        return new ColumnField('importModeratorId', 'Moderator', 'moderator', 'importmoderatorid');
    }
    public static function moderatorUserGroupId() : ColumnField
    {
        return new ColumnField('moderatorUserGroupId', 'Moderator', 'moderator', 'moderatorusergroupid');
    }
    public static function modUserGroupId() : ColumnField
    {
        return new ColumnField('modUserGroupId', 'Moderator', 'moderator', 'modusergroupid');
    }
    public static function permissions2() : ColumnField
    {
        return new ColumnField('permissions2', 'Moderator', 'moderator', 'permissions2');
    }

    public function getTableName(): string
    {
        return 'moderator';
    }
    
    public function __listColumns() : array
    {
        return ['moderatorid', 'userid', 'forumid', 'permissions', 'importmoderatorid', 'moderatorusergroupid', 'modusergroupid', 'permissions2'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['moderatorid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'moderatorid' => 'integer', 
			'userid' => 'integer', 
			'forumid' => 'integer', 
			'permissions' => 'integer', 
			'importmoderatorid' => 'integer', 
			'moderatorusergroupid' => 'integer', 
			'modusergroupid' => 'integer', 
			'permissions2' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'moderatorid' => 'moderatorId', 
			'userid' => 'userId', 
			'forumid' => 'forumId', 
			'permissions' => 'permissions', 
			'importmoderatorid' => 'importModeratorId', 
			'moderatorusergroupid' => 'moderatorUserGroupId', 
			'modusergroupid' => 'modUserGroupId', 
			'permissions2' => 'permissions2'
		];
    }
}