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

class PtIssueSubscribeAlias extends TableAlias {
   
    public function userId() : ColumnField
    {
        return new ColumnField('pt_issuesubscribe', 'userid', $this->getAliasName());
    }
    public function issueId() : ColumnField
    {
        return new ColumnField('pt_issuesubscribe', 'issueid', $this->getAliasName());
    }
    public function subscribeType() : ColumnField
    {
        return new ColumnField('pt_issuesubscribe', 'subscribetype', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'pt_issuesubscribe';
    }
    
    public function __listColumns() : array
    {
        return ['userid', 'issueid', 'subscribetype'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'userid' => 'integer', 
			'issueid' => 'integer', 
			'subscribetype' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'userid' => 'userId', 
			'issueid' => 'issueId', 
			'subscribetype' => 'subscribeType'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->userId(),
			$this->issueId(),
			$this->subscribeType()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PtIssueSubscribeRecord
    {
        return new PtIssueSubscribeRecord();
    }
}