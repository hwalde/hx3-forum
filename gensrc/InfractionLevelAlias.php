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

class InfractionLevelAlias extends TableAlias {
   
    public function infractionLevelId() : ColumnField
    {
        return new ColumnField('infractionlevel', 'infractionlevelid', $this->getAliasName());
    }
    public function points() : ColumnField
    {
        return new ColumnField('infractionlevel', 'points', $this->getAliasName());
    }
    public function expires() : ColumnField
    {
        return new ColumnField('infractionlevel', 'expires', $this->getAliasName());
    }
    public function period() : ColumnField
    {
        return new ColumnField('infractionlevel', 'period', $this->getAliasName());
    }
    public function warning() : ColumnField
    {
        return new ColumnField('infractionlevel', 'warning', $this->getAliasName());
    }
    public function extend() : ColumnField
    {
        return new ColumnField('infractionlevel', 'extend', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'infractionlevel';
    }
    
    public function __listColumns() : array
    {
        return ['infractionlevelid', 'points', 'expires', 'period', 'warning', 'extend'];
    }
    
    public function __listNullableColumns() : array
    {
        return ['warning'];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'infractionlevelid' => 'integer', 
			'points' => 'integer', 
			'expires' => 'integer', 
			'period' => 'string', 
			'warning' => 'integer', 
			'extend' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'infractionlevelid' => 'infractionLevelId', 
			'points' => 'points', 
			'expires' => 'expires', 
			'period' => 'period', 
			'warning' => 'warning', 
			'extend' => 'extend'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->infractionLevelId(),
			$this->points(),
			$this->expires(),
			$this->period(),
			$this->warning(),
			$this->extend()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : InfractionLevelRecord
    {
        return new InfractionLevelRecord();
    }
}