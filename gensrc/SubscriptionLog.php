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

class SubscriptionLog implements Table {

    const table = 'subscriptionlog';
   
    public static function as(string $aliasName): SubscriptionLogAlias
    {
        return new SubscriptionLogAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::subscriptionLogId(),
			self::subscriptionId(),
			self::userId(),
			self::pUserGroupId(),
			self::status(),
			self::regDate(),
			self::expiryDate()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : SubscriptionLogRecord
    {
        return new SubscriptionLogRecord();
    }
    
    public static function subscriptionLogId() : ColumnField
    {
        return new ColumnField('subscriptionlog', 'subscriptionlogid');
    }
    public static function subscriptionId() : ColumnField
    {
        return new ColumnField('subscriptionlog', 'subscriptionid');
    }
    public static function userId() : ColumnField
    {
        return new ColumnField('subscriptionlog', 'userid');
    }
    public static function pUserGroupId() : ColumnField
    {
        return new ColumnField('subscriptionlog', 'pusergroupid');
    }
    public static function status() : ColumnField
    {
        return new ColumnField('subscriptionlog', 'status');
    }
    public static function regDate() : ColumnField
    {
        return new ColumnField('subscriptionlog', 'regdate');
    }
    public static function expiryDate() : ColumnField
    {
        return new ColumnField('subscriptionlog', 'expirydate');
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

}