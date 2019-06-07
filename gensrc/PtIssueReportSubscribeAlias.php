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

class PtIssueReportSubscribeAlias extends TableAlias {
   
    public function userId() : ColumnField
    {
        return new ColumnField('userId', 'PtIssueReportSubscribe', 'pt_issuereportsubscribe', 'userid', $this->getAliasName());
    }
    public function issueReportId() : ColumnField
    {
        return new ColumnField('issueReportId', 'PtIssueReportSubscribe', 'pt_issuereportsubscribe', 'issuereportid', $this->getAliasName());
    }
    public function issueSearchId() : ColumnField
    {
        return new ColumnField('issueSearchId', 'PtIssueReportSubscribe', 'pt_issuereportsubscribe', 'issuesearchid', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'pt_issuereportsubscribe';
    }
    
    public function __listColumns() : array
    {
        return ['userid', 'issuereportid', 'issuesearchid'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['userid', 'issuereportid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'userid' => 'integer', 
			'issuereportid' => 'integer', 
			'issuesearchid' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'userid' => 'userId', 
			'issuereportid' => 'issueReportId', 
			'issuesearchid' => 'issueSearchId'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->userId(),
			$this->issueReportId(),
			$this->issueSearchId()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PtIssueReportSubscribeRecord
    {
        return new PtIssueReportSubscribeRecord();
    }
}