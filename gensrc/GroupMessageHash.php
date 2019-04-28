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

class GroupMessageHash implements Table {

    const table = 'groupmessage_hash';
   
    public static function as(string $aliasName): GroupMessageHashAlias
    {
        return new GroupMessageHashAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::postUserId(),
			self::groupId(),
			self::dupeHash(),
			self::dateLine()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : GroupMessageHashRecord
    {
        return new GroupMessageHashRecord();
    }
    
    public static function postUserId() : ColumnField
    {
        return new ColumnField('groupmessage_hash', 'postuserid');
    }
    public static function groupId() : ColumnField
    {
        return new ColumnField('groupmessage_hash', 'groupid');
    }
    public static function dupeHash() : ColumnField
    {
        return new ColumnField('groupmessage_hash', 'dupehash');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('groupmessage_hash', 'dateline');
    }

    public function getTableName(): string
    {
        return 'groupmessage_hash';
    }
    
    public function __listColumns() : array
    {
        return ['postuserid', 'groupid', 'dupehash', 'dateline'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'postuserid' => 'integer', 
			'groupid' => 'integer', 
			'dupehash' => 'string', 
			'dateline' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'postuserid' => 'postUserId', 
			'groupid' => 'groupId', 
			'dupehash' => 'dupeHash', 
			'dateline' => 'dateLine'
		];
    }

}