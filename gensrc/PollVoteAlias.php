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

class PollVoteAlias extends TableAlias {
   
    public function pollVoteId() : ColumnField
    {
        return new ColumnField('pollVoteId', 'PollVote', 'pollvote', 'pollvoteid', $this->getAliasName());
    }
    public function pollId() : ColumnField
    {
        return new ColumnField('pollId', 'PollVote', 'pollvote', 'pollid', $this->getAliasName());
    }
    public function userId() : ColumnField
    {
        return new ColumnField('userId', 'PollVote', 'pollvote', 'userid', $this->getAliasName());
    }
    public function voteDate() : ColumnField
    {
        return new ColumnField('voteDate', 'PollVote', 'pollvote', 'votedate', $this->getAliasName());
    }
    public function voteOption() : ColumnField
    {
        return new ColumnField('voteOption', 'PollVote', 'pollvote', 'voteoption', $this->getAliasName());
    }
    public function voteType() : ColumnField
    {
        return new ColumnField('voteType', 'PollVote', 'pollvote', 'votetype', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'pollvote';
    }
    
    public function __listColumns() : array
    {
        return ['pollvoteid', 'pollid', 'userid', 'votedate', 'voteoption', 'votetype'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['pollvoteid'];
    }
    
    public function __listNullableColumns() : array
    {
        return ['userid'];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'pollvoteid' => 'integer', 
			'pollid' => 'integer', 
			'userid' => 'integer', 
			'votedate' => 'integer', 
			'voteoption' => 'integer', 
			'votetype' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'pollvoteid' => 'pollVoteId', 
			'pollid' => 'pollId', 
			'userid' => 'userId', 
			'votedate' => 'voteDate', 
			'voteoption' => 'voteOption', 
			'votetype' => 'voteType'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->pollVoteId(),
			$this->pollId(),
			$this->userId(),
			$this->voteDate(),
			$this->voteOption(),
			$this->voteType()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PollVoteRecord
    {
        return new PollVoteRecord();
    }
}