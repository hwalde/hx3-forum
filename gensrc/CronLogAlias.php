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

class CronLogAlias extends TableAlias {
   
    public function cronLogId() : ColumnField
    {
        return new ColumnField('cronLogId', 'CronLog', 'cronlog', 'cronlogid', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'CronLog', 'cronlog', 'dateline', $this->getAliasName());
    }
    public function description() : ColumnField
    {
        return new ColumnField('description', 'CronLog', 'cronlog', 'description', $this->getAliasName());
    }
    public function type() : ColumnField
    {
        return new ColumnField('type', 'CronLog', 'cronlog', 'type', $this->getAliasName());
    }
    public function varName() : ColumnField
    {
        return new ColumnField('varName', 'CronLog', 'cronlog', 'varname', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'cronlog';
    }
    
    public function __listColumns() : array
    {
        return ['cronlogid', 'dateline', 'description', 'type', 'varname'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['cronlogid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'cronlogid' => 'integer', 
			'dateline' => 'integer', 
			'description' => 'string', 
			'type' => 'integer', 
			'varname' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'cronlogid' => 'cronLogId', 
			'dateline' => 'dateLine', 
			'description' => 'description', 
			'type' => 'type', 
			'varname' => 'varName'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->cronLogId(),
			$this->dateLine(),
			$this->description(),
			$this->type(),
			$this->varName()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : CronLogRecord
    {
        return new CronLogRecord();
    }
}