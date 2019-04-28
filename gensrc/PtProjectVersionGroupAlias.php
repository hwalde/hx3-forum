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

class PtProjectVersionGroupAlias extends TableAlias {
   
    public function projectVersionGroupId() : ColumnField
    {
        return new ColumnField('pt_projectversiongroup', 'projectversiongroupid', $this->getAliasName());
    }
    public function projectId() : ColumnField
    {
        return new ColumnField('pt_projectversiongroup', 'projectid', $this->getAliasName());
    }
    public function groupName() : ColumnField
    {
        return new ColumnField('pt_projectversiongroup', 'groupname', $this->getAliasName());
    }
    public function displayOrder() : ColumnField
    {
        return new ColumnField('pt_projectversiongroup', 'displayorder', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'pt_projectversiongroup';
    }
    
    public function __listColumns() : array
    {
        return ['projectversiongroupid', 'projectid', 'groupname', 'displayorder'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'projectversiongroupid' => 'integer', 
			'projectid' => 'integer', 
			'groupname' => 'string', 
			'displayorder' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'projectversiongroupid' => 'projectVersionGroupId', 
			'projectid' => 'projectId', 
			'groupname' => 'groupName', 
			'displayorder' => 'displayOrder'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->projectVersionGroupId(),
			$this->projectId(),
			$this->groupName(),
			$this->displayOrder()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PtProjectVersionGroupRecord
    {
        return new PtProjectVersionGroupRecord();
    }
}