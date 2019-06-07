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

class PtIssueChange implements Table {

    const table = 'pt_issuechange';
   
    public static function as(string $aliasName): PtIssueChangeAlias
    {
        return new PtIssueChangeAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::issueChangeId(),
			self::issueId(),
			self::userId(),
			self::dateLine(),
			self::issueNoteId(),
			self::field(),
			self::oldValue(),
			self::newValue()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PtIssueChangeRecord
    {
        return new PtIssueChangeRecord();
    }
    
    public static function issueChangeId() : ColumnField
    {
        return new ColumnField('issueChangeId', 'PtIssueChange', 'pt_issuechange', 'issuechangeid');
    }
    public static function issueId() : ColumnField
    {
        return new ColumnField('issueId', 'PtIssueChange', 'pt_issuechange', 'issueid');
    }
    public static function userId() : ColumnField
    {
        return new ColumnField('userId', 'PtIssueChange', 'pt_issuechange', 'userid');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'PtIssueChange', 'pt_issuechange', 'dateline');
    }
    public static function issueNoteId() : ColumnField
    {
        return new ColumnField('issueNoteId', 'PtIssueChange', 'pt_issuechange', 'issuenoteid');
    }
    public static function field() : ColumnField
    {
        return new ColumnField('field', 'PtIssueChange', 'pt_issuechange', 'field');
    }
    public static function oldValue() : ColumnField
    {
        return new ColumnField('oldValue', 'PtIssueChange', 'pt_issuechange', 'oldvalue');
    }
    public static function newValue() : ColumnField
    {
        return new ColumnField('newValue', 'PtIssueChange', 'pt_issuechange', 'newvalue');
    }

    public function getTableName(): string
    {
        return 'pt_issuechange';
    }
    
    public function __listColumns() : array
    {
        return ['issuechangeid', 'issueid', 'userid', 'dateline', 'issuenoteid', 'field', 'oldvalue', 'newvalue'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['issuechangeid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'issuechangeid' => 'integer', 
			'issueid' => 'integer', 
			'userid' => 'integer', 
			'dateline' => 'integer', 
			'issuenoteid' => 'integer', 
			'field' => 'string', 
			'oldvalue' => 'string', 
			'newvalue' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'issuechangeid' => 'issueChangeId', 
			'issueid' => 'issueId', 
			'userid' => 'userId', 
			'dateline' => 'dateLine', 
			'issuenoteid' => 'issueNoteId', 
			'field' => 'field', 
			'oldvalue' => 'oldValue', 
			'newvalue' => 'newValue'
		];
    }
}