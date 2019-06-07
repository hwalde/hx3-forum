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

class PmReceiptAlias extends TableAlias {
   
    public function pmId() : ColumnField
    {
        return new ColumnField('pmId', 'PmReceipt', 'pmreceipt', 'pmid', $this->getAliasName());
    }
    public function userId() : ColumnField
    {
        return new ColumnField('userId', 'PmReceipt', 'pmreceipt', 'userid', $this->getAliasName());
    }
    public function toUserId() : ColumnField
    {
        return new ColumnField('toUserId', 'PmReceipt', 'pmreceipt', 'touserid', $this->getAliasName());
    }
    public function toUserName() : ColumnField
    {
        return new ColumnField('toUserName', 'PmReceipt', 'pmreceipt', 'tousername', $this->getAliasName());
    }
    public function title() : ColumnField
    {
        return new ColumnField('title', 'PmReceipt', 'pmreceipt', 'title', $this->getAliasName());
    }
    public function sendTime() : ColumnField
    {
        return new ColumnField('sendTime', 'PmReceipt', 'pmreceipt', 'sendtime', $this->getAliasName());
    }
    public function readTime() : ColumnField
    {
        return new ColumnField('readTime', 'PmReceipt', 'pmreceipt', 'readtime', $this->getAliasName());
    }
    public function denied() : ColumnField
    {
        return new ColumnField('denied', 'PmReceipt', 'pmreceipt', 'denied', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'pmreceipt';
    }
    
    public function __listColumns() : array
    {
        return ['pmid', 'userid', 'touserid', 'tousername', 'title', 'sendtime', 'readtime', 'denied'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['pmid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'pmid' => 'integer', 
			'userid' => 'integer', 
			'touserid' => 'integer', 
			'tousername' => 'string', 
			'title' => 'string', 
			'sendtime' => 'integer', 
			'readtime' => 'integer', 
			'denied' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'pmid' => 'pmId', 
			'userid' => 'userId', 
			'touserid' => 'toUserId', 
			'tousername' => 'toUserName', 
			'title' => 'title', 
			'sendtime' => 'sendTime', 
			'readtime' => 'readTime', 
			'denied' => 'denied'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->pmId(),
			$this->userId(),
			$this->toUserId(),
			$this->toUserName(),
			$this->title(),
			$this->sendTime(),
			$this->readTime(),
			$this->denied()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PmReceiptRecord
    {
        return new PmReceiptRecord();
    }
}