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

class ForumReadAlias extends TableAlias {
   
    public function userId() : ColumnField
    {
        return new ColumnField('forumread', 'userid', $this->getAliasName());
    }
    public function forumId() : ColumnField
    {
        return new ColumnField('forumread', 'forumid', $this->getAliasName());
    }
    public function readTime() : ColumnField
    {
        return new ColumnField('forumread', 'readtime', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'forumread';
    }
    
    public function __listColumns() : array
    {
        return ['userid', 'forumid', 'readtime'];
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
			'readtime' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'userid' => 'userId', 
			'forumid' => 'forumId', 
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
			$this->forumId(),
			$this->readTime()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : ForumReadRecord
    {
        return new ForumReadRecord();
    }
}