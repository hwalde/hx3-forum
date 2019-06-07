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

class PaymentInfo implements Table {

    const table = 'paymentinfo';
   
    public static function as(string $aliasName): PaymentInfoAlias
    {
        return new PaymentInfoAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::paymentInfoId(),
			self::hash(),
			self::subscriptionId(),
			self::subscriptionSubId(),
			self::userId(),
			self::completed()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PaymentInfoRecord
    {
        return new PaymentInfoRecord();
    }
    
    public static function paymentInfoId() : ColumnField
    {
        return new ColumnField('paymentInfoId', 'PaymentInfo', 'paymentinfo', 'paymentinfoid');
    }
    public static function hash() : ColumnField
    {
        return new ColumnField('hash', 'PaymentInfo', 'paymentinfo', 'hash');
    }
    public static function subscriptionId() : ColumnField
    {
        return new ColumnField('subscriptionId', 'PaymentInfo', 'paymentinfo', 'subscriptionid');
    }
    public static function subscriptionSubId() : ColumnField
    {
        return new ColumnField('subscriptionSubId', 'PaymentInfo', 'paymentinfo', 'subscriptionsubid');
    }
    public static function userId() : ColumnField
    {
        return new ColumnField('userId', 'PaymentInfo', 'paymentinfo', 'userid');
    }
    public static function completed() : ColumnField
    {
        return new ColumnField('completed', 'PaymentInfo', 'paymentinfo', 'completed');
    }

    public function getTableName(): string
    {
        return 'paymentinfo';
    }
    
    public function __listColumns() : array
    {
        return ['paymentinfoid', 'hash', 'subscriptionid', 'subscriptionsubid', 'userid', 'completed'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['paymentinfoid'];
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
}