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

class UserCssCache implements Table {

    const table = 'usercsscache';
   
    public static function as(string $aliasName): UserCssCacheAlias
    {
        return new UserCssCacheAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::userId(),
			self::cachedCss(),
			self::buildPermissions()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : UserCssCacheRecord
    {
        return new UserCssCacheRecord();
    }
    
    public static function userId() : ColumnField
    {
        return new ColumnField('usercsscache', 'userid');
    }
    public static function cachedCss() : ColumnField
    {
        return new ColumnField('usercsscache', 'cachedcss');
    }
    public static function buildPermissions() : ColumnField
    {
        return new ColumnField('usercsscache', 'buildpermissions');
    }

    public function getTableName(): string
    {
        return 'usercsscache';
    }
    
    public function __listColumns() : array
    {
        return ['userid', 'cachedcss', 'buildpermissions'];
    }
    
    public function __listNullableColumns() : array
    {
        return ['cachedcss'];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'userid' => 'integer', 
			'cachedcss' => 'string', 
			'buildpermissions' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'userid' => 'userId', 
			'cachedcss' => 'cachedCss', 
			'buildpermissions' => 'buildPermissions'
		];
    }

}