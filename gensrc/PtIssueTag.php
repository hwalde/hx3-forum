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

class PtIssueTag implements Table {

    const table = 'pt_issuetag';
   
    public static function as(string $aliasName): PtIssueTagAlias
    {
        return new PtIssueTagAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::issueId(),
			self::tagId()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PtIssueTagRecord
    {
        return new PtIssueTagRecord();
    }
    
    public static function issueId() : ColumnField
    {
        return new ColumnField('pt_issuetag', 'issueid');
    }
    public static function tagId() : ColumnField
    {
        return new ColumnField('pt_issuetag', 'tagid');
    }

    public function getTableName(): string
    {
        return 'pt_issuetag';
    }
    
    public function __listColumns() : array
    {
        return ['issueid', 'tagid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'issueid' => 'integer', 
			'tagid' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'issueid' => 'issueId', 
			'tagid' => 'tagId'
		];
    }

}