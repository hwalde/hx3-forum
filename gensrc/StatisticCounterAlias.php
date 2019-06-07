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

class StatisticCounterAlias extends TableAlias {
   
    public function forCounter() : ColumnField
    {
        return new ColumnField('forCounter', 'StatisticCounter', 'statistik_zaehler', 'Zaehler_fuer', $this->getAliasName());
    }
    public function summe() : ColumnField
    {
        return new ColumnField('summe', 'StatisticCounter', 'statistik_zaehler', 'Summe', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'statistik_zaehler';
    }
    
    public function __listColumns() : array
    {
        return ['Zaehler_fuer', 'Summe'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['Zaehler_fuer'];
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->forCounter(),
			$this->summe()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : StatisticCounterRecord
    {
        return new StatisticCounterRecord();
    }
}