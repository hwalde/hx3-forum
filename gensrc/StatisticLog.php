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

class StatisticLog implements Table {

    const table = 'statistik_log';
   
    public static function as(string $aliasName): StatisticLogAlias
    {
        return new StatisticLogAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::id(),
			self::IP(),
			self::loggedInSince(),
			self::browserStamp()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : StatisticLogRecord
    {
        return new StatisticLogRecord();
    }
    
    public static function id() : ColumnField
    {
        return new ColumnField('id', 'StatisticLog', 'statistik_log', 'ID');
    }
    public static function IP() : ColumnField
    {
        return new ColumnField('IP', 'StatisticLog', 'statistik_log', 'IP');
    }
    public static function loggedInSince() : ColumnField
    {
        return new ColumnField('loggedInSince', 'StatisticLog', 'statistik_log', 'eingelogt_seit');
    }
    public static function browserStamp() : ColumnField
    {
        return new ColumnField('browserStamp', 'StatisticLog', 'statistik_log', 'Browserstamp');
    }

    public function getTableName(): string
    {
        return 'statistik_log';
    }
    
    public function __listColumns() : array
    {
        return ['ID', 'IP', 'eingelogt_seit', 'Browserstamp'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['ID'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'ID' => 'integer', 
			'IP' => 'string', 
			'eingelogt_seit' => 'integer', 
			'Browserstamp' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'ID' => 'id', 
			'IP' => 'IP', 
			'eingelogt_seit' => 'loggedInSince', 
			'Browserstamp' => 'browserStamp'
		];
    }
}