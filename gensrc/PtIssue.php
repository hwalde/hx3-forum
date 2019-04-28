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

class PtIssue implements Table {

    const table = 'pt_issue';
   
    public static function as(string $aliasName): PtIssueAlias
    {
        return new PtIssueAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::issueId(),
			self::projectId(),
			self::issueStatusId(),
			self::issueTypeId(),
			self::title(),
			self::summary(),
			self::submitUserId(),
			self::submitUserName(),
			self::submitDate(),
			self::appliesVersionId(),
			self::isAddressed(),
			self::addressedVersionId(),
			self::priority(),
			self::visible(),
			self::lastPost(),
			self::lastActivity(),
			self::lastPostUserId(),
			self::lastPostUserName(),
			self::firstNoteId(),
			self::lastNoteId(),
			self::attachCount(),
			self::pendingPetitions(),
			self::replyCount(),
			self::votePositive(),
			self::voteNegative(),
			self::projectCategoryId(),
			self::assignedUsers()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PtIssueRecord
    {
        return new PtIssueRecord();
    }
    
    public static function issueId() : ColumnField
    {
        return new ColumnField('pt_issue', 'issueid');
    }
    public static function projectId() : ColumnField
    {
        return new ColumnField('pt_issue', 'projectid');
    }
    public static function issueStatusId() : ColumnField
    {
        return new ColumnField('pt_issue', 'issuestatusid');
    }
    public static function issueTypeId() : ColumnField
    {
        return new ColumnField('pt_issue', 'issuetypeid');
    }
    public static function title() : ColumnField
    {
        return new ColumnField('pt_issue', 'title');
    }
    public static function summary() : ColumnField
    {
        return new ColumnField('pt_issue', 'summary');
    }
    public static function submitUserId() : ColumnField
    {
        return new ColumnField('pt_issue', 'submituserid');
    }
    public static function submitUserName() : ColumnField
    {
        return new ColumnField('pt_issue', 'submitusername');
    }
    public static function submitDate() : ColumnField
    {
        return new ColumnField('pt_issue', 'submitdate');
    }
    public static function appliesVersionId() : ColumnField
    {
        return new ColumnField('pt_issue', 'appliesversionid');
    }
    public static function isAddressed() : ColumnField
    {
        return new ColumnField('pt_issue', 'isaddressed');
    }
    public static function addressedVersionId() : ColumnField
    {
        return new ColumnField('pt_issue', 'addressedversionid');
    }
    public static function priority() : ColumnField
    {
        return new ColumnField('pt_issue', 'priority');
    }
    public static function visible() : ColumnField
    {
        return new ColumnField('pt_issue', 'visible');
    }
    public static function lastPost() : ColumnField
    {
        return new ColumnField('pt_issue', 'lastpost');
    }
    public static function lastActivity() : ColumnField
    {
        return new ColumnField('pt_issue', 'lastactivity');
    }
    public static function lastPostUserId() : ColumnField
    {
        return new ColumnField('pt_issue', 'lastpostuserid');
    }
    public static function lastPostUserName() : ColumnField
    {
        return new ColumnField('pt_issue', 'lastpostusername');
    }
    public static function firstNoteId() : ColumnField
    {
        return new ColumnField('pt_issue', 'firstnoteid');
    }
    public static function lastNoteId() : ColumnField
    {
        return new ColumnField('pt_issue', 'lastnoteid');
    }
    public static function attachCount() : ColumnField
    {
        return new ColumnField('pt_issue', 'attachcount');
    }
    public static function pendingPetitions() : ColumnField
    {
        return new ColumnField('pt_issue', 'pendingpetitions');
    }
    public static function replyCount() : ColumnField
    {
        return new ColumnField('pt_issue', 'replycount');
    }
    public static function votePositive() : ColumnField
    {
        return new ColumnField('pt_issue', 'votepositive');
    }
    public static function voteNegative() : ColumnField
    {
        return new ColumnField('pt_issue', 'votenegative');
    }
    public static function projectCategoryId() : ColumnField
    {
        return new ColumnField('pt_issue', 'projectcategoryid');
    }
    public static function assignedUsers() : ColumnField
    {
        return new ColumnField('pt_issue', 'assignedusers');
    }

    public function getTableName(): string
    {
        return 'pt_issue';
    }
    
    public function __listColumns() : array
    {
        return ['issueid', 'projectid', 'issuestatusid', 'issuetypeid', 'title', 'summary', 'submituserid', 'submitusername', 'submitdate', 'appliesversionid', 'isaddressed', 'addressedversionid', 'priority', 'visible', 'lastpost', 'lastactivity', 'lastpostuserid', 'lastpostusername', 'firstnoteid', 'lastnoteid', 'attachcount', 'pendingpetitions', 'replycount', 'votepositive', 'votenegative', 'projectcategoryid', 'assignedusers'];
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

}