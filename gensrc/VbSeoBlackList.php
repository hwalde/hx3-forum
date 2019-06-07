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

class VbSeoBlackList implements Table {

    const table = 'vbseo_blacklist';
   
    public static function as(string $aliasName): VbSeoBlackListAlias
    {
        return new VbSeoBlackListAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::lDomain(),
			self::lType(),
			self::lDateLine(),
			self::lHits(),
			self::lDeleted()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : VbSeoBlackListRecord
    {
        return new VbSeoBlackListRecord();
    }
    
    public static function lDomain() : ColumnField
    {
        return new ColumnField('lDomain', 'VbSeoBlackList', 'vbseo_blacklist', 'l_domain');
    }
    public static function lType() : ColumnField
    {
        return new ColumnField('lType', 'VbSeoBlackList', 'vbseo_blacklist', 'l_type');
    }
    public static function lDateLine() : ColumnField
    {
        return new ColumnField('lDateLine', 'VbSeoBlackList', 'vbseo_blacklist', 'l_dateline');
    }
    public static function lHits() : ColumnField
    {
        return new ColumnField('lHits', 'VbSeoBlackList', 'vbseo_blacklist', 'l_hits');
    }
    public static function lDeleted() : ColumnField
    {
        return new ColumnField('lDeleted', 'VbSeoBlackList', 'vbseo_blacklist', 'l_deleted');
    }

    public function getTableName(): string
    {
        return 'vbseo_blacklist';
    }
    
    public function __listColumns() : array
    {
        return ['l_domain', 'l_type', 'l_dateline', 'l_hits', 'l_deleted'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['l_domain', 'l_type'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'l_domain' => 'string', 
			'l_type' => 'integer', 
			'l_dateline' => 'integer', 
			'l_hits' => 'integer', 
			'l_deleted' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'l_domain' => 'lDomain', 
			'l_type' => 'lType', 
			'l_dateline' => 'lDateLine', 
			'l_hits' => 'lHits', 
			'l_deleted' => 'lDeleted'
		];
    }
}