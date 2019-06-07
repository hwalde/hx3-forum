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

class PtIssueType implements Table {

    const table = 'pt_issuetype';
   
    public static function as(string $aliasName): PtIssueTypeAlias
    {
        return new PtIssueTypeAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::issueTypeId(),
			self::displayOrder(),
			self::iconFile()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PtIssueTypeRecord
    {
        return new PtIssueTypeRecord();
    }
    
    public static function issueTypeId() : ColumnField
    {
        return new ColumnField('issueTypeId', 'PtIssueType', 'pt_issuetype', 'issuetypeid');
    }
    public static function displayOrder() : ColumnField
    {
        return new ColumnField('displayOrder', 'PtIssueType', 'pt_issuetype', 'displayorder');
    }
    public static function iconFile() : ColumnField
    {
        return new ColumnField('iconFile', 'PtIssueType', 'pt_issuetype', 'iconfile');
    }

    public function getTableName(): string
    {
        return 'pt_issuetype';
    }
    
    public function __listColumns() : array
    {
        return ['issuetypeid', 'displayorder', 'iconfile'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['issuetypeid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'issuetypeid' => 'string', 
			'displayorder' => 'integer', 
			'iconfile' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'issuetypeid' => 'issueTypeId', 
			'displayorder' => 'displayOrder', 
			'iconfile' => 'iconFile'
		];
    }
}