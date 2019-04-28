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

class NoticeCriteriaAlias extends TableAlias {
   
    public function noticeId() : ColumnField
    {
        return new ColumnField('noticecriteria', 'noticeid', $this->getAliasName());
    }
    public function criteriaId() : ColumnField
    {
        return new ColumnField('noticecriteria', 'criteriaid', $this->getAliasName());
    }
    public function condition1() : ColumnField
    {
        return new ColumnField('noticecriteria', 'condition1', $this->getAliasName());
    }
    public function condition2() : ColumnField
    {
        return new ColumnField('noticecriteria', 'condition2', $this->getAliasName());
    }
    public function condition3() : ColumnField
    {
        return new ColumnField('noticecriteria', 'condition3', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'noticecriteria';
    }
    
    public function __listColumns() : array
    {
        return ['noticeid', 'criteriaid', 'condition1', 'condition2', 'condition3'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'noticeid' => 'integer', 
			'criteriaid' => 'string', 
			'condition1' => 'string', 
			'condition2' => 'string', 
			'condition3' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'noticeid' => 'noticeId', 
			'criteriaid' => 'criteriaId', 
			'condition1' => 'condition1', 
			'condition2' => 'condition2', 
			'condition3' => 'condition3'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->noticeId(),
			$this->criteriaId(),
			$this->condition1(),
			$this->condition2(),
			$this->condition3()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : NoticeCriteriaRecord
    {
        return new NoticeCriteriaRecord();
    }
}