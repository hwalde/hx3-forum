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

class UserGroupRequestAlias extends TableAlias {
   
    public function usergrouprequestid() : ColumnField
    {
        return new ColumnField('usergrouprequest', 'usergrouprequestid', $this->getAliasName());
    }
    public function userId() : ColumnField
    {
        return new ColumnField('usergrouprequest', 'userid', $this->getAliasName());
    }
    public function userGroupId() : ColumnField
    {
        return new ColumnField('usergrouprequest', 'usergroupid', $this->getAliasName());
    }
    public function reason() : ColumnField
    {
        return new ColumnField('usergrouprequest', 'reason', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('usergrouprequest', 'dateline', $this->getAliasName());
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->usergrouprequestid(),
			$this->userId(),
			$this->userGroupId(),
			$this->reason(),
			$this->dateLine()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : UserGroupRequestRecord
    {
        return new UserGroupRequestRecord();
    }
}