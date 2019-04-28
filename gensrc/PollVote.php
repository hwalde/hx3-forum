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

use POOQ\ColumnField;
use POOQ\ColumnFieldList;
use POOQ\Table;

class PollVote implements Table {

    const table = 'pollvote';
   
    public static function as(string $aliasName): PollVoteAlias
    {
        return new PollVoteAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::pollVoteId(),
			self::pollId(),
			self::userId(),
			self::voteDate(),
			self::voteOption(),
			self::voteType()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PollVoteRecord
    {
        return new PollVoteRecord();
    }
    
    public static function pollVoteId() : ColumnField
    {
        return new ColumnField('pollvote', 'pollvoteid');
    }
    public static function pollId() : ColumnField
    {
        return new ColumnField('pollvote', 'pollid');
    }
    public static function userId() : ColumnField
    {
        return new ColumnField('pollvote', 'userid');
    }
    public static function voteDate() : ColumnField
    {
        return new ColumnField('pollvote', 'votedate');
    }
    public static function voteOption() : ColumnField
    {
        return new ColumnField('pollvote', 'voteoption');
    }
    public static function voteType() : ColumnField
    {
        return new ColumnField('pollvote', 'votetype');
    }

    public function getTableName(): string
    {
        return 'pollvote';
    }
    
    public function __listColumns() : array
    {
        return ['pollvoteid', 'pollid', 'userid', 'votedate', 'voteoption', 'votetype'];
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

}