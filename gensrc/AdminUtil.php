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

class AdminUtil implements Table {

    const table = 'adminutil';
   
    public static function as(string $aliasName): AdminUtilAlias
    {
        return new AdminUtilAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::title(),
			self::text()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : AdminUtilRecord
    {
        return new AdminUtilRecord();
    }
    
    public static function title() : ColumnField
    {
        return new ColumnField('adminutil', 'title');
    }
    public static function text() : ColumnField
    {
        return new ColumnField('adminutil', 'text');
    }

    public function getTableName(): string
    {
        return 'adminutil';
    }
    
    public function __listColumns() : array
    {
        return ['title', 'text'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'title' => 'string', 
			'text' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'title' => 'title', 
			'text' => 'text'
		];
    }

}