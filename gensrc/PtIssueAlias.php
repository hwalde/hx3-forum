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

class PtIssueAlias extends TableAlias {
   
    public function issueId() : ColumnField
    {
        return new ColumnField('issueId', 'PtIssue', 'pt_issue', 'issueid', $this->getAliasName());
    }
    public function projectId() : ColumnField
    {
        return new ColumnField('projectId', 'PtIssue', 'pt_issue', 'projectid', $this->getAliasName());
    }
    public function issueStatusId() : ColumnField
    {
        return new ColumnField('issueStatusId', 'PtIssue', 'pt_issue', 'issuestatusid', $this->getAliasName());
    }
    public function issueTypeId() : ColumnField
    {
        return new ColumnField('issueTypeId', 'PtIssue', 'pt_issue', 'issuetypeid', $this->getAliasName());
    }
    public function title() : ColumnField
    {
        return new ColumnField('title', 'PtIssue', 'pt_issue', 'title', $this->getAliasName());
    }
    public function summary() : ColumnField
    {
        return new ColumnField('summary', 'PtIssue', 'pt_issue', 'summary', $this->getAliasName());
    }
    public function submitUserId() : ColumnField
    {
        return new ColumnField('submitUserId', 'PtIssue', 'pt_issue', 'submituserid', $this->getAliasName());
    }
    public function submitUserName() : ColumnField
    {
        return new ColumnField('submitUserName', 'PtIssue', 'pt_issue', 'submitusername', $this->getAliasName());
    }
    public function submitDate() : ColumnField
    {
        return new ColumnField('submitDate', 'PtIssue', 'pt_issue', 'submitdate', $this->getAliasName());
    }
    public function appliesVersionId() : ColumnField
    {
        return new ColumnField('appliesVersionId', 'PtIssue', 'pt_issue', 'appliesversionid', $this->getAliasName());
    }
    public function isAddressed() : ColumnField
    {
        return new ColumnField('isAddressed', 'PtIssue', 'pt_issue', 'isaddressed', $this->getAliasName());
    }
    public function addressedVersionId() : ColumnField
    {
        return new ColumnField('addressedVersionId', 'PtIssue', 'pt_issue', 'addressedversionid', $this->getAliasName());
    }
    public function priority() : ColumnField
    {
        return new ColumnField('priority', 'PtIssue', 'pt_issue', 'priority', $this->getAliasName());
    }
    public function visible() : ColumnField
    {
        return new ColumnField('visible', 'PtIssue', 'pt_issue', 'visible', $this->getAliasName());
    }
    public function lastPost() : ColumnField
    {
        return new ColumnField('lastPost', 'PtIssue', 'pt_issue', 'lastpost', $this->getAliasName());
    }
    public function lastActivity() : ColumnField
    {
        return new ColumnField('lastActivity', 'PtIssue', 'pt_issue', 'lastactivity', $this->getAliasName());
    }
    public function lastPostUserId() : ColumnField
    {
        return new ColumnField('lastPostUserId', 'PtIssue', 'pt_issue', 'lastpostuserid', $this->getAliasName());
    }
    public function lastPostUserName() : ColumnField
    {
        return new ColumnField('lastPostUserName', 'PtIssue', 'pt_issue', 'lastpostusername', $this->getAliasName());
    }
    public function firstNoteId() : ColumnField
    {
        return new ColumnField('firstNoteId', 'PtIssue', 'pt_issue', 'firstnoteid', $this->getAliasName());
    }
    public function lastNoteId() : ColumnField
    {
        return new ColumnField('lastNoteId', 'PtIssue', 'pt_issue', 'lastnoteid', $this->getAliasName());
    }
    public function attachCount() : ColumnField
    {
        return new ColumnField('attachCount', 'PtIssue', 'pt_issue', 'attachcount', $this->getAliasName());
    }
    public function pendingPetitions() : ColumnField
    {
        return new ColumnField('pendingPetitions', 'PtIssue', 'pt_issue', 'pendingpetitions', $this->getAliasName());
    }
    public function replyCount() : ColumnField
    {
        return new ColumnField('replyCount', 'PtIssue', 'pt_issue', 'replycount', $this->getAliasName());
    }
    public function votePositive() : ColumnField
    {
        return new ColumnField('votePositive', 'PtIssue', 'pt_issue', 'votepositive', $this->getAliasName());
    }
    public function voteNegative() : ColumnField
    {
        return new ColumnField('voteNegative', 'PtIssue', 'pt_issue', 'votenegative', $this->getAliasName());
    }
    public function projectCategoryId() : ColumnField
    {
        return new ColumnField('projectCategoryId', 'PtIssue', 'pt_issue', 'projectcategoryid', $this->getAliasName());
    }
    public function assignedUsers() : ColumnField
    {
        return new ColumnField('assignedUsers', 'PtIssue', 'pt_issue', 'assignedusers', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'pt_issue';
    }
    
    public function __listColumns() : array
    {
        return ['issueid', 'projectid', 'issuestatusid', 'issuetypeid', 'title', 'summary', 'submituserid', 'submitusername', 'submitdate', 'appliesversionid', 'isaddressed', 'addressedversionid', 'priority', 'visible', 'lastpost', 'lastactivity', 'lastpostuserid', 'lastpostusername', 'firstnoteid', 'lastnoteid', 'attachcount', 'pendingpetitions', 'replycount', 'votepositive', 'votenegative', 'projectcategoryid', 'assignedusers'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['issueid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'issueid' => 'integer', 
			'projectid' => 'integer', 
			'issuestatusid' => 'integer', 
			'issuetypeid' => 'string', 
			'title' => 'string', 
			'summary' => 'string', 
			'submituserid' => 'integer', 
			'submitusername' => 'string', 
			'submitdate' => 'integer', 
			'appliesversionid' => 'integer', 
			'isaddressed' => 'integer', 
			'addressedversionid' => 'integer', 
			'priority' => 'integer', 
			'visible' => 'string', 
			'lastpost' => 'integer', 
			'lastactivity' => 'integer', 
			'lastpostuserid' => 'integer', 
			'lastpostusername' => 'string', 
			'firstnoteid' => 'integer', 
			'lastnoteid' => 'integer', 
			'attachcount' => 'integer', 
			'pendingpetitions' => 'integer', 
			'replycount' => 'integer', 
			'votepositive' => 'integer', 
			'votenegative' => 'integer', 
			'projectcategoryid' => 'integer', 
			'assignedusers' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'issueid' => 'issueId', 
			'projectid' => 'projectId', 
			'issuestatusid' => 'issueStatusId', 
			'issuetypeid' => 'issueTypeId', 
			'title' => 'title', 
			'summary' => 'summary', 
			'submituserid' => 'submitUserId', 
			'submitusername' => 'submitUserName', 
			'submitdate' => 'submitDate', 
			'appliesversionid' => 'appliesVersionId', 
			'isaddressed' => 'isAddressed', 
			'addressedversionid' => 'addressedVersionId', 
			'priority' => 'priority', 
			'visible' => 'visible', 
			'lastpost' => 'lastPost', 
			'lastactivity' => 'lastActivity', 
			'lastpostuserid' => 'lastPostUserId', 
			'lastpostusername' => 'lastPostUserName', 
			'firstnoteid' => 'firstNoteId', 
			'lastnoteid' => 'lastNoteId', 
			'attachcount' => 'attachCount', 
			'pendingpetitions' => 'pendingPetitions', 
			'replycount' => 'replyCount', 
			'votepositive' => 'votePositive', 
			'votenegative' => 'voteNegative', 
			'projectcategoryid' => 'projectCategoryId', 
			'assignedusers' => 'assignedUsers'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->issueId(),
			$this->projectId(),
			$this->issueStatusId(),
			$this->issueTypeId(),
			$this->title(),
			$this->summary(),
			$this->submitUserId(),
			$this->submitUserName(),
			$this->submitDate(),
			$this->appliesVersionId(),
			$this->isAddressed(),
			$this->addressedVersionId(),
			$this->priority(),
			$this->visible(),
			$this->lastPost(),
			$this->lastActivity(),
			$this->lastPostUserId(),
			$this->lastPostUserName(),
			$this->firstNoteId(),
			$this->lastNoteId(),
			$this->attachCount(),
			$this->pendingPetitions(),
			$this->replyCount(),
			$this->votePositive(),
			$this->voteNegative(),
			$this->projectCategoryId(),
			$this->assignedUsers()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PtIssueRecord
    {
        return new PtIssueRecord();
    }
}