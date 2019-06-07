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

class PaymentApi implements Table {

    const table = 'paymentapi';
   
    public static function as(string $aliasName): PaymentApiAlias
    {
        return new PaymentApiAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::paymentApiId(),
			self::title(),
			self::currency(),
			self::recurring(),
			self::className(),
			self::active(),
			self::settings()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PaymentApiRecord
    {
        return new PaymentApiRecord();
    }
    
    public static function paymentApiId() : ColumnField
    {
        return new ColumnField('paymentApiId', 'PaymentApi', 'paymentapi', 'paymentapiid');
    }
    public static function title() : ColumnField
    {
        return new ColumnField('title', 'PaymentApi', 'paymentapi', 'title');
    }
    public static function currency() : ColumnField
    {
        return new ColumnField('currency', 'PaymentApi', 'paymentapi', 'currency');
    }
    public static function recurring() : ColumnField
    {
        return new ColumnField('recurring', 'PaymentApi', 'paymentapi', 'recurring');
    }
    public static function className() : ColumnField
    {
        return new ColumnField('className', 'PaymentApi', 'paymentapi', 'classname');
    }
    public static function active() : ColumnField
    {
        return new ColumnField('active', 'PaymentApi', 'paymentapi', 'active');
    }
    public static function settings() : ColumnField
    {
        return new ColumnField('settings', 'PaymentApi', 'paymentapi', 'settings');
    }

    public function getTableName(): string
    {
        return 'paymentapi';
    }
    
    public function __listColumns() : array
    {
        return ['paymentapiid', 'title', 'currency', 'recurring', 'classname', 'active', 'settings'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['paymentapiid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'paymentapiid' => 'integer', 
			'title' => 'string', 
			'currency' => 'string', 
			'recurring' => 'integer', 
			'classname' => 'string', 
			'active' => 'integer', 
			'settings' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'paymentapiid' => 'paymentApiId', 
			'title' => 'title', 
			'currency' => 'currency', 
			'recurring' => 'recurring', 
			'classname' => 'className', 
			'active' => 'active', 
			'settings' => 'settings'
		];
    }
}