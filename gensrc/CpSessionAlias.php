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

class CpSessionAlias extends TableAlias {
   
    public function userId() : ColumnField
    {
        return new ColumnField('cpsession', 'userid', $this->getAliasName());
    }
    public function hash() : ColumnField
    {
        return new ColumnField('cpsession', 'hash', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('cpsession', 'dateline', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'cpsession';
    }
    
    public function __listColumns() : array
    {
        return ['userid', 'hash', 'dateline'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'userid' => 'integer', 
			'hash' => 'string', 
			'dateline' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'userid' => 'userId', 
			'hash' => 'hash', 
			'dateline' => 'dateLine'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->userId(),
			$this->hash(),
			$this->dateLine()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : CpSessionRecord
    {
        return new CpSessionRecord();
    }
}