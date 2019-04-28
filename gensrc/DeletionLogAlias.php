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

class DeletionLogAlias extends TableAlias {
   
    public function primaryId() : ColumnField
    {
        return new ColumnField('deletionlog', 'primaryid', $this->getAliasName());
    }
    public function type() : ColumnField
    {
        return new ColumnField('deletionlog', 'type', $this->getAliasName());
    }
    public function userId() : ColumnField
    {
        return new ColumnField('deletionlog', 'userid', $this->getAliasName());
    }
    public function userName() : ColumnField
    {
        return new ColumnField('deletionlog', 'username', $this->getAliasName());
    }
    public function reason() : ColumnField
    {
        return new ColumnField('deletionlog', 'reason', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('deletionlog', 'dateline', $this->getAliasName());
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->primaryId(),
			$this->type(),
			$this->userId(),
			$this->userName(),
			$this->reason(),
			$this->dateLine()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : DeletionLogRecord
    {
        return new DeletionLogRecord();
    }
}