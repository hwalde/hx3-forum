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

class ProfileFieldCategory implements Table {

    const table = 'profilefieldcategory';
   
    public static function as(string $aliasName): ProfileFieldCategoryAlias
    {
        return new ProfileFieldCategoryAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::profileFieldCategoryId(),
			self::displayOrder(),
			self::location()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : ProfileFieldCategoryRecord
    {
        return new ProfileFieldCategoryRecord();
    }
    
    public static function profileFieldCategoryId() : ColumnField
    {
        return new ColumnField('profilefieldcategory', 'profilefieldcategoryid');
    }
    public static function displayOrder() : ColumnField
    {
        return new ColumnField('profilefieldcategory', 'displayorder');
    }
    public static function location() : ColumnField
    {
        return new ColumnField('profilefieldcategory', 'location');
    }

    public function getTableName(): string
    {
        return 'profilefieldcategory';
    }
    
    public function __listColumns() : array
    {
        return ['profilefieldcategoryid', 'displayorder', 'location'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'profilefieldcategoryid' => 'integer', 
			'displayorder' => 'integer', 
			'location' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'profilefieldcategoryid' => 'profileFieldCategoryId', 
			'displayorder' => 'displayOrder', 
			'location' => 'location'
		];
    }

}