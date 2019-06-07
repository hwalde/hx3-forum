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

class PtIssueChangeAlias extends TableAlias {
   
    public function issueChangeId() : ColumnField
    {
        return new ColumnField('issueChangeId', 'PtIssueChange', 'pt_issuechange', 'issuechangeid', $this->getAliasName());
    }
    public function issueId() : ColumnField
    {
        return new ColumnField('issueId', 'PtIssueChange', 'pt_issuechange', 'issueid', $this->getAliasName());
    }
    public function userId() : ColumnField
    {
        return new ColumnField('userId', 'PtIssueChange', 'pt_issuechange', 'userid', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'PtIssueChange', 'pt_issuechange', 'dateline', $this->getAliasName());
    }
    public function issueNoteId() : ColumnField
    {
        return new ColumnField('issueNoteId', 'PtIssueChange', 'pt_issuechange', 'issuenoteid', $this->getAliasName());
    }
    public function field() : ColumnField
    {
        return new ColumnField('field', 'PtIssueChange', 'pt_issuechange', 'field', $this->getAliasName());
    }
    public function oldValue() : ColumnField
    {
        return new ColumnField('oldValue', 'PtIssueChange', 'pt_issuechange', 'oldvalue', $this->getAliasName());
    }
    public function newValue() : ColumnField
    {
        return new ColumnField('newValue', 'PtIssueChange', 'pt_issuechange', 'newvalue', $this->getAliasName());
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->issueChangeId(),
			$this->issueId(),
			$this->userId(),
			$this->dateLine(),
			$this->issueNoteId(),
			$this->field(),
			$this->oldValue(),
			$this->newValue()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PtIssueChangeRecord
    {
        return new PtIssueChangeRecord();
    }
}