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

class Poll implements Table {

    const table = 'poll';
   
    public static function as(string $aliasName): PollAlias
    {
        return new PollAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::pollId(),
			self::question(),
			self::dateLine(),
			self::options(),
			self::votes(),
			self::active(),
			self::numberOptions(),
			self::timeout(),
			self::multiple(),
			self::voters(),
			self::public(),
			self::lastVote(),
			self::importPollId()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PollRecord
    {
        return new PollRecord();
    }
    
    public static function pollId() : ColumnField
    {
        return new ColumnField('pollId', 'Poll', 'poll', 'pollid');
    }
    public static function question() : ColumnField
    {
        return new ColumnField('question', 'Poll', 'poll', 'question');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'Poll', 'poll', 'dateline');
    }
    public static function options() : ColumnField
    {
        return new ColumnField('options', 'Poll', 'poll', 'options');
    }
    public static function votes() : ColumnField
    {
        return new ColumnField('votes', 'Poll', 'poll', 'votes');
    }
    public static function active() : ColumnField
    {
        return new ColumnField('active', 'Poll', 'poll', 'active');
    }
    public static function numberOptions() : ColumnField
    {
        return new ColumnField('numberOptions', 'Poll', 'poll', 'numberoptions');
    }
    public static function timeout() : ColumnField
    {
        return new ColumnField('timeout', 'Poll', 'poll', 'timeout');
    }
    public static function multiple() : ColumnField
    {
        return new ColumnField('multiple', 'Poll', 'poll', 'multiple');
    }
    public static function voters() : ColumnField
    {
        return new ColumnField('voters', 'Poll', 'poll', 'voters');
    }
    public static function public() : ColumnField
    {
        return new ColumnField('public', 'Poll', 'poll', 'public');
    }
    public static function lastVote() : ColumnField
    {
        return new ColumnField('lastVote', 'Poll', 'poll', 'lastvote');
    }
    public static function importPollId() : ColumnField
    {
        return new ColumnField('importPollId', 'Poll', 'poll', 'importpollid');
    }

    public function getTableName(): string
    {
        return 'poll';
    }
    
    public function __listColumns() : array
    {
        return ['pollid', 'question', 'dateline', 'options', 'votes', 'active', 'numberoptions', 'timeout', 'multiple', 'voters', 'public', 'lastvote', 'importpollid'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['pollid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'pollid' => 'integer', 
			'question' => 'string', 
			'dateline' => 'integer', 
			'options' => 'string', 
			'votes' => 'string', 
			'active' => 'integer', 
			'numberoptions' => 'integer', 
			'timeout' => 'integer', 
			'multiple' => 'integer', 
			'voters' => 'integer', 
			'public' => 'integer', 
			'lastvote' => 'integer', 
			'importpollid' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'pollid' => 'pollId', 
			'question' => 'question', 
			'dateline' => 'dateLine', 
			'options' => 'options', 
			'votes' => 'votes', 
			'active' => 'active', 
			'numberoptions' => 'numberOptions', 
			'timeout' => 'timeout', 
			'multiple' => 'multiple', 
			'voters' => 'voters', 
			'public' => 'public', 
			'lastvote' => 'lastVote', 
			'importpollid' => 'importPollId'
		];
    }
}