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

class InfractionGroupAlias extends TableAlias {
   
    public function infractionGroupId() : ColumnField
    {
        return new ColumnField('infractionGroupId', 'InfractionGroup', 'infractiongroup', 'infractiongroupid', $this->getAliasName());
    }
    public function userGroupId() : ColumnField
    {
        return new ColumnField('userGroupId', 'InfractionGroup', 'infractiongroup', 'usergroupid', $this->getAliasName());
    }
    public function oruserGroupId() : ColumnField
    {
        return new ColumnField('oruserGroupId', 'InfractionGroup', 'infractiongroup', 'orusergroupid', $this->getAliasName());
    }
    public function pointLevel() : ColumnField
    {
        return new ColumnField('pointLevel', 'InfractionGroup', 'infractiongroup', 'pointlevel', $this->getAliasName());
    }
    public function override() : ColumnField
    {
        return new ColumnField('override', 'InfractionGroup', 'infractiongroup', 'override', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'infractiongroup';
    }
    
    public function __listColumns() : array
    {
        return ['infractiongroupid', 'usergroupid', 'orusergroupid', 'pointlevel', 'override'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['infractiongroupid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'infractiongroupid' => 'integer', 
			'usergroupid' => 'integer', 
			'orusergroupid' => 'integer', 
			'pointlevel' => 'integer', 
			'override' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'infractiongroupid' => 'infractionGroupId', 
			'usergroupid' => 'userGroupId', 
			'orusergroupid' => 'oruserGroupId', 
			'pointlevel' => 'pointLevel', 
			'override' => 'override'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->infractionGroupId(),
			$this->userGroupId(),
			$this->oruserGroupId(),
			$this->pointLevel(),
			$this->override()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : InfractionGroupRecord
    {
        return new InfractionGroupRecord();
    }
}