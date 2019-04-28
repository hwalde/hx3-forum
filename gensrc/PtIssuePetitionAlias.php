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

class PtIssuePetitionAlias extends TableAlias {
   
    public function issueNoteId() : ColumnField
    {
        return new ColumnField('pt_issuepetition', 'issuenoteid', $this->getAliasName());
    }
    public function petitionStatusId() : ColumnField
    {
        return new ColumnField('pt_issuepetition', 'petitionstatusid', $this->getAliasName());
    }
    public function resolution() : ColumnField
    {
        return new ColumnField('pt_issuepetition', 'resolution', $this->getAliasName());
    }
    public function resolveUserId() : ColumnField
    {
        return new ColumnField('pt_issuepetition', 'resolveuserid', $this->getAliasName());
    }
    public function resolveDate() : ColumnField
    {
        return new ColumnField('pt_issuepetition', 'resolvedate', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'pt_issuepetition';
    }
    
    public function __listColumns() : array
    {
        return ['issuenoteid', 'petitionstatusid', 'resolution', 'resolveuserid', 'resolvedate'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'issuenoteid' => 'integer', 
			'petitionstatusid' => 'integer', 
			'resolution' => 'string', 
			'resolveuserid' => 'integer', 
			'resolvedate' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'issuenoteid' => 'issueNoteId', 
			'petitionstatusid' => 'petitionStatusId', 
			'resolution' => 'resolution', 
			'resolveuserid' => 'resolveUserId', 
			'resolvedate' => 'resolveDate'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->issueNoteId(),
			$this->petitionStatusId(),
			$this->resolution(),
			$this->resolveUserId(),
			$this->resolveDate()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PtIssuePetitionRecord
    {
        return new PtIssuePetitionRecord();
    }
}