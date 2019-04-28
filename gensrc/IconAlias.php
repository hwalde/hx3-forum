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

class IconAlias extends TableAlias {
   
    public function iconId() : ColumnField
    {
        return new ColumnField('icon', 'iconid', $this->getAliasName());
    }
    public function title() : ColumnField
    {
        return new ColumnField('icon', 'title', $this->getAliasName());
    }
    public function iconPath() : ColumnField
    {
        return new ColumnField('icon', 'iconpath', $this->getAliasName());
    }
    public function imageCategoryId() : ColumnField
    {
        return new ColumnField('icon', 'imagecategoryid', $this->getAliasName());
    }
    public function displayOrder() : ColumnField
    {
        return new ColumnField('icon', 'displayorder', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'icon';
    }
    
    public function __listColumns() : array
    {
        return ['iconid', 'title', 'iconpath', 'imagecategoryid', 'displayorder'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'iconid' => 'integer', 
			'title' => 'string', 
			'iconpath' => 'string', 
			'imagecategoryid' => 'integer', 
			'displayorder' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'iconid' => 'iconId', 
			'title' => 'title', 
			'iconpath' => 'iconPath', 
			'imagecategoryid' => 'imageCategoryId', 
			'displayorder' => 'displayOrder'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->iconId(),
			$this->title(),
			$this->iconPath(),
			$this->imageCategoryId(),
			$this->displayOrder()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : IconRecord
    {
        return new IconRecord();
    }
}