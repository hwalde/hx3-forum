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

class DeletionLog implements Table {

    const table = 'deletionlog';
   
    public static function as(string $aliasName): DeletionLogAlias
    {
        return new DeletionLogAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::primaryId(),
			self::type(),
			self::userId(),
			self::userName(),
			self::reason(),
			self::dateLine()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : DeletionLogRecord
    {
        return new DeletionLogRecord();
    }
    
    public static function primaryId() : ColumnField
    {
        return new ColumnField('deletionlog', 'primaryid');
    }
    public static function type() : ColumnField
    {
        return new ColumnField('deletionlog', 'type');
    }
    public static function userId() : ColumnField
    {
        return new ColumnField('deletionlog', 'userid');
    }
    public static function userName() : ColumnField
    {
        return new ColumnField('deletionlog', 'username');
    }
    public static function reason() : ColumnField
    {
        return new ColumnField('deletionlog', 'reason');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('deletionlog', 'dateline');
    }

    public function getTableName(): string
    {
        return 'deletionlog';
    }
    
    public function __listColumns() : array
    {
        return ['primaryid', 'type', 'userid', 'username', 'reason', 'dateline'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'primaryid' => 'integer', 
			'type' => 'string', 
			'userid' => 'integer', 
			'username' => 'string', 
			'reason' => 'string', 
			'dateline' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'primaryid' => 'primaryId', 
			'type' => 'type', 
			'userid' => 'userId', 
			'username' => 'userName', 
			'reason' => 'reason', 
			'dateline' => 'dateLine'
		];
    }

}