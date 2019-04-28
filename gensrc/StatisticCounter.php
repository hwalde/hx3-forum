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

class StatisticCounter implements Table {

    const table = 'statistik_zaehler';
   
    public static function as(string $aliasName): StatisticCounterAlias
    {
        return new StatisticCounterAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::forCounter(),
			self::summe()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : StatisticCounterRecord
    {
        return new StatisticCounterRecord();
    }
    
    public static function forCounter() : ColumnField
    {
        return new ColumnField('statistik_zaehler', 'Zaehler_fuer');
    }
    public static function summe() : ColumnField
    {
        return new ColumnField('statistik_zaehler', 'Summe');
    }

    public function getTableName(): string
    {
        return 'statistik_zaehler';
    }
    
    public function __listColumns() : array
    {
        return ['Zaehler_fuer', 'Summe'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'Zaehler_fuer' => 'string', 
			'Summe' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'Zaehler_fuer' => 'forCounter', 
			'Summe' => 'summe'
		];
    }

}