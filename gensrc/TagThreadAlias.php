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

class TagThreadAlias extends TableAlias {
   
    public function tagId() : ColumnField
    {
        return new ColumnField('tagthread', 'tagid', $this->getAliasName());
    }
    public function threadId() : ColumnField
    {
        return new ColumnField('tagthread', 'threadid', $this->getAliasName());
    }
    public function userId() : ColumnField
    {
        return new ColumnField('tagthread', 'userid', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('tagthread', 'dateline', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'tagthread';
    }
    
    public function __listColumns() : array
    {
        return ['tagid', 'threadid', 'userid', 'dateline'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'tagid' => 'integer', 
			'threadid' => 'integer', 
			'userid' => 'integer', 
			'dateline' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'tagid' => 'tagId', 
			'threadid' => 'threadId', 
			'userid' => 'userId', 
			'dateline' => 'dateLine'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->tagId(),
			$this->threadId(),
			$this->userId(),
			$this->dateLine()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : TagThreadRecord
    {
        return new TagThreadRecord();
    }
}