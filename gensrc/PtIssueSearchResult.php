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

class PtIssueSearchResult implements Table {

    const table = 'pt_issuesearchresult';
   
    public static function as(string $aliasName): PtIssueSearchResultAlias
    {
        return new PtIssueSearchResultAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::issueSearchId(),
			self::issueId(),
			self::offset(),
			self::groupId()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PtIssueSearchResultRecord
    {
        return new PtIssueSearchResultRecord();
    }
    
    public static function issueSearchId() : ColumnField
    {
        return new ColumnField('pt_issuesearchresult', 'issuesearchid');
    }
    public static function issueId() : ColumnField
    {
        return new ColumnField('pt_issuesearchresult', 'issueid');
    }
    public static function offset() : ColumnField
    {
        return new ColumnField('pt_issuesearchresult', 'offset');
    }
    public static function groupId() : ColumnField
    {
        return new ColumnField('pt_issuesearchresult', 'groupid');
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

}