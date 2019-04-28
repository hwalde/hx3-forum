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

class InfractionLevel implements Table {

    const table = 'infractionlevel';
   
    public static function as(string $aliasName): InfractionLevelAlias
    {
        return new InfractionLevelAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::infractionLevelId(),
			self::points(),
			self::expires(),
			self::period(),
			self::warning(),
			self::extend()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : InfractionLevelRecord
    {
        return new InfractionLevelRecord();
    }
    
    public static function infractionLevelId() : ColumnField
    {
        return new ColumnField('infractionlevel', 'infractionlevelid');
    }
    public static function points() : ColumnField
    {
        return new ColumnField('infractionlevel', 'points');
    }
    public static function expires() : ColumnField
    {
        return new ColumnField('infractionlevel', 'expires');
    }
    public static function period() : ColumnField
    {
        return new ColumnField('infractionlevel', 'period');
    }
    public static function warning() : ColumnField
    {
        return new ColumnField('infractionlevel', 'warning');
    }
    public static function extend() : ColumnField
    {
        return new ColumnField('infractionlevel', 'extend');
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

}