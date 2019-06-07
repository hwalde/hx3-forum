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

class ThreadRedirect implements Table {

    const table = 'threadredirect';
   
    public static function as(string $aliasName): ThreadRedirectAlias
    {
        return new ThreadRedirectAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::threadId(),
			self::expires()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : ThreadRedirectRecord
    {
        return new ThreadRedirectRecord();
    }
    
    public static function threadId() : ColumnField
    {
        return new ColumnField('threadId', 'ThreadRedirect', 'threadredirect', 'threadid');
    }
    public static function expires() : ColumnField
    {
        return new ColumnField('expires', 'ThreadRedirect', 'threadredirect', 'expires');
    }

    public function getTableName(): string
    {
        return 'threadredirect';
    }
    
    public function __listColumns() : array
    {
        return ['threadid', 'expires'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['threadid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'threadid' => 'integer', 
			'expires' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'threadid' => 'threadId', 
			'expires' => 'expires'
		];
    }
}