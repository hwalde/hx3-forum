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

class PaymentTransactionAlias extends TableAlias {
   
    public function paymentTransactionId() : ColumnField
    {
        return new ColumnField('paymentTransactionId', 'PaymentTransaction', 'paymenttransaction', 'paymenttransactionid', $this->getAliasName());
    }
    public function paymentInfoId() : ColumnField
    {
        return new ColumnField('paymentInfoId', 'PaymentTransaction', 'paymenttransaction', 'paymentinfoid', $this->getAliasName());
    }
    public function transactionId() : ColumnField
    {
        return new ColumnField('transactionId', 'PaymentTransaction', 'paymenttransaction', 'transactionid', $this->getAliasName());
    }
    public function state() : ColumnField
    {
        return new ColumnField('state', 'PaymentTransaction', 'paymenttransaction', 'state', $this->getAliasName());
    }
    public function amount() : ColumnField
    {
        return new ColumnField('amount', 'PaymentTransaction', 'paymenttransaction', 'amount', $this->getAliasName());
    }
    public function currency() : ColumnField
    {
        return new ColumnField('currency', 'PaymentTransaction', 'paymenttransaction', 'currency', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'PaymentTransaction', 'paymenttransaction', 'dateline', $this->getAliasName());
    }
    public function paymentApiId() : ColumnField
    {
        return new ColumnField('paymentApiId', 'PaymentTransaction', 'paymenttransaction', 'paymentapiid', $this->getAliasName());
    }
    public function request() : ColumnField
    {
        return new ColumnField('request', 'PaymentTransaction', 'paymenttransaction', 'request', $this->getAliasName());
    }
    public function reversed() : ColumnField
    {
        return new ColumnField('reversed', 'PaymentTransaction', 'paymenttransaction', 'reversed', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'paymenttransaction';
    }
    
    public function __listColumns() : array
    {
        return ['paymenttransactionid', 'paymentinfoid', 'transactionid', 'state', 'amount', 'currency', 'dateline', 'paymentapiid', 'request', 'reversed'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['paymenttransactionid'];
    }
    
    public function __listNullableColumns() : array
    {
        return ['request'];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'paymenttransactionid' => 'integer', 
			'paymentinfoid' => 'integer', 
			'transactionid' => 'string', 
			'state' => 'integer', 
			'amount' => 'unknown', 
			'currency' => 'string', 
			'dateline' => 'integer', 
			'paymentapiid' => 'integer', 
			'request' => 'string', 
			'reversed' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'paymenttransactionid' => 'paymentTransactionId', 
			'paymentinfoid' => 'paymentInfoId', 
			'transactionid' => 'transactionId', 
			'state' => 'state', 
			'amount' => 'amount', 
			'currency' => 'currency', 
			'dateline' => 'dateLine', 
			'paymentapiid' => 'paymentApiId', 
			'request' => 'request', 
			'reversed' => 'reversed'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->paymentTransactionId(),
			$this->paymentInfoId(),
			$this->transactionId(),
			$this->state(),
			$this->amount(),
			$this->currency(),
			$this->dateLine(),
			$this->paymentApiId(),
			$this->request(),
			$this->reversed()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PaymentTransactionRecord
    {
        return new PaymentTransactionRecord();
    }
}