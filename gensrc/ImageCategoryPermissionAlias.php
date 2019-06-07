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

class ImageCategoryPermissionAlias extends TableAlias {
   
    public function imageCategoryId() : ColumnField
    {
        return new ColumnField('imageCategoryId', 'ImageCategoryPermission', 'imagecategorypermission', 'imagecategoryid', $this->getAliasName());
    }
    public function userGroupId() : ColumnField
    {
        return new ColumnField('userGroupId', 'ImageCategoryPermission', 'imagecategorypermission', 'usergroupid', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'imagecategorypermission';
    }
    
    public function __listColumns() : array
    {
        return ['imagecategoryid', 'usergroupid'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return [];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'imagecategoryid' => 'integer', 
			'usergroupid' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'imagecategoryid' => 'imageCategoryId', 
			'usergroupid' => 'userGroupId'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->imageCategoryId(),
			$this->userGroupId()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : ImageCategoryPermissionRecord
    {
        return new ImageCategoryPermissionRecord();
    }
}