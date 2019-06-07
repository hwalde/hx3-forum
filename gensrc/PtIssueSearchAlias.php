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

class PtIssueSearchAlias extends TableAlias {
   
    public function issueSearchId() : ColumnField
    {
        return new ColumnField('issueSearchId', 'PtIssueSearch', 'pt_issuesearch', 'issuesearchid', $this->getAliasName());
    }
    public function userId() : ColumnField
    {
        return new ColumnField('userId', 'PtIssueSearch', 'pt_issuesearch', 'userid', $this->getAliasName());
    }
    public function ipAddress() : ColumnField
    {
        return new ColumnField('ipAddress', 'PtIssueSearch', 'pt_issuesearch', 'ipaddress', $this->getAliasName());
    }
    public function criteria() : ColumnField
    {
        return new ColumnField('criteria', 'PtIssueSearch', 'pt_issuesearch', 'criteria', $this->getAliasName());
    }
    public function sortBy() : ColumnField
    {
        return new ColumnField('sortBy', 'PtIssueSearch', 'pt_issuesearch', 'sortby', $this->getAliasName());
    }
    public function sortOrder() : ColumnField
    {
        return new ColumnField('sortOrder', 'PtIssueSearch', 'pt_issuesearch', 'sortorder', $this->getAliasName());
    }
    public function groupBy() : ColumnField
    {
        return new ColumnField('groupBy', 'PtIssueSearch', 'pt_issuesearch', 'groupby', $this->getAliasName());
    }
    public function searchTime() : ColumnField
    {
        return new ColumnField('searchTime', 'PtIssueSearch', 'pt_issuesearch', 'searchtime', $this->getAliasName());
    }
    public function resultCount() : ColumnField
    {
        return new ColumnField('resultCount', 'PtIssueSearch', 'pt_issuesearch', 'resultcount', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'PtIssueSearch', 'pt_issuesearch', 'dateline', $this->getAliasName());
    }
    public function completed() : ColumnField
    {
        return new ColumnField('completed', 'PtIssueSearch', 'pt_issuesearch', 'completed', $this->getAliasName());
    }
    public function issueReportId() : ColumnField
    {
        return new ColumnField('issueReportId', 'PtIssueSearch', 'pt_issuesearch', 'issuereportid', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'pt_issuesearch';
    }
    
    public function __listColumns() : array
    {
        return ['issuesearchid', 'userid', 'ipaddress', 'criteria', 'sortby', 'sortorder', 'groupby', 'searchtime', 'resultcount', 'dateline', 'completed', 'issuereportid'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['issuesearchid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'issuesearchid' => 'integer', 
			'userid' => 'integer', 
			'ipaddress' => 'string', 
			'criteria' => 'string', 
			'sortby' => 'string', 
			'sortorder' => 'string', 
			'groupby' => 'string', 
			'searchtime' => 'unknown', 
			'resultcount' => 'integer', 
			'dateline' => 'integer', 
			'completed' => 'integer', 
			'issuereportid' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'issuesearchid' => 'issueSearchId', 
			'userid' => 'userId', 
			'ipaddress' => 'ipAddress', 
			'criteria' => 'criteria', 
			'sortby' => 'sortBy', 
			'sortorder' => 'sortOrder', 
			'groupby' => 'groupBy', 
			'searchtime' => 'searchTime', 
			'resultcount' => 'resultCount', 
			'dateline' => 'dateLine', 
			'completed' => 'completed', 
			'issuereportid' => 'issueReportId'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->issueSearchId(),
			$this->userId(),
			$this->ipAddress(),
			$this->criteria(),
			$this->sortBy(),
			$this->sortOrder(),
			$this->groupBy(),
			$this->searchTime(),
			$this->resultCount(),
			$this->dateLine(),
			$this->completed(),
			$this->issueReportId()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PtIssueSearchRecord
    {
        return new PtIssueSearchRecord();
    }
}