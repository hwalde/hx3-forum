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

class StrikesAlias extends TableAlias {
   
    public function strikeTime() : ColumnField
    {
        return new ColumnField('strikes', 'striketime', $this->getAliasName());
    }
    public function strikeIp() : ColumnField
    {
        return new ColumnField('strikes', 'strikeip', $this->getAliasName());
    }
    public function userName() : ColumnField
    {
        return new ColumnField('strikes', 'username', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'strikes';
    }
    
    public function __listColumns() : array
    {
        return ['striketime', 'strikeip', 'username'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'striketime' => 'integer', 
			'strikeip' => 'string', 
			'username' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'striketime' => 'strikeTime', 
			'strikeip' => 'strikeIp', 
			'username' => 'userName'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->strikeTime(),
			$this->strikeIp(),
			$this->userName()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : StrikesRecord
    {
        return new StrikesRecord();
    }
}