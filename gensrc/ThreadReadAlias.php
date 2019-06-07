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

class ThreadReadAlias extends TableAlias {
   
    public function userId() : ColumnField
    {
        return new ColumnField('userId', 'ThreadRead', 'threadread', 'userid', $this->getAliasName());
    }
    public function threadId() : ColumnField
    {
        return new ColumnField('threadId', 'ThreadRead', 'threadread', 'threadid', $this->getAliasName());
    }
    public function readTime() : ColumnField
    {
        return new ColumnField('readTime', 'ThreadRead', 'threadread', 'readtime', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'threadread';
    }
    
    public function __listColumns() : array
    {
        return ['userid', 'threadid', 'readtime'];
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->userId(),
			$this->threadId(),
			$this->readTime()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : ThreadReadRecord
    {
        return new ThreadReadRecord();
    }
}