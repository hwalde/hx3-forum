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

class PtProjectVersionGroup implements Table {

    const table = 'pt_projectversiongroup';
   
    public static function as(string $aliasName): PtProjectVersionGroupAlias
    {
        return new PtProjectVersionGroupAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::projectVersionGroupId(),
			self::projectId(),
			self::groupName(),
			self::displayOrder()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PtProjectVersionGroupRecord
    {
        return new PtProjectVersionGroupRecord();
    }
    
    public static function projectVersionGroupId() : ColumnField
    {
        return new ColumnField('projectVersionGroupId', 'PtProjectVersionGroup', 'pt_projectversiongroup', 'projectversiongroupid');
    }
    public static function projectId() : ColumnField
    {
        return new ColumnField('projectId', 'PtProjectVersionGroup', 'pt_projectversiongroup', 'projectid');
    }
    public static function groupName() : ColumnField
    {
        return new ColumnField('groupName', 'PtProjectVersionGroup', 'pt_projectversiongroup', 'groupname');
    }
    public static function displayOrder() : ColumnField
    {
        return new ColumnField('displayOrder', 'PtProjectVersionGroup', 'pt_projectversiongroup', 'displayorder');
    }

    public function getTableName(): string
    {
        return 'pt_projectversiongroup';
    }
    
    public function __listColumns() : array
    {
        return ['projectversiongroupid', 'projectid', 'groupname', 'displayorder'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['projectversiongroupid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'projectversiongroupid' => 'integer', 
			'projectid' => 'integer', 
			'groupname' => 'string', 
			'displayorder' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'projectversiongroupid' => 'projectVersionGroupId', 
			'projectid' => 'projectId', 
			'groupname' => 'groupName', 
			'displayorder' => 'displayOrder'
		];
    }
}