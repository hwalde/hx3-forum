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

class VbSeoServiceUpdate implements Table {

    const table = 'vbseo_serviceupdate';
   
    public static function as(string $aliasName): VbSeoServiceUpdateAlias
    {
        return new VbSeoServiceUpdateAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::sThreadId(),
			self::sUpdated(),
			self::sDateLine(),
			self::sType()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : VbSeoServiceUpdateRecord
    {
        return new VbSeoServiceUpdateRecord();
    }
    
    public static function sThreadId() : ColumnField
    {
        return new ColumnField('sThreadId', 'VbSeoServiceUpdate', 'vbseo_serviceupdate', 's_threadid');
    }
    public static function sUpdated() : ColumnField
    {
        return new ColumnField('sUpdated', 'VbSeoServiceUpdate', 'vbseo_serviceupdate', 's_updated');
    }
    public static function sDateLine() : ColumnField
    {
        return new ColumnField('sDateLine', 'VbSeoServiceUpdate', 'vbseo_serviceupdate', 's_dateline');
    }
    public static function sType() : ColumnField
    {
        return new ColumnField('sType', 'VbSeoServiceUpdate', 'vbseo_serviceupdate', 's_type');
    }

    public function getTableName(): string
    {
        return 'vbseo_serviceupdate';
    }
    
    public function __listColumns() : array
    {
        return ['s_threadid', 's_updated', 's_dateline', 's_type'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return [];
    }
    
    public function __listNullableColumns() : array
    {
        return ['s_dateline'];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			's_threadid' => 'integer', 
			's_updated' => 'integer', 
			's_dateline' => 'integer', 
			's_type' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			's_threadid' => 'sThreadId', 
			's_updated' => 'sUpdated', 
			's_dateline' => 'sDateLine', 
			's_type' => 'sType'
		];
    }
}