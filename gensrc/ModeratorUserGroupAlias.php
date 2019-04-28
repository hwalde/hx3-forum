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

class ModeratorUserGroupAlias extends TableAlias {
   
    public function moderatorUserGroupId() : ColumnField
    {
        return new ColumnField('moderatorusergroup', 'moderatorusergroupid', $this->getAliasName());
    }
    public function userGroupId() : ColumnField
    {
        return new ColumnField('moderatorusergroup', 'usergroupid', $this->getAliasName());
    }
    public function forumId() : ColumnField
    {
        return new ColumnField('moderatorusergroup', 'forumid', $this->getAliasName());
    }
    public function permissions() : ColumnField
    {
        return new ColumnField('moderatorusergroup', 'permissions', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'moderatorusergroup';
    }
    
    public function __listColumns() : array
    {
        return ['moderatorusergroupid', 'usergroupid', 'forumid', 'permissions'];
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->moderatorUserGroupId(),
			$this->userGroupId(),
			$this->forumId(),
			$this->permissions()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : ModeratorUserGroupRecord
    {
        return new ModeratorUserGroupRecord();
    }
}