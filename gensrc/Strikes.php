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

class Strikes implements Table {

    const table = 'strikes';
   
    public static function as(string $aliasName): StrikesAlias
    {
        return new StrikesAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::strikeTime(),
			self::strikeIp(),
			self::userName()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : StrikesRecord
    {
        return new StrikesRecord();
    }
    
    public static function strikeTime() : ColumnField
    {
        return new ColumnField('strikes', 'striketime');
    }
    public static function strikeIp() : ColumnField
    {
        return new ColumnField('strikes', 'strikeip');
    }
    public static function userName() : ColumnField
    {
        return new ColumnField('strikes', 'username');
    }

    public function getTableName(): string
    {
        return 'strikes';
    }
    
    public function __listColumns() : array
    {
        return ['striketime', 'strikeip', 'username'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'striketime' => 'integer', 
			'strikeip' => 'string', 
			'username' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'striketime' => 'strikeTime', 
			'strikeip' => 'strikeIp', 
			'username' => 'userName'
		];
    }

}