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

class PtIssueVoteAlias extends TableAlias {
   
    public function issueVoteId() : ColumnField
    {
        return new ColumnField('pt_issuevote', 'issuevoteid', $this->getAliasName());
    }
    public function userId() : ColumnField
    {
        return new ColumnField('pt_issuevote', 'userid', $this->getAliasName());
    }
    public function ipAddress() : ColumnField
    {
        return new ColumnField('pt_issuevote', 'ipaddress', $this->getAliasName());
    }
    public function issueId() : ColumnField
    {
        return new ColumnField('pt_issuevote', 'issueid', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('pt_issuevote', 'dateline', $this->getAliasName());
    }
    public function vote() : ColumnField
    {
        return new ColumnField('pt_issuevote', 'vote', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'pt_issuevote';
    }
    
    public function __listColumns() : array
    {
        return ['issuevoteid', 'userid', 'ipaddress', 'issueid', 'dateline', 'vote'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'issuevoteid' => 'integer', 
			'userid' => 'integer', 
			'ipaddress' => 'string', 
			'issueid' => 'integer', 
			'dateline' => 'integer', 
			'vote' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'issuevoteid' => 'issueVoteId', 
			'userid' => 'userId', 
			'ipaddress' => 'ipAddress', 
			'issueid' => 'issueId', 
			'dateline' => 'dateLine', 
			'vote' => 'vote'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->issueVoteId(),
			$this->userId(),
			$this->ipAddress(),
			$this->issueId(),
			$this->dateLine(),
			$this->vote()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PtIssueVoteRecord
    {
        return new PtIssueVoteRecord();
    }
}