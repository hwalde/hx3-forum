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

class StatsAlias extends TableAlias {
   
    public function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'Stats', 'stats', 'dateline', $this->getAliasName());
    }
    public function nUser() : ColumnField
    {
        return new ColumnField('nUser', 'Stats', 'stats', 'nuser', $this->getAliasName());
    }
    public function nThread() : ColumnField
    {
        return new ColumnField('nThread', 'Stats', 'stats', 'nthread', $this->getAliasName());
    }
    public function nPost() : ColumnField
    {
        return new ColumnField('nPost', 'Stats', 'stats', 'npost', $this->getAliasName());
    }
    public function ausers() : ColumnField
    {
        return new ColumnField('ausers', 'Stats', 'stats', 'ausers', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'stats';
    }
    
    public function __listColumns() : array
    {
        return ['dateline', 'nuser', 'nthread', 'npost', 'ausers'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['dateline'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'dateline' => 'integer', 
			'nuser' => 'integer', 
			'nthread' => 'integer', 
			'npost' => 'integer', 
			'ausers' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'dateline' => 'dateLine', 
			'nuser' => 'nUser', 
			'nthread' => 'nThread', 
			'npost' => 'nPost', 
			'ausers' => 'ausers'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->dateLine(),
			$this->nUser(),
			$this->nThread(),
			$this->nPost(),
			$this->ausers()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : StatsRecord
    {
        return new StatsRecord();
    }
}