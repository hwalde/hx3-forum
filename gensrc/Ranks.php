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

class Ranks implements Table {

    const table = 'ranks';
   
    public static function as(string $aliasName): RanksAlias
    {
        return new RanksAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::rankId(),
			self::minPosts(),
			self::rankLevel(),
			self::rankimg(),
			self::userGroupId(),
			self::type(),
			self::importRanksId(),
			self::stack(),
			self::display()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : RanksRecord
    {
        return new RanksRecord();
    }
    
    public static function rankId() : ColumnField
    {
        return new ColumnField('rankId', 'Ranks', 'ranks', 'rankid');
    }
    public static function minPosts() : ColumnField
    {
        return new ColumnField('minPosts', 'Ranks', 'ranks', 'minposts');
    }
    public static function rankLevel() : ColumnField
    {
        return new ColumnField('rankLevel', 'Ranks', 'ranks', 'ranklevel');
    }
    public static function rankimg() : ColumnField
    {
        return new ColumnField('rankimg', 'Ranks', 'ranks', 'rankimg');
    }
    public static function userGroupId() : ColumnField
    {
        return new ColumnField('userGroupId', 'Ranks', 'ranks', 'usergroupid');
    }
    public static function type() : ColumnField
    {
        return new ColumnField('type', 'Ranks', 'ranks', 'type');
    }
    public static function importRanksId() : ColumnField
    {
        return new ColumnField('importRanksId', 'Ranks', 'ranks', 'importranksid');
    }
    public static function stack() : ColumnField
    {
        return new ColumnField('stack', 'Ranks', 'ranks', 'stack');
    }
    public static function display() : ColumnField
    {
        return new ColumnField('display', 'Ranks', 'ranks', 'display');
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
}