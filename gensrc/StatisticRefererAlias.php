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

class StatisticRefererAlias extends TableAlias {
   
    public function id() : ColumnField
    {
        return new ColumnField('id', 'StatisticReferer', 'statistik_referer', 'ID', $this->getAliasName());
    }
    public function referer() : ColumnField
    {
        return new ColumnField('referer', 'StatisticReferer', 'statistik_referer', 'Referer', $this->getAliasName());
    }
    public function zaehler() : ColumnField
    {
        return new ColumnField('zaehler', 'StatisticReferer', 'statistik_referer', 'Zaehler', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'statistik_referer';
    }
    
    public function __listColumns() : array
    {
        return ['ID', 'Referer', 'Zaehler'];
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
			'Referer' => 'string', 
			'Zaehler' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'ID' => 'id', 
			'Referer' => 'referer', 
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
			$this->referer(),
			$this->zaehler()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : StatisticRefererRecord
    {
        return new StatisticRefererRecord();
    }
}