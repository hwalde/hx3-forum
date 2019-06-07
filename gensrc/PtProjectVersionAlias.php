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

class PtProjectVersionAlias extends TableAlias {
   
    public function projectVersionId() : ColumnField
    {
        return new ColumnField('projectVersionId', 'PtProjectVersion', 'pt_projectversion', 'projectversionid', $this->getAliasName());
    }
    public function projectId() : ColumnField
    {
        return new ColumnField('projectId', 'PtProjectVersion', 'pt_projectversion', 'projectid', $this->getAliasName());
    }
    public function versionName() : ColumnField
    {
        return new ColumnField('versionName', 'PtProjectVersion', 'pt_projectversion', 'versionname', $this->getAliasName());
    }
    public function projectVersionGroupId() : ColumnField
    {
        return new ColumnField('projectVersionGroupId', 'PtProjectVersion', 'pt_projectversion', 'projectversiongroupid', $this->getAliasName());
    }
    public function displayOrder() : ColumnField
    {
        return new ColumnField('displayOrder', 'PtProjectVersion', 'pt_projectversion', 'displayorder', $this->getAliasName());
    }
    public function effectiveOrder() : ColumnField
    {
        return new ColumnField('effectiveOrder', 'PtProjectVersion', 'pt_projectversion', 'effectiveorder', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'pt_projectversion';
    }
    
    public function __listColumns() : array
    {
        return ['projectversionid', 'projectid', 'versionname', 'projectversiongroupid', 'displayorder', 'effectiveorder'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['projectversionid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'projectversionid' => 'integer', 
			'projectid' => 'integer', 
			'versionname' => 'string', 
			'projectversiongroupid' => 'integer', 
			'displayorder' => 'integer', 
			'effectiveorder' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'projectversionid' => 'projectVersionId', 
			'projectid' => 'projectId', 
			'versionname' => 'versionName', 
			'projectversiongroupid' => 'projectVersionGroupId', 
			'displayorder' => 'displayOrder', 
			'effectiveorder' => 'effectiveOrder'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->projectVersionId(),
			$this->projectId(),
			$this->versionName(),
			$this->projectVersionGroupId(),
			$this->displayOrder(),
			$this->effectiveOrder()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PtProjectVersionRecord
    {
        return new PtProjectVersionRecord();
    }
}