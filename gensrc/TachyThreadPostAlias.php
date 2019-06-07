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

class TachyThreadPostAlias extends TableAlias {
   
    public function userId() : ColumnField
    {
        return new ColumnField('userId', 'TachyThreadPost', 'tachythreadpost', 'userid', $this->getAliasName());
    }
    public function threadId() : ColumnField
    {
        return new ColumnField('threadId', 'TachyThreadPost', 'tachythreadpost', 'threadid', $this->getAliasName());
    }
    public function lastPost() : ColumnField
    {
        return new ColumnField('lastPost', 'TachyThreadPost', 'tachythreadpost', 'lastpost', $this->getAliasName());
    }
    public function lastPoster() : ColumnField
    {
        return new ColumnField('lastPoster', 'TachyThreadPost', 'tachythreadpost', 'lastposter', $this->getAliasName());
    }
    public function lastPostId() : ColumnField
    {
        return new ColumnField('lastPostId', 'TachyThreadPost', 'tachythreadpost', 'lastpostid', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'tachythreadpost';
    }
    
    public function __listColumns() : array
    {
        return ['userid', 'threadid', 'lastpost', 'lastposter', 'lastpostid'];
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
			'lastpost' => 'integer', 
			'lastposter' => 'string', 
			'lastpostid' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'userid' => 'userId', 
			'threadid' => 'threadId', 
			'lastpost' => 'lastPost', 
			'lastposter' => 'lastPoster', 
			'lastpostid' => 'lastPostId'
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
			$this->lastPost(),
			$this->lastPoster(),
			$this->lastPostId()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : TachyThreadPostRecord
    {
        return new TachyThreadPostRecord();
    }
}