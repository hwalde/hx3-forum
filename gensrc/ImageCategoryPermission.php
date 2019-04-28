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

class ImageCategoryPermission implements Table {

    const table = 'imagecategorypermission';
   
    public static function as(string $aliasName): ImageCategoryPermissionAlias
    {
        return new ImageCategoryPermissionAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::imageCategoryId(),
			self::userGroupId()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : ImageCategoryPermissionRecord
    {
        return new ImageCategoryPermissionRecord();
    }
    
    public static function imageCategoryId() : ColumnField
    {
        return new ColumnField('imagecategorypermission', 'imagecategoryid');
    }
    public static function userGroupId() : ColumnField
    {
        return new ColumnField('imagecategorypermission', 'usergroupid');
    }

    public function getTableName(): string
    {
        return 'imagecategorypermission';
    }
    
    public function __listColumns() : array
    {
        return ['imagecategoryid', 'usergroupid'];
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

}