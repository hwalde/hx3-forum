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

class PtProjectTypeAlias extends TableAlias {
   
    public function projectId() : ColumnField
    {
        return new ColumnField('pt_projecttype', 'projectid', $this->getAliasName());
    }
    public function issueTypeId() : ColumnField
    {
        return new ColumnField('pt_projecttype', 'issuetypeid', $this->getAliasName());
    }
    public function startStatusId() : ColumnField
    {
        return new ColumnField('pt_projecttype', 'startstatusid', $this->getAliasName());
    }
    public function issueCount() : ColumnField
    {
        return new ColumnField('pt_projecttype', 'issuecount', $this->getAliasName());
    }
    public function lastActivity() : ColumnField
    {
        return new ColumnField('pt_projecttype', 'lastactivity', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'pt_projecttype';
    }
    
    public function __listColumns() : array
    {
        return ['projectid', 'issuetypeid', 'startstatusid', 'issuecount', 'lastactivity'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'projectid' => 'integer', 
			'issuetypeid' => 'string', 
			'startstatusid' => 'integer', 
			'issuecount' => 'integer', 
			'lastactivity' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'projectid' => 'projectId', 
			'issuetypeid' => 'issueTypeId', 
			'startstatusid' => 'startStatusId', 
			'issuecount' => 'issueCount', 
			'lastactivity' => 'lastActivity'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->projectId(),
			$this->issueTypeId(),
			$this->startStatusId(),
			$this->issueCount(),
			$this->lastActivity()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PtProjectTypeRecord
    {
        return new PtProjectTypeRecord();
    }
}