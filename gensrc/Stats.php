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

class Stats implements Table {

    const table = 'stats';
   
    public static function as(string $aliasName): StatsAlias
    {
        return new StatsAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::dateLine(),
			self::nUser(),
			self::nThread(),
			self::nPost(),
			self::ausers()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : StatsRecord
    {
        return new StatsRecord();
    }
    
    public static function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'Stats', 'stats', 'dateline');
    }
    public static function nUser() : ColumnField
    {
        return new ColumnField('nUser', 'Stats', 'stats', 'nuser');
    }
    public static function nThread() : ColumnField
    {
        return new ColumnField('nThread', 'Stats', 'stats', 'nthread');
    }
    public static function nPost() : ColumnField
    {
        return new ColumnField('nPost', 'Stats', 'stats', 'npost');
    }
    public static function ausers() : ColumnField
    {
        return new ColumnField('ausers', 'Stats', 'stats', 'ausers');
    }

    public function getTableName(): string
    {
        return 'stats';
    }
    
    public function __listColumns() : array
    {
        return ['dateline', 'nuser', 'nthread', 'npost', 'ausers'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['dateline'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'dateline' => 'integer', 
			'nuser' => 'integer', 
			'nthread' => 'integer', 
			'npost' => 'integer', 
			'ausers' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'dateline' => 'dateLine', 
			'nuser' => 'nUser', 
			'nthread' => 'nThread', 
			'npost' => 'nPost', 
			'ausers' => 'ausers'
		];
    }
}