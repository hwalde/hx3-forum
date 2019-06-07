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

class UserGroupLeaderAlias extends TableAlias {
   
    public function usergroupleaderid() : ColumnField
    {
        return new ColumnField('usergroupleaderid', 'UserGroupLeader', 'usergroupleader', 'usergroupleaderid', $this->getAliasName());
    }
    public function userId() : ColumnField
    {
        return new ColumnField('userId', 'UserGroupLeader', 'usergroupleader', 'userid', $this->getAliasName());
    }
    public function userGroupId() : ColumnField
    {
        return new ColumnField('userGroupId', 'UserGroupLeader', 'usergroupleader', 'usergroupid', $this->getAliasName());
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->usergroupleaderid(),
			$this->userId(),
			$this->userGroupId()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : UserGroupLeaderRecord
    {
        return new UserGroupLeaderRecord();
    }
}