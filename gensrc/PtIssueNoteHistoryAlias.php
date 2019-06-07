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

class PtIssueNoteHistoryAlias extends TableAlias {
   
    public function issueNoteHistoryId() : ColumnField
    {
        return new ColumnField('issueNoteHistoryId', 'PtIssueNoteHistory', 'pt_issuenotehistory', 'issuenotehistoryid', $this->getAliasName());
    }
    public function issueNoteId() : ColumnField
    {
        return new ColumnField('issueNoteId', 'PtIssueNoteHistory', 'pt_issuenotehistory', 'issuenoteid', $this->getAliasName());
    }
    public function reason() : ColumnField
    {
        return new ColumnField('reason', 'PtIssueNoteHistory', 'pt_issuenotehistory', 'reason', $this->getAliasName());
    }
    public function pageText() : ColumnField
    {
        return new ColumnField('pageText', 'PtIssueNoteHistory', 'pt_issuenotehistory', 'pagetext', $this->getAliasName());
    }
    public function visible() : ColumnField
    {
        return new ColumnField('visible', 'PtIssueNoteHistory', 'pt_issuenotehistory', 'visible', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'PtIssueNoteHistory', 'pt_issuenotehistory', 'dateline', $this->getAliasName());
    }
    public function userId() : ColumnField
    {
        return new ColumnField('userId', 'PtIssueNoteHistory', 'pt_issuenotehistory', 'userid', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'pt_issuenotehistory';
    }
    
    public function __listColumns() : array
    {
        return ['issuenotehistoryid', 'issuenoteid', 'reason', 'pagetext', 'visible', 'dateline', 'userid'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['issuenotehistoryid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'issuenotehistoryid' => 'integer', 
			'issuenoteid' => 'integer', 
			'reason' => 'string', 
			'pagetext' => 'string', 
			'visible' => 'string', 
			'dateline' => 'integer', 
			'userid' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'issuenotehistoryid' => 'issueNoteHistoryId', 
			'issuenoteid' => 'issueNoteId', 
			'reason' => 'reason', 
			'pagetext' => 'pageText', 
			'visible' => 'visible', 
			'dateline' => 'dateLine', 
			'userid' => 'userId'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->issueNoteHistoryId(),
			$this->issueNoteId(),
			$this->reason(),
			$this->pageText(),
			$this->visible(),
			$this->dateLine(),
			$this->userId()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PtIssueNoteHistoryRecord
    {
        return new PtIssueNoteHistoryRecord();
    }
}