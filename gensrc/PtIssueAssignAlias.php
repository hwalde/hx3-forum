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

class PtIssueAssignAlias extends TableAlias {
   
    public function issueId() : ColumnField
    {
        return new ColumnField('pt_issueassign', 'issueid', $this->getAliasName());
    }
    public function userId() : ColumnField
    {
        return new ColumnField('pt_issueassign', 'userid', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('pt_issueassign', 'dateline', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'pt_issueassign';
    }
    
    public function __listColumns() : array
    {
        return ['issueid', 'userid', 'dateline'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'issueid' => 'integer', 
			'userid' => 'integer', 
			'dateline' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'issueid' => 'issueId', 
			'userid' => 'userId', 
			'dateline' => 'dateLine'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->issueId(),
			$this->userId(),
			$this->dateLine()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PtIssueAssignRecord
    {
        return new PtIssueAssignRecord();
    }
}