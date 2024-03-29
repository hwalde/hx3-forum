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

class PaymentTransaction implements Table {

    const table = 'paymenttransaction';
   
    public static function as(string $aliasName): PaymentTransactionAlias
    {
        return new PaymentTransactionAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::paymentTransactionId(),
			self::paymentInfoId(),
			self::transactionId(),
			self::state(),
			self::amount(),
			self::currency(),
			self::dateLine(),
			self::paymentApiId(),
			self::request(),
			self::reversed()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PaymentTransactionRecord
    {
        return new PaymentTransactionRecord();
    }
    
    public static function paymentTransactionId() : ColumnField
    {
        return new ColumnField('paymentTransactionId', 'PaymentTransaction', 'paymenttransaction', 'paymenttransactionid');
    }
    public static function paymentInfoId() : ColumnField
    {
        return new ColumnField('paymentInfoId', 'PaymentTransaction', 'paymenttransaction', 'paymentinfoid');
    }
    public static function transactionId() : ColumnField
    {
        return new ColumnField('transactionId', 'PaymentTransaction', 'paymenttransaction', 'transactionid');
    }
    public static function state() : ColumnField
    {
        return new ColumnField('state', 'PaymentTransaction', 'paymenttransaction', 'state');
    }
    public static function amount() : ColumnField
    {
        return new ColumnField('amount', 'PaymentTransaction', 'paymenttransaction', 'amount');
    }
    public static function currency() : ColumnField
    {
        return new ColumnField('currency', 'PaymentTransaction', 'paymenttransaction', 'currency');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'PaymentTransaction', 'paymenttransaction', 'dateline');
    }
    public static function paymentApiId() : ColumnField
    {
        return new ColumnField('paymentApiId', 'PaymentTransaction', 'paymenttransaction', 'paymentapiid');
    }
    public static function request() : ColumnField
    {
        return new ColumnField('request', 'PaymentTransaction', 'paymenttransaction', 'request');
    }
    public static function reversed() : ColumnField
    {
        return new ColumnField('reversed', 'PaymentTransaction', 'paymenttransaction', 'reversed');
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
}