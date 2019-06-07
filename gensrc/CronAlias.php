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

class CronAlias extends TableAlias {
   
    public function cronId() : ColumnField
    {
        return new ColumnField('cronId', 'Cron', 'cron', 'cronid', $this->getAliasName());
    }
    public function nextRun() : ColumnField
    {
        return new ColumnField('nextRun', 'Cron', 'cron', 'nextrun', $this->getAliasName());
    }
    public function weekDay() : ColumnField
    {
        return new ColumnField('weekDay', 'Cron', 'cron', 'weekday', $this->getAliasName());
    }
    public function day() : ColumnField
    {
        return new ColumnField('day', 'Cron', 'cron', 'day', $this->getAliasName());
    }
    public function hour() : ColumnField
    {
        return new ColumnField('hour', 'Cron', 'cron', 'hour', $this->getAliasName());
    }
    public function minute() : ColumnField
    {
        return new ColumnField('minute', 'Cron', 'cron', 'minute', $this->getAliasName());
    }
    public function fileName() : ColumnField
    {
        return new ColumnField('fileName', 'Cron', 'cron', 'filename', $this->getAliasName());
    }
    public function logLevel() : ColumnField
    {
        return new ColumnField('logLevel', 'Cron', 'cron', 'loglevel', $this->getAliasName());
    }
    public function active() : ColumnField
    {
        return new ColumnField('active', 'Cron', 'cron', 'active', $this->getAliasName());
    }
    public function varName() : ColumnField
    {
        return new ColumnField('varName', 'Cron', 'cron', 'varname', $this->getAliasName());
    }
    public function volatile() : ColumnField
    {
        return new ColumnField('volatile', 'Cron', 'cron', 'volatile', $this->getAliasName());
    }
    public function product() : ColumnField
    {
        return new ColumnField('product', 'Cron', 'cron', 'product', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'cron';
    }
    
    public function __listColumns() : array
    {
        return ['cronid', 'nextrun', 'weekday', 'day', 'hour', 'minute', 'filename', 'loglevel', 'active', 'varname', 'volatile', 'product'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['cronid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'cronid' => 'integer', 
			'nextrun' => 'integer', 
			'weekday' => 'integer', 
			'day' => 'integer', 
			'hour' => 'integer', 
			'minute' => 'string', 
			'filename' => 'string', 
			'loglevel' => 'integer', 
			'active' => 'integer', 
			'varname' => 'string', 
			'volatile' => 'integer', 
			'product' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'cronid' => 'cronId', 
			'nextrun' => 'nextRun', 
			'weekday' => 'weekDay', 
			'day' => 'day', 
			'hour' => 'hour', 
			'minute' => 'minute', 
			'filename' => 'fileName', 
			'loglevel' => 'logLevel', 
			'active' => 'active', 
			'varname' => 'varName', 
			'volatile' => 'volatile', 
			'product' => 'product'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->cronId(),
			$this->nextRun(),
			$this->weekDay(),
			$this->day(),
			$this->hour(),
			$this->minute(),
			$this->fileName(),
			$this->logLevel(),
			$this->active(),
			$this->varName(),
			$this->volatile(),
			$this->product()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : CronRecord
    {
        return new CronRecord();
    }
}