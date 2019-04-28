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

class PaymentInfoAlias extends TableAlias {
   
    public function paymentInfoId() : ColumnField
    {
        return new ColumnField('paymentinfo', 'paymentinfoid', $this->getAliasName());
    }
    public function hash() : ColumnField
    {
        return new ColumnField('paymentinfo', 'hash', $this->getAliasName());
    }
    public function subscriptionId() : ColumnField
    {
        return new ColumnField('paymentinfo', 'subscriptionid', $this->getAliasName());
    }
    public function subscriptionSubId() : ColumnField
    {
        return new ColumnField('paymentinfo', 'subscriptionsubid', $this->getAliasName());
    }
    public function userId() : ColumnField
    {
        return new ColumnField('paymentinfo', 'userid', $this->getAliasName());
    }
    public function completed() : ColumnField
    {
        return new ColumnField('paymentinfo', 'completed', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'paymentinfo';
    }
    
    public function __listColumns() : array
    {
        return ['paymentinfoid', 'hash', 'subscriptionid', 'subscriptionsubid', 'userid', 'completed'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'paymentinfoid' => 'integer', 
			'hash' => 'string', 
			'subscriptionid' => 'integer', 
			'subscriptionsubid' => 'integer', 
			'userid' => 'integer', 
			'completed' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'paymentinfoid' => 'paymentInfoId', 
			'hash' => 'hash', 
			'subscriptionid' => 'subscriptionId', 
			'subscriptionsubid' => 'subscriptionSubId', 
			'userid' => 'userId', 
			'completed' => 'completed'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->paymentInfoId(),
			$this->hash(),
			$this->subscriptionId(),
			$this->subscriptionSubId(),
			$this->userId(),
			$this->completed()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PaymentInfoRecord
    {
        return new PaymentInfoRecord();
    }
}