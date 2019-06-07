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

class UserList implements Table {

    const table = 'userlist';
   
    public static function as(string $aliasName): UserListAlias
    {
        return new UserListAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::userId(),
			self::relationid(),
			self::type(),
			self::friend()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : UserListRecord
    {
        return new UserListRecord();
    }
    
    public static function userId() : ColumnField
    {
        return new ColumnField('userId', 'UserList', 'userlist', 'userid');
    }
    public static function relationid() : ColumnField
    {
        return new ColumnField('relationid', 'UserList', 'userlist', 'relationid');
    }
    public static function type() : ColumnField
    {
        return new ColumnField('type', 'UserList', 'userlist', 'type');
    }
    public static function friend() : ColumnField
    {
        return new ColumnField('friend', 'UserList', 'userlist', 'friend');
    }

    public function getTableName(): string
    {
        return 'userlist';
    }
    
    public function __listColumns() : array
    {
        return ['userid', 'relationid', 'type', 'friend'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['userid', 'relationid', 'type'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'userid' => 'integer', 
			'relationid' => 'integer', 
			'type' => 'string', 
			'friend' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'userid' => 'userId', 
			'relationid' => 'relationid', 
			'type' => 'type', 
			'friend' => 'friend'
		];
    }
}