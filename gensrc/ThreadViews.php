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

class ThreadViews implements Table {

    const table = 'threadviews';
   
    public static function as(string $aliasName): ThreadViewsAlias
    {
        return new ThreadViewsAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::threadId()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : ThreadViewsRecord
    {
        return new ThreadViewsRecord();
    }
    
    public static function threadId() : ColumnField
    {
        return new ColumnField('threadId', 'ThreadViews', 'threadviews', 'threadid');
    }

    public function getTableName(): string
    {
        return 'threadviews';
    }
    
    public function __listColumns() : array
    {
        return ['threadid'];
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
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'threadid' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'threadid' => 'threadId'
		];
    }
}