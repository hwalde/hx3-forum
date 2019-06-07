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

class PtIssueReportSubscribe implements Table {

    const table = 'pt_issuereportsubscribe';
   
    public static function as(string $aliasName): PtIssueReportSubscribeAlias
    {
        return new PtIssueReportSubscribeAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::userId(),
			self::issueReportId(),
			self::issueSearchId()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PtIssueReportSubscribeRecord
    {
        return new PtIssueReportSubscribeRecord();
    }
    
    public static function userId() : ColumnField
    {
        return new ColumnField('userId', 'PtIssueReportSubscribe', 'pt_issuereportsubscribe', 'userid');
    }
    public static function issueReportId() : ColumnField
    {
        return new ColumnField('issueReportId', 'PtIssueReportSubscribe', 'pt_issuereportsubscribe', 'issuereportid');
    }
    public static function issueSearchId() : ColumnField
    {
        return new ColumnField('issueSearchId', 'PtIssueReportSubscribe', 'pt_issuereportsubscribe', 'issuesearchid');
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
}