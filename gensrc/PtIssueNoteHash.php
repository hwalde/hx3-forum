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

class PtIssueNoteHash implements Table {

    const table = 'pt_issuenotehash';
   
    public static function as(string $aliasName): PtIssueNoteHashAlias
    {
        return new PtIssueNoteHashAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::issueNoteId(),
			self::userId(),
			self::issueId(),
			self::dupeHash(),
			self::dateLine()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PtIssueNoteHashRecord
    {
        return new PtIssueNoteHashRecord();
    }
    
    public static function issueNoteId() : ColumnField
    {
        return new ColumnField('pt_issuenotehash', 'issuenoteid');
    }
    public static function userId() : ColumnField
    {
        return new ColumnField('pt_issuenotehash', 'userid');
    }
    public static function issueId() : ColumnField
    {
        return new ColumnField('pt_issuenotehash', 'issueid');
    }
    public static function dupeHash() : ColumnField
    {
        return new ColumnField('pt_issuenotehash', 'dupehash');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('pt_issuenotehash', 'dateline');
    }

    public function getTableName(): string
    {
        return 'pt_issuenotehash';
    }
    
    public function __listColumns() : array
    {
        return ['issuenoteid', 'userid', 'issueid', 'dupehash', 'dateline'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'issuenoteid' => 'integer', 
			'userid' => 'integer', 
			'issueid' => 'integer', 
			'dupehash' => 'string', 
			'dateline' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'issuenoteid' => 'issueNoteId', 
			'userid' => 'userId', 
			'issueid' => 'issueId', 
			'dupehash' => 'dupeHash', 
			'dateline' => 'dateLine'
		];
    }

}