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

class StatisticSpider implements Table {

    const table = 'statistik_spider';
   
    public static function as(string $aliasName): StatisticSpiderAlias
    {
        return new StatisticSpiderAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::id(),
			self::spiderName(),
			self::spiderLink(),
			self::balkenLink(),
			self::zaehler()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : StatisticSpiderRecord
    {
        return new StatisticSpiderRecord();
    }
    
    public static function id() : ColumnField
    {
        return new ColumnField('id', 'StatisticSpider', 'statistik_spider', 'ID');
    }
    public static function spiderName() : ColumnField
    {
        return new ColumnField('spiderName', 'StatisticSpider', 'statistik_spider', 'Spidername');
    }
    public static function spiderLink() : ColumnField
    {
        return new ColumnField('spiderLink', 'StatisticSpider', 'statistik_spider', 'spider_link');
    }
    public static function balkenLink() : ColumnField
    {
        return new ColumnField('balkenLink', 'StatisticSpider', 'statistik_spider', 'balken_link');
    }
    public static function zaehler() : ColumnField
    {
        return new ColumnField('zaehler', 'StatisticSpider', 'statistik_spider', 'Zaehler');
    }

    public function getTableName(): string
    {
        return 'statistik_spider';
    }
    
    public function __listColumns() : array
    {
        return ['ID', 'Spidername', 'spider_link', 'balken_link', 'Zaehler'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['ID'];
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
}