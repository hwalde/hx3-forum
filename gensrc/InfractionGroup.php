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

class InfractionGroup implements Table {

    const table = 'infractiongroup';
   
    public static function as(string $aliasName): InfractionGroupAlias
    {
        return new InfractionGroupAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::infractionGroupId(),
			self::userGroupId(),
			self::oruserGroupId(),
			self::pointLevel(),
			self::override()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : InfractionGroupRecord
    {
        return new InfractionGroupRecord();
    }
    
    public static function infractionGroupId() : ColumnField
    {
        return new ColumnField('infractiongroup', 'infractiongroupid');
    }
    public static function userGroupId() : ColumnField
    {
        return new ColumnField('infractiongroup', 'usergroupid');
    }
    public static function oruserGroupId() : ColumnField
    {
        return new ColumnField('infractiongroup', 'orusergroupid');
    }
    public static function pointLevel() : ColumnField
    {
        return new ColumnField('infractiongroup', 'pointlevel');
    }
    public static function override() : ColumnField
    {
        return new ColumnField('infractiongroup', 'override');
    }

    public function getTableName(): string
    {
        return 'infractiongroup';
    }
    
    public function __listColumns() : array
    {
        return ['infractiongroupid', 'usergroupid', 'orusergroupid', 'pointlevel', 'override'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'infractiongroupid' => 'integer', 
			'usergroupid' => 'integer', 
			'orusergroupid' => 'integer', 
			'pointlevel' => 'integer', 
			'override' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'infractiongroupid' => 'infractionGroupId', 
			'usergroupid' => 'userGroupId', 
			'orusergroupid' => 'oruserGroupId', 
			'pointlevel' => 'pointLevel', 
			'override' => 'override'
		];
    }

}