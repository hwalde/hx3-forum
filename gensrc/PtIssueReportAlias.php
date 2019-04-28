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

class PtIssueReportAlias extends TableAlias {
   
    public function issueReportId() : ColumnField
    {
        return new ColumnField('pt_issuereport', 'issuereportid', $this->getAliasName());
    }
    public function title() : ColumnField
    {
        return new ColumnField('pt_issuereport', 'title', $this->getAliasName());
    }
    public function description() : ColumnField
    {
        return new ColumnField('pt_issuereport', 'description', $this->getAliasName());
    }
    public function public() : ColumnField
    {
        return new ColumnField('pt_issuereport', 'public', $this->getAliasName());
    }
    public function userId() : ColumnField
    {
        return new ColumnField('pt_issuereport', 'userid', $this->getAliasName());
    }
    public function criteria() : ColumnField
    {
        return new ColumnField('pt_issuereport', 'criteria', $this->getAliasName());
    }
    public function sortBy() : ColumnField
    {
        return new ColumnField('pt_issuereport', 'sortby', $this->getAliasName());
    }
    public function sortOrder() : ColumnField
    {
        return new ColumnField('pt_issuereport', 'sortorder', $this->getAliasName());
    }
    public function groupBy() : ColumnField
    {
        return new ColumnField('pt_issuereport', 'groupby', $this->getAliasName());
    }
    public function projectList() : ColumnField
    {
        return new ColumnField('pt_issuereport', 'projectlist', $this->getAliasName());
    }
    public function issueTypeList() : ColumnField
    {
        return new ColumnField('pt_issuereport', 'issuetypelist', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'pt_issuereport';
    }
    
    public function __listColumns() : array
    {
        return ['issuereportid', 'title', 'description', 'public', 'userid', 'criteria', 'sortby', 'sortorder', 'groupby', 'projectlist', 'issuetypelist'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'issuereportid' => 'integer', 
			'title' => 'string', 
			'description' => 'string', 
			'public' => 'integer', 
			'userid' => 'integer', 
			'criteria' => 'string', 
			'sortby' => 'string', 
			'sortorder' => 'string', 
			'groupby' => 'string', 
			'projectlist' => 'string', 
			'issuetypelist' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'issuereportid' => 'issueReportId', 
			'title' => 'title', 
			'description' => 'description', 
			'public' => 'public', 
			'userid' => 'userId', 
			'criteria' => 'criteria', 
			'sortby' => 'sortBy', 
			'sortorder' => 'sortOrder', 
			'groupby' => 'groupBy', 
			'projectlist' => 'projectList', 
			'issuetypelist' => 'issueTypeList'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->issueReportId(),
			$this->title(),
			$this->description(),
			$this->public(),
			$this->userId(),
			$this->criteria(),
			$this->sortBy(),
			$this->sortOrder(),
			$this->groupBy(),
			$this->projectList(),
			$this->issueTypeList()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PtIssueReportRecord
    {
        return new PtIssueReportRecord();
    }
}