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

class PollAlias extends TableAlias {
   
    public function pollId() : ColumnField
    {
        return new ColumnField('pollId', 'Poll', 'poll', 'pollid', $this->getAliasName());
    }
    public function question() : ColumnField
    {
        return new ColumnField('question', 'Poll', 'poll', 'question', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'Poll', 'poll', 'dateline', $this->getAliasName());
    }
    public function options() : ColumnField
    {
        return new ColumnField('options', 'Poll', 'poll', 'options', $this->getAliasName());
    }
    public function votes() : ColumnField
    {
        return new ColumnField('votes', 'Poll', 'poll', 'votes', $this->getAliasName());
    }
    public function active() : ColumnField
    {
        return new ColumnField('active', 'Poll', 'poll', 'active', $this->getAliasName());
    }
    public function numberOptions() : ColumnField
    {
        return new ColumnField('numberOptions', 'Poll', 'poll', 'numberoptions', $this->getAliasName());
    }
    public function timeout() : ColumnField
    {
        return new ColumnField('timeout', 'Poll', 'poll', 'timeout', $this->getAliasName());
    }
    public function multiple() : ColumnField
    {
        return new ColumnField('multiple', 'Poll', 'poll', 'multiple', $this->getAliasName());
    }
    public function voters() : ColumnField
    {
        return new ColumnField('voters', 'Poll', 'poll', 'voters', $this->getAliasName());
    }
    public function public() : ColumnField
    {
        return new ColumnField('public', 'Poll', 'poll', 'public', $this->getAliasName());
    }
    public function lastVote() : ColumnField
    {
        return new ColumnField('lastVote', 'Poll', 'poll', 'lastvote', $this->getAliasName());
    }
    public function importPollId() : ColumnField
    {
        return new ColumnField('importPollId', 'Poll', 'poll', 'importpollid', $this->getAliasName());
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->pollId(),
			$this->question(),
			$this->dateLine(),
			$this->options(),
			$this->votes(),
			$this->active(),
			$this->numberOptions(),
			$this->timeout(),
			$this->multiple(),
			$this->voters(),
			$this->public(),
			$this->lastVote(),
			$this->importPollId()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PollRecord
    {
        return new PollRecord();
    }
}