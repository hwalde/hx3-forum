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

use POOQ\ColumnField;
use POOQ\ColumnFieldList;
use POOQ\Table;

class Cron implements Table {

    const table = 'cron';
   
    public static function as(string $aliasName): CronAlias
    {
        return new CronAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::cronId(),
			self::nextRun(),
			self::weekDay(),
			self::day(),
			self::hour(),
			self::minute(),
			self::fileName(),
			self::logLevel(),
			self::active(),
			self::varName(),
			self::volatile(),
			self::product()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : CronRecord
    {
        return new CronRecord();
    }
    
    public static function cronId() : ColumnField
    {
        return new ColumnField('cronId', 'Cron', 'cron', 'cronid');
    }
    public static function nextRun() : ColumnField
    {
        return new ColumnField('nextRun', 'Cron', 'cron', 'nextrun');
    }
    public static function weekDay() : ColumnField
    {
        return new ColumnField('weekDay', 'Cron', 'cron', 'weekday');
    }
    public static function day() : ColumnField
    {
        return new ColumnField('day', 'Cron', 'cron', 'day');
    }
    public static function hour() : ColumnField
    {
        return new ColumnField('hour', 'Cron', 'cron', 'hour');
    }
    public static function minute() : ColumnField
    {
        return new ColumnField('minute', 'Cron', 'cron', 'minute');
    }
    public static function fileName() : ColumnField
    {
        return new ColumnField('fileName', 'Cron', 'cron', 'filename');
    }
    public static function logLevel() : ColumnField
    {
        return new ColumnField('logLevel', 'Cron', 'cron', 'loglevel');
    }
    public static function active() : ColumnField
    {
        return new ColumnField('active', 'Cron', 'cron', 'active');
    }
    public static function varName() : ColumnField
    {
        return new ColumnField('varName', 'Cron', 'cron', 'varname');
    }
    public static function volatile() : ColumnField
    {
        return new ColumnField('volatile', 'Cron', 'cron', 'volatile');
    }
    public static function product() : ColumnField
    {
        return new ColumnField('product', 'Cron', 'cron', 'product');
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
}