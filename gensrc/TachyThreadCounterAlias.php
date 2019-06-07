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

class TachyThreadCounterAlias extends TableAlias {
   
    public function userId() : ColumnField
    {
        return new ColumnField('userId', 'TachyThreadCounter', 'tachythreadcounter', 'userid', $this->getAliasName());
    }
    public function threadId() : ColumnField
    {
        return new ColumnField('threadId', 'TachyThreadCounter', 'tachythreadcounter', 'threadid', $this->getAliasName());
    }
    public function replyCount() : ColumnField
    {
        return new ColumnField('replyCount', 'TachyThreadCounter', 'tachythreadcounter', 'replycount', $this->getAliasName());
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->userId(),
			$this->threadId(),
			$this->replyCount()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : TachyThreadCounterRecord
    {
        return new TachyThreadCounterRecord();
    }
}