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

class PtProjectCategory implements Table {

    const table = 'pt_projectcategory';
   
    public static function as(string $aliasName): PtProjectCategoryAlias
    {
        return new PtProjectCategoryAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::projectCategoryId(),
			self::projectId(),
			self::title(),
			self::displayOrder()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PtProjectCategoryRecord
    {
        return new PtProjectCategoryRecord();
    }
    
    public static function projectCategoryId() : ColumnField
    {
        return new ColumnField('pt_projectcategory', 'projectcategoryid');
    }
    public static function projectId() : ColumnField
    {
        return new ColumnField('pt_projectcategory', 'projectid');
    }
    public static function title() : ColumnField
    {
        return new ColumnField('pt_projectcategory', 'title');
    }
    public static function displayOrder() : ColumnField
    {
        return new ColumnField('pt_projectcategory', 'displayorder');
    }

    public function getTableName(): string
    {
        return 'pt_projectcategory';
    }
    
    public function __listColumns() : array
    {
        return ['projectcategoryid', 'projectid', 'title', 'displayorder'];
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

}