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

class StatisticDomainAlias extends TableAlias {
   
    public function id() : ColumnField
    {
        return new ColumnField('statistik_domain', 'ID', $this->getAliasName());
    }
    public function domain() : ColumnField
    {
        return new ColumnField('statistik_domain', 'domain', $this->getAliasName());
    }
    public function zaehler() : ColumnField
    {
        return new ColumnField('statistik_domain', 'Zaehler', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'statistik_domain';
    }
    
    public function __listColumns() : array
    {
        return ['ID', 'domain', 'Zaehler'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'ID' => 'integer', 
			'domain' => 'string', 
			'Zaehler' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'ID' => 'id', 
			'domain' => 'domain', 
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
			$this->domain(),
			$this->zaehler()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : StatisticDomainRecord
    {
        return new StatisticDomainRecord();
    }
}