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

class AttachmentPermissionAlias extends TableAlias {
   
    public function attachmentPermissionId() : ColumnField
    {
        return new ColumnField('attachmentPermissionId', 'AttachmentPermission', 'attachmentpermission', 'attachmentpermissionid', $this->getAliasName());
    }
    public function extension() : ColumnField
    {
        return new ColumnField('extension', 'AttachmentPermission', 'attachmentpermission', 'extension', $this->getAliasName());
    }
    public function userGroupId() : ColumnField
    {
        return new ColumnField('userGroupId', 'AttachmentPermission', 'attachmentpermission', 'usergroupid', $this->getAliasName());
    }
    public function size() : ColumnField
    {
        return new ColumnField('size', 'AttachmentPermission', 'attachmentpermission', 'size', $this->getAliasName());
    }
    public function width() : ColumnField
    {
        return new ColumnField('width', 'AttachmentPermission', 'attachmentpermission', 'width', $this->getAliasName());
    }
    public function height() : ColumnField
    {
        return new ColumnField('height', 'AttachmentPermission', 'attachmentpermission', 'height', $this->getAliasName());
    }
    public function attachmentPermissions() : ColumnField
    {
        return new ColumnField('attachmentPermissions', 'AttachmentPermission', 'attachmentpermission', 'attachmentpermissions', $this->getAliasName());
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->attachmentPermissionId(),
			$this->extension(),
			$this->userGroupId(),
			$this->size(),
			$this->width(),
			$this->height(),
			$this->attachmentPermissions()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : AttachmentPermissionRecord
    {
        return new AttachmentPermissionRecord();
    }
}