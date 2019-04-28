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

class SubscriptionLogAlias extends TableAlias {
   
    public function subscriptionLogId() : ColumnField
    {
        return new ColumnField('subscriptionlog', 'subscriptionlogid', $this->getAliasName());
    }
    public function subscriptionId() : ColumnField
    {
        return new ColumnField('subscriptionlog', 'subscriptionid', $this->getAliasName());
    }
    public function userId() : ColumnField
    {
        return new ColumnField('subscriptionlog', 'userid', $this->getAliasName());
    }
    public function pUserGroupId() : ColumnField
    {
        return new ColumnField('subscriptionlog', 'pusergroupid', $this->getAliasName());
    }
    public function status() : ColumnField
    {
        return new ColumnField('subscriptionlog', 'status', $this->getAliasName());
    }
    public function regDate() : ColumnField
    {
        return new ColumnField('subscriptionlog', 'regdate', $this->getAliasName());
    }
    public function expiryDate() : ColumnField
    {
        return new ColumnField('subscriptionlog', 'expirydate', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'subscriptionlog';
    }
    
    public function __listColumns() : array
    {
        return ['subscriptionlogid', 'subscriptionid', 'userid', 'pusergroupid', 'status', 'regdate', 'expirydate'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'subscriptionlogid' => 'integer', 
			'subscriptionid' => 'integer', 
			'userid' => 'integer', 
			'pusergroupid' => 'integer', 
			'status' => 'integer', 
			'regdate' => 'integer', 
			'expirydate' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'subscriptionlogid' => 'subscriptionLogId', 
			'subscriptionid' => 'subscriptionId', 
			'userid' => 'userId', 
			'pusergroupid' => 'pUserGroupId', 
			'status' => 'status', 
			'regdate' => 'regDate', 
			'expirydate' => 'expiryDate'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->subscriptionLogId(),
			$this->subscriptionId(),
			$this->userId(),
			$this->pUserGroupId(),
			$this->status(),
			$this->regDate(),
			$this->expiryDate()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : SubscriptionLogRecord
    {
        return new SubscriptionLogRecord();
    }
}