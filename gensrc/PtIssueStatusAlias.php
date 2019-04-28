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

class PtIssueStatusAlias extends TableAlias {
   
    public function issueStatusId() : ColumnField
    {
        return new ColumnField('pt_issuestatus', 'issuestatusid', $this->getAliasName());
    }
    public function issueTypeId() : ColumnField
    {
        return new ColumnField('pt_issuestatus', 'issuetypeid', $this->getAliasName());
    }
    public function displayOrder() : ColumnField
    {
        return new ColumnField('pt_issuestatus', 'displayorder', $this->getAliasName());
    }
    public function canpetitionFrom() : ColumnField
    {
        return new ColumnField('pt_issuestatus', 'canpetitionfrom', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'pt_issuestatus';
    }
    
    public function __listColumns() : array
    {
        return ['issuestatusid', 'issuetypeid', 'displayorder', 'canpetitionfrom'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'issuestatusid' => 'integer', 
			'issuetypeid' => 'string', 
			'displayorder' => 'integer', 
			'canpetitionfrom' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'issuestatusid' => 'issueStatusId', 
			'issuetypeid' => 'issueTypeId', 
			'displayorder' => 'displayOrder', 
			'canpetitionfrom' => 'canpetitionFrom'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->issueStatusId(),
			$this->issueTypeId(),
			$this->displayOrder(),
			$this->canpetitionFrom()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PtIssueStatusRecord
    {
        return new PtIssueStatusRecord();
    }
}