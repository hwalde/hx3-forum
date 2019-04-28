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

class PostHashAlias extends TableAlias {
   
    public function userId() : ColumnField
    {
        return new ColumnField('posthash', 'userid', $this->getAliasName());
    }
    public function threadId() : ColumnField
    {
        return new ColumnField('posthash', 'threadid', $this->getAliasName());
    }
    public function postId() : ColumnField
    {
        return new ColumnField('posthash', 'postid', $this->getAliasName());
    }
    public function dupeHash() : ColumnField
    {
        return new ColumnField('posthash', 'dupehash', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('posthash', 'dateline', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'posthash';
    }
    
    public function __listColumns() : array
    {
        return ['userid', 'threadid', 'postid', 'dupehash', 'dateline'];
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
			'postid' => 'integer', 
			'dupehash' => 'string', 
			'dateline' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'userid' => 'userId', 
			'threadid' => 'threadId', 
			'postid' => 'postId', 
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
            $this->userId(),
			$this->threadId(),
			$this->postId(),
			$this->dupeHash(),
			$this->dateLine()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PostHashRecord
    {
        return new PostHashRecord();
    }
}