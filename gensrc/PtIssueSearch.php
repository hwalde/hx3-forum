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

use POOQ\ColumnField;
use POOQ\ColumnFieldList;
use POOQ\Table;

class PtIssueSearch implements Table {

    const table = 'pt_issuesearch';
   
    public static function as(string $aliasName): PtIssueSearchAlias
    {
        return new PtIssueSearchAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::issueSearchId(),
			self::userId(),
			self::ipAddress(),
			self::criteria(),
			self::sortBy(),
			self::sortOrder(),
			self::groupBy(),
			self::searchTime(),
			self::resultCount(),
			self::dateLine(),
			self::completed(),
			self::issueReportId()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PtIssueSearchRecord
    {
        return new PtIssueSearchRecord();
    }
    
    public static function issueSearchId() : ColumnField
    {
        return new ColumnField('issueSearchId', 'PtIssueSearch', 'pt_issuesearch', 'issuesearchid');
    }
    public static function userId() : ColumnField
    {
        return new ColumnField('userId', 'PtIssueSearch', 'pt_issuesearch', 'userid');
    }
    public static function ipAddress() : ColumnField
    {
        return new ColumnField('ipAddress', 'PtIssueSearch', 'pt_issuesearch', 'ipaddress');
    }
    public static function criteria() : ColumnField
    {
        return new ColumnField('criteria', 'PtIssueSearch', 'pt_issuesearch', 'criteria');
    }
    public static function sortBy() : ColumnField
    {
        return new ColumnField('sortBy', 'PtIssueSearch', 'pt_issuesearch', 'sortby');
    }
    public static function sortOrder() : ColumnField
    {
        return new ColumnField('sortOrder', 'PtIssueSearch', 'pt_issuesearch', 'sortorder');
    }
    public static function groupBy() : ColumnField
    {
        return new ColumnField('groupBy', 'PtIssueSearch', 'pt_issuesearch', 'groupby');
    }
    public static function searchTime() : ColumnField
    {
        return new ColumnField('searchTime', 'PtIssueSearch', 'pt_issuesearch', 'searchtime');
    }
    public static function resultCount() : ColumnField
    {
        return new ColumnField('resultCount', 'PtIssueSearch', 'pt_issuesearch', 'resultcount');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'PtIssueSearch', 'pt_issuesearch', 'dateline');
    }
    public static function completed() : ColumnField
    {
        return new ColumnField('completed', 'PtIssueSearch', 'pt_issuesearch', 'completed');
    }
    public static function issueReportId() : ColumnField
    {
        return new ColumnField('issueReportId', 'PtIssueSearch', 'pt_issuesearch', 'issuereportid');
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
}