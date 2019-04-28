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

class DataStoreAlias extends TableAlias {
   
    public function title() : ColumnField
    {
        return new ColumnField('datastore', 'title', $this->getAliasName());
    }
    public function data() : ColumnField
    {
        return new ColumnField('datastore', 'data', $this->getAliasName());
    }
    public function unSerialize() : ColumnField
    {
        return new ColumnField('datastore', 'unserialize', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'datastore';
    }
    
    public function __listColumns() : array
    {
        return ['title', 'data', 'unserialize'];
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->title(),
			$this->data(),
			$this->unSerialize()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : DataStoreRecord
    {
        return new DataStoreRecord();
    }
}