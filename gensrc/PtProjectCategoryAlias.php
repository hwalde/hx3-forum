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

class PtProjectCategoryAlias extends TableAlias {
   
    public function projectCategoryId() : ColumnField
    {
        return new ColumnField('projectCategoryId', 'PtProjectCategory', 'pt_projectcategory', 'projectcategoryid', $this->getAliasName());
    }
    public function projectId() : ColumnField
    {
        return new ColumnField('projectId', 'PtProjectCategory', 'pt_projectcategory', 'projectid', $this->getAliasName());
    }
    public function title() : ColumnField
    {
        return new ColumnField('title', 'PtProjectCategory', 'pt_projectcategory', 'title', $this->getAliasName());
    }
    public function displayOrder() : ColumnField
    {
        return new ColumnField('displayOrder', 'PtProjectCategory', 'pt_projectcategory', 'displayorder', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'pt_projectcategory';
    }
    
    public function __listColumns() : array
    {
        return ['projectcategoryid', 'projectid', 'title', 'displayorder'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['projectcategoryid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'projectcategoryid' => 'integer', 
			'projectid' => 'integer', 
			'title' => 'string', 
			'displayorder' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'projectcategoryid' => 'projectCategoryId', 
			'projectid' => 'projectId', 
			'title' => 'title', 
			'displayorder' => 'displayOrder'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->projectCategoryId(),
			$this->projectId(),
			$this->title(),
			$this->displayOrder()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PtProjectCategoryRecord
    {
        return new PtProjectCategoryRecord();
    }
}