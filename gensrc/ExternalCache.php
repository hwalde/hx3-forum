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

class ExternalCache implements Table {

    const table = 'externalcache';
   
    public static function as(string $aliasName): ExternalCacheAlias
    {
        return new ExternalCacheAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::cacheHash(),
			self::text(),
			self::headers(),
			self::dateLine(),
			self::forumId()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : ExternalCacheRecord
    {
        return new ExternalCacheRecord();
    }
    
    public static function cacheHash() : ColumnField
    {
        return new ColumnField('externalcache', 'cachehash');
    }
    public static function text() : ColumnField
    {
        return new ColumnField('externalcache', 'text');
    }
    public static function headers() : ColumnField
    {
        return new ColumnField('externalcache', 'headers');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('externalcache', 'dateline');
    }
    public static function forumId() : ColumnField
    {
        return new ColumnField('externalcache', 'forumid');
    }

    public function getTableName(): string
    {
        return 'externalcache';
    }
    
    public function __listColumns() : array
    {
        return ['cachehash', 'text', 'headers', 'dateline', 'forumid'];
    }
    
    public function __listNullableColumns() : array
    {
        return ['text', 'headers'];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'cachehash' => 'string', 
			'text' => 'string', 
			'headers' => 'string', 
			'dateline' => 'integer', 
			'forumid' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'cachehash' => 'cacheHash', 
			'text' => 'text', 
			'headers' => 'headers', 
			'dateline' => 'dateLine', 
			'forumid' => 'forumId'
		];
    }

}