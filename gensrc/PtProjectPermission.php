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

class PtProjectPermission implements Table {

    const table = 'pt_projectpermission';
   
    public static function as(string $aliasName): PtProjectPermissionAlias
    {
        return new PtProjectPermissionAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::userGroupId(),
			self::projectId(),
			self::issueTypeId(),
			self::generalPermissions(),
			self::postPermissions(),
			self::attachPermissions()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PtProjectPermissionRecord
    {
        return new PtProjectPermissionRecord();
    }
    
    public static function userGroupId() : ColumnField
    {
        return new ColumnField('pt_projectpermission', 'usergroupid');
    }
    public static function projectId() : ColumnField
    {
        return new ColumnField('pt_projectpermission', 'projectid');
    }
    public static function issueTypeId() : ColumnField
    {
        return new ColumnField('pt_projectpermission', 'issuetypeid');
    }
    public static function generalPermissions() : ColumnField
    {
        return new ColumnField('pt_projectpermission', 'generalpermissions');
    }
    public static function postPermissions() : ColumnField
    {
        return new ColumnField('pt_projectpermission', 'postpermissions');
    }
    public static function attachPermissions() : ColumnField
    {
        return new ColumnField('pt_projectpermission', 'attachpermissions');
    }

    public function getTableName(): string
    {
        return 'pt_projectpermission';
    }
    
    public function __listColumns() : array
    {
        return ['usergroupid', 'projectid', 'issuetypeid', 'generalpermissions', 'postpermissions', 'attachpermissions'];
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

}