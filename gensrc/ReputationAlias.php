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

class ReputationAlias extends TableAlias {
   
    public function reputationId() : ColumnField
    {
        return new ColumnField('reputationId', 'Reputation', 'reputation', 'reputationid', $this->getAliasName());
    }
    public function postId() : ColumnField
    {
        return new ColumnField('postId', 'Reputation', 'reputation', 'postid', $this->getAliasName());
    }
    public function userId() : ColumnField
    {
        return new ColumnField('userId', 'Reputation', 'reputation', 'userid', $this->getAliasName());
    }
    public function reputation() : ColumnField
    {
        return new ColumnField('reputation', 'Reputation', 'reputation', 'reputation', $this->getAliasName());
    }
    public function whoAdded() : ColumnField
    {
        return new ColumnField('whoAdded', 'Reputation', 'reputation', 'whoadded', $this->getAliasName());
    }
    public function reason() : ColumnField
    {
        return new ColumnField('reason', 'Reputation', 'reputation', 'reason', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'Reputation', 'reputation', 'dateline', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'reputation';
    }
    
    public function __listColumns() : array
    {
        return ['reputationid', 'postid', 'userid', 'reputation', 'whoadded', 'reason', 'dateline'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['reputationid'];
    }
    
    public function __listNullableColumns() : array
    {
        return ['reason'];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'reputationid' => 'integer', 
			'postid' => 'integer', 
			'userid' => 'integer', 
			'reputation' => 'integer', 
			'whoadded' => 'integer', 
			'reason' => 'string', 
			'dateline' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'reputationid' => 'reputationId', 
			'postid' => 'postId', 
			'userid' => 'userId', 
			'reputation' => 'reputation', 
			'whoadded' => 'whoAdded', 
			'reason' => 'reason', 
			'dateline' => 'dateLine'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->reputationId(),
			$this->postId(),
			$this->userId(),
			$this->reputation(),
			$this->whoAdded(),
			$this->reason(),
			$this->dateLine()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : ReputationRecord
    {
        return new ReputationRecord();
    }
}