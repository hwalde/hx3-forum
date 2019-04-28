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

class PtIssueSearchResultAlias extends TableAlias {
   
    public function issueSearchId() : ColumnField
    {
        return new ColumnField('pt_issuesearchresult', 'issuesearchid', $this->getAliasName());
    }
    public function issueId() : ColumnField
    {
        return new ColumnField('pt_issuesearchresult', 'issueid', $this->getAliasName());
    }
    public function offset() : ColumnField
    {
        return new ColumnField('pt_issuesearchresult', 'offset', $this->getAliasName());
    }
    public function groupId() : ColumnField
    {
        return new ColumnField('pt_issuesearchresult', 'groupid', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'pt_issuesearchresult';
    }
    
    public function __listColumns() : array
    {
        return ['issuesearchid', 'issueid', 'offset', 'groupid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'issuesearchid' => 'integer', 
			'issueid' => 'integer', 
			'offset' => 'integer', 
			'groupid' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'issuesearchid' => 'issueSearchId', 
			'issueid' => 'issueId', 
			'offset' => 'offset', 
			'groupid' => 'groupId'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->issueSearchId(),
			$this->issueId(),
			$this->offset(),
			$this->groupId()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PtIssueSearchResultRecord
    {
        return new PtIssueSearchResultRecord();
    }
}