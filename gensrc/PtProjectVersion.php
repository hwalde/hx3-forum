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

class PtProjectVersion implements Table {

    const table = 'pt_projectversion';
   
    public static function as(string $aliasName): PtProjectVersionAlias
    {
        return new PtProjectVersionAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::projectVersionId(),
			self::projectId(),
			self::versionName(),
			self::projectVersionGroupId(),
			self::displayOrder(),
			self::effectiveOrder()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PtProjectVersionRecord
    {
        return new PtProjectVersionRecord();
    }
    
    public static function projectVersionId() : ColumnField
    {
        return new ColumnField('projectVersionId', 'PtProjectVersion', 'pt_projectversion', 'projectversionid');
    }
    public static function projectId() : ColumnField
    {
        return new ColumnField('projectId', 'PtProjectVersion', 'pt_projectversion', 'projectid');
    }
    public static function versionName() : ColumnField
    {
        return new ColumnField('versionName', 'PtProjectVersion', 'pt_projectversion', 'versionname');
    }
    public static function projectVersionGroupId() : ColumnField
    {
        return new ColumnField('projectVersionGroupId', 'PtProjectVersion', 'pt_projectversion', 'projectversiongroupid');
    }
    public static function displayOrder() : ColumnField
    {
        return new ColumnField('displayOrder', 'PtProjectVersion', 'pt_projectversion', 'displayorder');
    }
    public static function effectiveOrder() : ColumnField
    {
        return new ColumnField('effectiveOrder', 'PtProjectVersion', 'pt_projectversion', 'effectiveorder');
    }

    public function getTableName(): string
    {
        return 'pt_projectversion';
    }
    
    public function __listColumns() : array
    {
        return ['projectversionid', 'projectid', 'versionname', 'projectversiongroupid', 'displayorder', 'effectiveorder'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['projectversionid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'projectversionid' => 'integer', 
			'projectid' => 'integer', 
			'versionname' => 'string', 
			'projectversiongroupid' => 'integer', 
			'displayorder' => 'integer', 
			'effectiveorder' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'projectversionid' => 'projectVersionId', 
			'projectid' => 'projectId', 
			'versionname' => 'versionName', 
			'projectversiongroupid' => 'projectVersionGroupId', 
			'displayorder' => 'displayOrder', 
			'effectiveorder' => 'effectiveOrder'
		];
    }
}