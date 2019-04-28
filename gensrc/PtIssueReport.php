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

class PtIssueReport implements Table {

    const table = 'pt_issuereport';
   
    public static function as(string $aliasName): PtIssueReportAlias
    {
        return new PtIssueReportAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::issueReportId(),
			self::title(),
			self::description(),
			self::public(),
			self::userId(),
			self::criteria(),
			self::sortBy(),
			self::sortOrder(),
			self::groupBy(),
			self::projectList(),
			self::issueTypeList()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PtIssueReportRecord
    {
        return new PtIssueReportRecord();
    }
    
    public static function issueReportId() : ColumnField
    {
        return new ColumnField('pt_issuereport', 'issuereportid');
    }
    public static function title() : ColumnField
    {
        return new ColumnField('pt_issuereport', 'title');
    }
    public static function description() : ColumnField
    {
        return new ColumnField('pt_issuereport', 'description');
    }
    public static function public() : ColumnField
    {
        return new ColumnField('pt_issuereport', 'public');
    }
    public static function userId() : ColumnField
    {
        return new ColumnField('pt_issuereport', 'userid');
    }
    public static function criteria() : ColumnField
    {
        return new ColumnField('pt_issuereport', 'criteria');
    }
    public static function sortBy() : ColumnField
    {
        return new ColumnField('pt_issuereport', 'sortby');
    }
    public static function sortOrder() : ColumnField
    {
        return new ColumnField('pt_issuereport', 'sortorder');
    }
    public static function groupBy() : ColumnField
    {
        return new ColumnField('pt_issuereport', 'groupby');
    }
    public static function projectList() : ColumnField
    {
        return new ColumnField('pt_issuereport', 'projectlist');
    }
    public static function issueTypeList() : ColumnField
    {
        return new ColumnField('pt_issuereport', 'issuetypelist');
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

}