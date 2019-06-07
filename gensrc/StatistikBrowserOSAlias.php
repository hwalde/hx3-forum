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

class StatistikBrowserOSAlias extends TableAlias {
   
    public function typ() : ColumnField
    {
        return new ColumnField('typ', 'StatistikBrowserOS', 'statistik_browser_os', 'Typ', $this->getAliasName());
    }
    public function system() : ColumnField
    {
        return new ColumnField('system', 'StatistikBrowserOS', 'statistik_browser_os', 'System', $this->getAliasName());
    }
    public function zaehler() : ColumnField
    {
        return new ColumnField('zaehler', 'StatistikBrowserOS', 'statistik_browser_os', 'Zaehler', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'statistik_browser_os';
    }
    
    public function __listColumns() : array
    {
        return ['Typ', 'System', 'Zaehler'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return [];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'Typ' => 'string', 
			'System' => 'string', 
			'Zaehler' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'Typ' => 'typ', 
			'System' => 'system', 
			'Zaehler' => 'zaehler'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->typ(),
			$this->system(),
			$this->zaehler()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : StatistikBrowserOSRecord
    {
        return new StatistikBrowserOSRecord();
    }
}