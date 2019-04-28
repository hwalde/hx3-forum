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

class StatisticSpiderAlias extends TableAlias {
   
    public function id() : ColumnField
    {
        return new ColumnField('statistik_spider', 'ID', $this->getAliasName());
    }
    public function spiderName() : ColumnField
    {
        return new ColumnField('statistik_spider', 'Spidername', $this->getAliasName());
    }
    public function spiderLink() : ColumnField
    {
        return new ColumnField('statistik_spider', 'spider_link', $this->getAliasName());
    }
    public function balkenLink() : ColumnField
    {
        return new ColumnField('statistik_spider', 'balken_link', $this->getAliasName());
    }
    public function zaehler() : ColumnField
    {
        return new ColumnField('statistik_spider', 'Zaehler', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'statistik_spider';
    }
    
    public function __listColumns() : array
    {
        return ['ID', 'Spidername', 'spider_link', 'balken_link', 'Zaehler'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'ID' => 'integer', 
			'Spidername' => 'string', 
			'spider_link' => 'string', 
			'balken_link' => 'string', 
			'Zaehler' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'ID' => 'id', 
			'Spidername' => 'spiderName', 
			'spider_link' => 'spiderLink', 
			'balken_link' => 'balkenLink', 
			'Zaehler' => 'zaehler'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->id(),
			$this->spiderName(),
			$this->spiderLink(),
			$this->balkenLink(),
			$this->zaehler()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : StatisticSpiderRecord
    {
        return new StatisticSpiderRecord();
    }
}