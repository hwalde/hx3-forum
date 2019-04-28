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

class GroupMessageHashAlias extends TableAlias {
   
    public function postUserId() : ColumnField
    {
        return new ColumnField('groupmessage_hash', 'postuserid', $this->getAliasName());
    }
    public function groupId() : ColumnField
    {
        return new ColumnField('groupmessage_hash', 'groupid', $this->getAliasName());
    }
    public function dupeHash() : ColumnField
    {
        return new ColumnField('groupmessage_hash', 'dupehash', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('groupmessage_hash', 'dateline', $this->getAliasName());
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->postUserId(),
			$this->groupId(),
			$this->dupeHash(),
			$this->dateLine()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : GroupMessageHashRecord
    {
        return new GroupMessageHashRecord();
    }
}