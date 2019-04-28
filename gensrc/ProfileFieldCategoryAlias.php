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

class ProfileFieldCategoryAlias extends TableAlias {
   
    public function profileFieldCategoryId() : ColumnField
    {
        return new ColumnField('profilefieldcategory', 'profilefieldcategoryid', $this->getAliasName());
    }
    public function displayOrder() : ColumnField
    {
        return new ColumnField('profilefieldcategory', 'displayorder', $this->getAliasName());
    }
    public function location() : ColumnField
    {
        return new ColumnField('profilefieldcategory', 'location', $this->getAliasName());
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->profileFieldCategoryId(),
			$this->displayOrder(),
			$this->location()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : ProfileFieldCategoryRecord
    {
        return new ProfileFieldCategoryRecord();
    }
}