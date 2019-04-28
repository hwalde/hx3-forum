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

class PtIssueNoteAlias extends TableAlias {
   
    public function issueNoteId() : ColumnField
    {
        return new ColumnField('pt_issuenote', 'issuenoteid', $this->getAliasName());
    }
    public function issueId() : ColumnField
    {
        return new ColumnField('pt_issuenote', 'issueid', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('pt_issuenote', 'dateline', $this->getAliasName());
    }
    public function pageText() : ColumnField
    {
        return new ColumnField('pt_issuenote', 'pagetext', $this->getAliasName());
    }
    public function userId() : ColumnField
    {
        return new ColumnField('pt_issuenote', 'userid', $this->getAliasName());
    }
    public function userName() : ColumnField
    {
        return new ColumnField('pt_issuenote', 'username', $this->getAliasName());
    }
    public function type() : ColumnField
    {
        return new ColumnField('pt_issuenote', 'type', $this->getAliasName());
    }
    public function isPending() : ColumnField
    {
        return new ColumnField('pt_issuenote', 'ispending', $this->getAliasName());
    }
    public function visible() : ColumnField
    {
        return new ColumnField('pt_issuenote', 'visible', $this->getAliasName());
    }
    public function lastEditDate() : ColumnField
    {
        return new ColumnField('pt_issuenote', 'lasteditdate', $this->getAliasName());
    }
    public function isFirstNote() : ColumnField
    {
        return new ColumnField('pt_issuenote', 'isfirstnote', $this->getAliasName());
    }
    public function ipAddress() : ColumnField
    {
        return new ColumnField('pt_issuenote', 'ipaddress', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'pt_issuenote';
    }
    
    public function __listColumns() : array
    {
        return ['issuenoteid', 'issueid', 'dateline', 'pagetext', 'userid', 'username', 'type', 'ispending', 'visible', 'lasteditdate', 'isfirstnote', 'ipaddress'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'issuenoteid' => 'integer', 
			'issueid' => 'integer', 
			'dateline' => 'integer', 
			'pagetext' => 'string', 
			'userid' => 'integer', 
			'username' => 'string', 
			'type' => 'string', 
			'ispending' => 'integer', 
			'visible' => 'string', 
			'lasteditdate' => 'integer', 
			'isfirstnote' => 'integer', 
			'ipaddress' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'issuenoteid' => 'issueNoteId', 
			'issueid' => 'issueId', 
			'dateline' => 'dateLine', 
			'pagetext' => 'pageText', 
			'userid' => 'userId', 
			'username' => 'userName', 
			'type' => 'type', 
			'ispending' => 'isPending', 
			'visible' => 'visible', 
			'lasteditdate' => 'lastEditDate', 
			'isfirstnote' => 'isFirstNote', 
			'ipaddress' => 'ipAddress'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->issueNoteId(),
			$this->issueId(),
			$this->dateLine(),
			$this->pageText(),
			$this->userId(),
			$this->userName(),
			$this->type(),
			$this->isPending(),
			$this->visible(),
			$this->lastEditDate(),
			$this->isFirstNote(),
			$this->ipAddress()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PtIssueNoteRecord
    {
        return new PtIssueNoteRecord();
    }
}