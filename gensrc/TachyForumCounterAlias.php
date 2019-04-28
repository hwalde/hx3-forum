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

class TachyForumCounterAlias extends TableAlias {
   
    public function userId() : ColumnField
    {
        return new ColumnField('tachyforumcounter', 'userid', $this->getAliasName());
    }
    public function forumId() : ColumnField
    {
        return new ColumnField('tachyforumcounter', 'forumid', $this->getAliasName());
    }
    public function threadCount() : ColumnField
    {
        return new ColumnField('tachyforumcounter', 'threadcount', $this->getAliasName());
    }
    public function replyCount() : ColumnField
    {
        return new ColumnField('tachyforumcounter', 'replycount', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'tachyforumcounter';
    }
    
    public function __listColumns() : array
    {
        return ['userid', 'forumid', 'threadcount', 'replycount'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'userid' => 'integer', 
			'forumid' => 'integer', 
			'threadcount' => 'integer', 
			'replycount' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'userid' => 'userId', 
			'forumid' => 'forumId', 
			'threadcount' => 'threadCount', 
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
			$this->forumId(),
			$this->threadCount(),
			$this->replyCount()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : TachyForumCounterRecord
    {
        return new TachyForumCounterRecord();
    }
}