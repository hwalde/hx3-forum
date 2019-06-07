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

class TachyThreadCounter implements Table {

    const table = 'tachythreadcounter';
   
    public static function as(string $aliasName): TachyThreadCounterAlias
    {
        return new TachyThreadCounterAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::userId(),
			self::threadId(),
			self::replyCount()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : TachyThreadCounterRecord
    {
        return new TachyThreadCounterRecord();
    }
    
    public static function userId() : ColumnField
    {
        return new ColumnField('userId', 'TachyThreadCounter', 'tachythreadcounter', 'userid');
    }
    public static function threadId() : ColumnField
    {
        return new ColumnField('threadId', 'TachyThreadCounter', 'tachythreadcounter', 'threadid');
    }
    public static function replyCount() : ColumnField
    {
        return new ColumnField('replyCount', 'TachyThreadCounter', 'tachythreadcounter', 'replycount');
    }

    public function getTableName(): string
    {
        return 'tachythreadcounter';
    }
    
    public function __listColumns() : array
    {
        return ['userid', 'threadid', 'replycount'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['userid', 'threadid'];
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
			'replycount' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'userid' => 'userId', 
			'threadid' => 'threadId', 
			'replycount' => 'replyCount'
		];
    }
}