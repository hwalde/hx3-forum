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

class AttachmentPermission implements Table {

    const table = 'attachmentpermission';
   
    public static function as(string $aliasName): AttachmentPermissionAlias
    {
        return new AttachmentPermissionAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::attachmentPermissionId(),
			self::extension(),
			self::userGroupId(),
			self::size(),
			self::width(),
			self::height(),
			self::attachmentPermissions()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : AttachmentPermissionRecord
    {
        return new AttachmentPermissionRecord();
    }
    
    public static function attachmentPermissionId() : ColumnField
    {
        return new ColumnField('attachmentPermissionId', 'AttachmentPermission', 'attachmentpermission', 'attachmentpermissionid');
    }
    public static function extension() : ColumnField
    {
        return new ColumnField('extension', 'AttachmentPermission', 'attachmentpermission', 'extension');
    }
    public static function userGroupId() : ColumnField
    {
        return new ColumnField('userGroupId', 'AttachmentPermission', 'attachmentpermission', 'usergroupid');
    }
    public static function size() : ColumnField
    {
        return new ColumnField('size', 'AttachmentPermission', 'attachmentpermission', 'size');
    }
    public static function width() : ColumnField
    {
        return new ColumnField('width', 'AttachmentPermission', 'attachmentpermission', 'width');
    }
    public static function height() : ColumnField
    {
        return new ColumnField('height', 'AttachmentPermission', 'attachmentpermission', 'height');
    }
    public static function attachmentPermissions() : ColumnField
    {
        return new ColumnField('attachmentPermissions', 'AttachmentPermission', 'attachmentpermission', 'attachmentpermissions');
    }

    public function getTableName(): string
    {
        return 'attachmentpermission';
    }
    
    public function __listColumns() : array
    {
        return ['attachmentpermissionid', 'extension', 'usergroupid', 'size', 'width', 'height', 'attachmentpermissions'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['attachmentpermissionid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'attachmentpermissionid' => 'integer', 
			'extension' => 'string', 
			'usergroupid' => 'integer', 
			'size' => 'integer', 
			'width' => 'integer', 
			'height' => 'integer', 
			'attachmentpermissions' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'attachmentpermissionid' => 'attachmentPermissionId', 
			'extension' => 'extension', 
			'usergroupid' => 'userGroupId', 
			'size' => 'size', 
			'width' => 'width', 
			'height' => 'height', 
			'attachmentpermissions' => 'attachmentPermissions'
		];
    }
}