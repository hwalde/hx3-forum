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

class ThreadRead implements Table {

    const table = 'threadread';
   
    public static function as(string $aliasName): ThreadReadAlias
    {
        return new ThreadReadAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::userId(),
			self::threadId(),
			self::readTime()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : ThreadReadRecord
    {
        return new ThreadReadRecord();
    }
    
    public static function userId() : ColumnField
    {
        return new ColumnField('threadread', 'userid');
    }
    public static function threadId() : ColumnField
    {
        return new ColumnField('threadread', 'threadid');
    }
    public static function readTime() : ColumnField
    {
        return new ColumnField('threadread', 'readtime');
    }

    public function getTableName(): string
    {
        return 'threadread';
    }
    
    public function __listColumns() : array
    {
        return ['userid', 'threadid', 'readtime'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'userid' => 'integer', 
			'threadid' => 'integer', 
			'readtime' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'userid' => 'userId', 
			'threadid' => 'threadId', 
			'readtime' => 'readTime'
		];
    }

}