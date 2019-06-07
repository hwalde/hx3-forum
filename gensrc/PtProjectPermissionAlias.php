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

class PtProjectPermissionAlias extends TableAlias {
   
    public function userGroupId() : ColumnField
    {
        return new ColumnField('userGroupId', 'PtProjectPermission', 'pt_projectpermission', 'usergroupid', $this->getAliasName());
    }
    public function projectId() : ColumnField
    {
        return new ColumnField('projectId', 'PtProjectPermission', 'pt_projectpermission', 'projectid', $this->getAliasName());
    }
    public function issueTypeId() : ColumnField
    {
        return new ColumnField('issueTypeId', 'PtProjectPermission', 'pt_projectpermission', 'issuetypeid', $this->getAliasName());
    }
    public function generalPermissions() : ColumnField
    {
        return new ColumnField('generalPermissions', 'PtProjectPermission', 'pt_projectpermission', 'generalpermissions', $this->getAliasName());
    }
    public function postPermissions() : ColumnField
    {
        return new ColumnField('postPermissions', 'PtProjectPermission', 'pt_projectpermission', 'postpermissions', $this->getAliasName());
    }
    public function attachPermissions() : ColumnField
    {
        return new ColumnField('attachPermissions', 'PtProjectPermission', 'pt_projectpermission', 'attachpermissions', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'pt_projectpermission';
    }
    
    public function __listColumns() : array
    {
        return ['usergroupid', 'projectid', 'issuetypeid', 'generalpermissions', 'postpermissions', 'attachpermissions'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['usergroupid', 'projectid', 'issuetypeid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'usergroupid' => 'integer', 
			'projectid' => 'integer', 
			'issuetypeid' => 'string', 
			'generalpermissions' => 'integer', 
			'postpermissions' => 'integer', 
			'attachpermissions' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'usergroupid' => 'userGroupId', 
			'projectid' => 'projectId', 
			'issuetypeid' => 'issueTypeId', 
			'generalpermissions' => 'generalPermissions', 
			'postpermissions' => 'postPermissions', 
			'attachpermissions' => 'attachPermissions'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->userGroupId(),
			$this->projectId(),
			$this->issueTypeId(),
			$this->generalPermissions(),
			$this->postPermissions(),
			$this->attachPermissions()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PtProjectPermissionRecord
    {
        return new PtProjectPermissionRecord();
    }
}