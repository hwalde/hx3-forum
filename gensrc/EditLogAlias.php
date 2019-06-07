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

class EditLogAlias extends TableAlias {
   
    public function postId() : ColumnField
    {
        return new ColumnField('postId', 'EditLog', 'editlog', 'postid', $this->getAliasName());
    }
    public function userId() : ColumnField
    {
        return new ColumnField('userId', 'EditLog', 'editlog', 'userid', $this->getAliasName());
    }
    public function userName() : ColumnField
    {
        return new ColumnField('userName', 'EditLog', 'editlog', 'username', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'EditLog', 'editlog', 'dateline', $this->getAliasName());
    }
    public function reason() : ColumnField
    {
        return new ColumnField('reason', 'EditLog', 'editlog', 'reason', $this->getAliasName());
    }
    public function hasHistory() : ColumnField
    {
        return new ColumnField('hasHistory', 'EditLog', 'editlog', 'hashistory', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'editlog';
    }
    
    public function __listColumns() : array
    {
        return ['postid', 'userid', 'username', 'dateline', 'reason', 'hashistory'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['postid'];
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->postId(),
			$this->userId(),
			$this->userName(),
			$this->dateLine(),
			$this->reason(),
			$this->hasHistory()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : EditLogRecord
    {
        return new EditLogRecord();
    }
}