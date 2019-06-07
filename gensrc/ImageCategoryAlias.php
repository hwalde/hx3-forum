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

class ImageCategoryAlias extends TableAlias {
   
    public function imageCategoryId() : ColumnField
    {
        return new ColumnField('imageCategoryId', 'ImageCategory', 'imagecategory', 'imagecategoryid', $this->getAliasName());
    }
    public function title() : ColumnField
    {
        return new ColumnField('title', 'ImageCategory', 'imagecategory', 'title', $this->getAliasName());
    }
    public function imageType() : ColumnField
    {
        return new ColumnField('imageType', 'ImageCategory', 'imagecategory', 'imagetype', $this->getAliasName());
    }
    public function displayOrder() : ColumnField
    {
        return new ColumnField('displayOrder', 'ImageCategory', 'imagecategory', 'displayorder', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'imagecategory';
    }
    
    public function __listColumns() : array
    {
        return ['imagecategoryid', 'title', 'imagetype', 'displayorder'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['imagecategoryid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'imagecategoryid' => 'integer', 
			'title' => 'string', 
			'imagetype' => 'integer', 
			'displayorder' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'imagecategoryid' => 'imageCategoryId', 
			'title' => 'title', 
			'imagetype' => 'imageType', 
			'displayorder' => 'displayOrder'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->imageCategoryId(),
			$this->title(),
			$this->imageType(),
			$this->displayOrder()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : ImageCategoryRecord
    {
        return new ImageCategoryRecord();
    }
}