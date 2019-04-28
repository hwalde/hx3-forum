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

class EditLog implements Table {

    const table = 'editlog';
   
    public static function as(string $aliasName): EditLogAlias
    {
        return new EditLogAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::postId(),
			self::userId(),
			self::userName(),
			self::dateLine(),
			self::reason(),
			self::hasHistory()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : EditLogRecord
    {
        return new EditLogRecord();
    }
    
    public static function postId() : ColumnField
    {
        return new ColumnField('editlog', 'postid');
    }
    public static function userId() : ColumnField
    {
        return new ColumnField('editlog', 'userid');
    }
    public static function userName() : ColumnField
    {
        return new ColumnField('editlog', 'username');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('editlog', 'dateline');
    }
    public static function reason() : ColumnField
    {
        return new ColumnField('editlog', 'reason');
    }
    public static function hasHistory() : ColumnField
    {
        return new ColumnField('editlog', 'hashistory');
    }

    public function getTableName(): string
    {
        return 'editlog';
    }
    
    public function __listColumns() : array
    {
        return ['postid', 'userid', 'username', 'dateline', 'reason', 'hashistory'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'postid' => 'integer', 
			'userid' => 'integer', 
			'username' => 'string', 
			'dateline' => 'integer', 
			'reason' => 'string', 
			'hashistory' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'postid' => 'postId', 
			'userid' => 'userId', 
			'username' => 'userName', 
			'dateline' => 'dateLine', 
			'reason' => 'reason', 
			'hashistory' => 'hasHistory'
		];
    }

}