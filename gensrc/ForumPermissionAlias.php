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

use POOQ\TableAlias;
use POOQ\ColumnField;
use POOQ\ColumnFieldList;
use businesslogic\forum\ForumPermissionRecord;

class ForumPermissionAlias extends TableAlias {
   
    public function forumPermissionOd() : ColumnField
    {
        return new ColumnField('forumpermission', 'forumpermissionid', $this->getAliasName());
    }
    public function forumId() : ColumnField
    {
        return new ColumnField('forumpermission', 'forumid', $this->getAliasName());
    }
    public function userGroupId() : ColumnField
    {
        return new ColumnField('forumpermission', 'usergroupid', $this->getAliasName());
    }
    public function forumPermissions() : ColumnField
    {
        return new ColumnField('forumpermission', 'forumpermissions', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'forumpermission';
    }
    
    public function __listColumns() : array
    {
        return ['forumpermissionid', 'forumid', 'usergroupid', 'forumpermissions'];
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->forumPermissionOd(),
			$this->forumId(),
			$this->userGroupId(),
			$this->forumPermissions()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : ForumPermissionRecord
    {
        return new ForumPermissionRecord();
    }
}