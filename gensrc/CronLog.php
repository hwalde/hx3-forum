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

class CronLog implements Table {

    const table = 'cronlog';
   
    public static function as(string $aliasName): CronLogAlias
    {
        return new CronLogAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::cronLogId(),
			self::dateLine(),
			self::description(),
			self::type(),
			self::varName()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : CronLogRecord
    {
        return new CronLogRecord();
    }
    
    public static function cronLogId() : ColumnField
    {
        return new ColumnField('cronlog', 'cronlogid');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('cronlog', 'dateline');
    }
    public static function description() : ColumnField
    {
        return new ColumnField('cronlog', 'description');
    }
    public static function type() : ColumnField
    {
        return new ColumnField('cronlog', 'type');
    }
    public static function varName() : ColumnField
    {
        return new ColumnField('cronlog', 'varname');
    }

    public function getTableName(): string
    {
        return 'cronlog';
    }
    
    public function __listColumns() : array
    {
        return ['cronlogid', 'dateline', 'description', 'type', 'varname'];
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

}