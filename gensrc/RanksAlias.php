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

class RanksAlias extends TableAlias {
   
    public function rankId() : ColumnField
    {
        return new ColumnField('rankId', 'Ranks', 'ranks', 'rankid', $this->getAliasName());
    }
    public function minPosts() : ColumnField
    {
        return new ColumnField('minPosts', 'Ranks', 'ranks', 'minposts', $this->getAliasName());
    }
    public function rankLevel() : ColumnField
    {
        return new ColumnField('rankLevel', 'Ranks', 'ranks', 'ranklevel', $this->getAliasName());
    }
    public function rankimg() : ColumnField
    {
        return new ColumnField('rankimg', 'Ranks', 'ranks', 'rankimg', $this->getAliasName());
    }
    public function userGroupId() : ColumnField
    {
        return new ColumnField('userGroupId', 'Ranks', 'ranks', 'usergroupid', $this->getAliasName());
    }
    public function type() : ColumnField
    {
        return new ColumnField('type', 'Ranks', 'ranks', 'type', $this->getAliasName());
    }
    public function importRanksId() : ColumnField
    {
        return new ColumnField('importRanksId', 'Ranks', 'ranks', 'importranksid', $this->getAliasName());
    }
    public function stack() : ColumnField
    {
        return new ColumnField('stack', 'Ranks', 'ranks', 'stack', $this->getAliasName());
    }
    public function display() : ColumnField
    {
        return new ColumnField('display', 'Ranks', 'ranks', 'display', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'ranks';
    }
    
    public function __listColumns() : array
    {
        return ['rankid', 'minposts', 'ranklevel', 'rankimg', 'usergroupid', 'type', 'importranksid', 'stack', 'display'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['rankid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'rankid' => 'integer', 
			'minposts' => 'integer', 
			'ranklevel' => 'integer', 
			'rankimg' => 'string', 
			'usergroupid' => 'integer', 
			'type' => 'integer', 
			'importranksid' => 'integer', 
			'stack' => 'integer', 
			'display' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'rankid' => 'rankId', 
			'minposts' => 'minPosts', 
			'ranklevel' => 'rankLevel', 
			'rankimg' => 'rankimg', 
			'usergroupid' => 'userGroupId', 
			'type' => 'type', 
			'importranksid' => 'importRanksId', 
			'stack' => 'stack', 
			'display' => 'display'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->rankId(),
			$this->minPosts(),
			$this->rankLevel(),
			$this->rankimg(),
			$this->userGroupId(),
			$this->type(),
			$this->importRanksId(),
			$this->stack(),
			$this->display()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : RanksRecord
    {
        return new RanksRecord();
    }
}