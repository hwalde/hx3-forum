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

class Icon implements Table {

    const table = 'icon';
   
    public static function as(string $aliasName): IconAlias
    {
        return new IconAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::iconId(),
			self::title(),
			self::iconPath(),
			self::imageCategoryId(),
			self::displayOrder()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : IconRecord
    {
        return new IconRecord();
    }
    
    public static function iconId() : ColumnField
    {
        return new ColumnField('iconId', 'Icon', 'icon', 'iconid');
    }
    public static function title() : ColumnField
    {
        return new ColumnField('title', 'Icon', 'icon', 'title');
    }
    public static function iconPath() : ColumnField
    {
        return new ColumnField('iconPath', 'Icon', 'icon', 'iconpath');
    }
    public static function imageCategoryId() : ColumnField
    {
        return new ColumnField('imageCategoryId', 'Icon', 'icon', 'imagecategoryid');
    }
    public static function displayOrder() : ColumnField
    {
        return new ColumnField('displayOrder', 'Icon', 'icon', 'displayorder');
    }

    public function getTableName(): string
    {
        return 'icon';
    }
    
    public function __listColumns() : array
    {
        return ['iconid', 'title', 'iconpath', 'imagecategoryid', 'displayorder'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['iconid'];
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
}