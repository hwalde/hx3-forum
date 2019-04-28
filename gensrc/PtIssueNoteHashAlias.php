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

class PtIssueNoteHashAlias extends TableAlias {
   
    public function issueNoteId() : ColumnField
    {
        return new ColumnField('pt_issuenotehash', 'issuenoteid', $this->getAliasName());
    }
    public function userId() : ColumnField
    {
        return new ColumnField('pt_issuenotehash', 'userid', $this->getAliasName());
    }
    public function issueId() : ColumnField
    {
        return new ColumnField('pt_issuenotehash', 'issueid', $this->getAliasName());
    }
    public function dupeHash() : ColumnField
    {
        return new ColumnField('pt_issuenotehash', 'dupehash', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('pt_issuenotehash', 'dateline', $this->getAliasName());
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->issueNoteId(),
			$this->userId(),
			$this->issueId(),
			$this->dupeHash(),
			$this->dateLine()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PtIssueNoteHashRecord
    {
        return new PtIssueNoteHashRecord();
    }
}