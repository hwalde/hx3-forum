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

use POOQ\TableAlias;
use POOQ\ColumnField;
use POOQ\ColumnFieldList;

class UserListAlias extends TableAlias {
   
    public function userId() : ColumnField
    {
        return new ColumnField('userId', 'UserList', 'userlist', 'userid', $this->getAliasName());
    }
    public function relationid() : ColumnField
    {
        return new ColumnField('relationid', 'UserList', 'userlist', 'relationid', $this->getAliasName());
    }
    public function type() : ColumnField
    {
        return new ColumnField('type', 'UserList', 'userlist', 'type', $this->getAliasName());
    }
    public function friend() : ColumnField
    {
        return new ColumnField('friend', 'UserList', 'userlist', 'friend', $this->getAliasName());
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->userId(),
			$this->relationid(),
			$this->type(),
			$this->friend()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : UserListRecord
    {
        return new UserListRecord();
    }
}