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

class PtIssueTypeAlias extends TableAlias {
   
    public function issueTypeId() : ColumnField
    {
        return new ColumnField('pt_issuetype', 'issuetypeid', $this->getAliasName());
    }
    public function displayOrder() : ColumnField
    {
        return new ColumnField('pt_issuetype', 'displayorder', $this->getAliasName());
    }
    public function iconFile() : ColumnField
    {
        return new ColumnField('pt_issuetype', 'iconfile', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'pt_issuetype';
    }
    
    public function __listColumns() : array
    {
        return ['issuetypeid', 'displayorder', 'iconfile'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'issuetypeid' => 'string', 
			'displayorder' => 'integer', 
			'iconfile' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'issuetypeid' => 'issueTypeId', 
			'displayorder' => 'displayOrder', 
			'iconfile' => 'iconFile'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->issueTypeId(),
			$this->displayOrder(),
			$this->iconFile()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PtIssueTypeRecord
    {
        return new PtIssueTypeRecord();
    }
}