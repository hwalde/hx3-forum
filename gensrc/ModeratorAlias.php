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

class ModeratorAlias extends TableAlias {
   
    public function moderatorId() : ColumnField
    {
        return new ColumnField('moderatorId', 'Moderator', 'moderator', 'moderatorid', $this->getAliasName());
    }
    public function userId() : ColumnField
    {
        return new ColumnField('userId', 'Moderator', 'moderator', 'userid', $this->getAliasName());
    }
    public function forumId() : ColumnField
    {
        return new ColumnField('forumId', 'Moderator', 'moderator', 'forumid', $this->getAliasName());
    }
    public function permissions() : ColumnField
    {
        return new ColumnField('permissions', 'Moderator', 'moderator', 'permissions', $this->getAliasName());
    }
    public function importModeratorId() : ColumnField
    {
        return new ColumnField('importModeratorId', 'Moderator', 'moderator', 'importmoderatorid', $this->getAliasName());
    }
    public function moderatorUserGroupId() : ColumnField
    {
        return new ColumnField('moderatorUserGroupId', 'Moderator', 'moderator', 'moderatorusergroupid', $this->getAliasName());
    }
    public function modUserGroupId() : ColumnField
    {
        return new ColumnField('modUserGroupId', 'Moderator', 'moderator', 'modusergroupid', $this->getAliasName());
    }
    public function permissions2() : ColumnField
    {
        return new ColumnField('permissions2', 'Moderator', 'moderator', 'permissions2', $this->getAliasName());
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->moderatorId(),
			$this->userId(),
			$this->forumId(),
			$this->permissions(),
			$this->importModeratorId(),
			$this->moderatorUserGroupId(),
			$this->modUserGroupId(),
			$this->permissions2()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : ModeratorRecord
    {
        return new ModeratorRecord();
    }
}