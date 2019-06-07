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

class DataStore implements Table {

    const table = 'datastore';
   
    public static function as(string $aliasName): DataStoreAlias
    {
        return new DataStoreAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::title(),
			self::data(),
			self::unSerialize()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : DataStoreRecord
    {
        return new DataStoreRecord();
    }
    
    public static function title() : ColumnField
    {
        return new ColumnField('title', 'DataStore', 'datastore', 'title');
    }
    public static function data() : ColumnField
    {
        return new ColumnField('data', 'DataStore', 'datastore', 'data');
    }
    public static function unSerialize() : ColumnField
    {
        return new ColumnField('unSerialize', 'DataStore', 'datastore', 'unserialize');
    }

    public function getTableName(): string
    {
        return 'datastore';
    }
    
    public function __listColumns() : array
    {
        return ['title', 'data', 'unserialize'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['title'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'title' => 'string', 
			'data' => 'string', 
			'unserialize' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'title' => 'title', 
			'data' => 'data', 
			'unserialize' => 'unSerialize'
		];
    }
}