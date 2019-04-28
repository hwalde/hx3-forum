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

class StatisticLogAlias extends TableAlias {
   
    public function id() : ColumnField
    {
        return new ColumnField('statistik_log', 'ID', $this->getAliasName());
    }
    public function IP() : ColumnField
    {
        return new ColumnField('statistik_log', 'IP', $this->getAliasName());
    }
    public function loggedInSince() : ColumnField
    {
        return new ColumnField('statistik_log', 'eingelogt_seit', $this->getAliasName());
    }
    public function browserStamp() : ColumnField
    {
        return new ColumnField('statistik_log', 'Browserstamp', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'statistik_log';
    }
    
    public function __listColumns() : array
    {
        return ['ID', 'IP', 'eingelogt_seit', 'Browserstamp'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'ID' => 'integer', 
			'IP' => 'string', 
			'eingelogt_seit' => 'integer', 
			'Browserstamp' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'ID' => 'id', 
			'IP' => 'IP', 
			'eingelogt_seit' => 'loggedInSince', 
			'Browserstamp' => 'browserStamp'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->id(),
			$this->IP(),
			$this->loggedInSince(),
			$this->browserStamp()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : StatisticLogRecord
    {
        return new StatisticLogRecord();
    }
}