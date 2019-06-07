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

class PtIssueStatus implements Table {

    const table = 'pt_issuestatus';
   
    public static function as(string $aliasName): PtIssueStatusAlias
    {
        return new PtIssueStatusAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::issueStatusId(),
			self::issueTypeId(),
			self::displayOrder(),
			self::canpetitionFrom()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PtIssueStatusRecord
    {
        return new PtIssueStatusRecord();
    }
    
    public static function issueStatusId() : ColumnField
    {
        return new ColumnField('issueStatusId', 'PtIssueStatus', 'pt_issuestatus', 'issuestatusid');
    }
    public static function issueTypeId() : ColumnField
    {
        return new ColumnField('issueTypeId', 'PtIssueStatus', 'pt_issuestatus', 'issuetypeid');
    }
    public static function displayOrder() : ColumnField
    {
        return new ColumnField('displayOrder', 'PtIssueStatus', 'pt_issuestatus', 'displayorder');
    }
    public static function canpetitionFrom() : ColumnField
    {
        return new ColumnField('canpetitionFrom', 'PtIssueStatus', 'pt_issuestatus', 'canpetitionfrom');
    }

    public function getTableName(): string
    {
        return 'pt_issuestatus';
    }
    
    public function __listColumns() : array
    {
        return ['issuestatusid', 'issuetypeid', 'displayorder', 'canpetitionfrom'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['issuestatusid'];
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
}