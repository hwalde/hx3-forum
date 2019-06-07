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

class Subscription implements Table {

    const table = 'subscription';
   
    public static function as(string $aliasName): SubscriptionAlias
    {
        return new SubscriptionAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::subscriptionId(),
			self::cost(),
			self::forums(),
			self::nUserGroupId(),
			self::memberGroupIds(),
			self::active(),
			self::displayOrder(),
			self::options(),
			self::adminOptions()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : SubscriptionRecord
    {
        return new SubscriptionRecord();
    }
    
    public static function subscriptionId() : ColumnField
    {
        return new ColumnField('subscriptionId', 'Subscription', 'subscription', 'subscriptionid');
    }
    public static function cost() : ColumnField
    {
        return new ColumnField('cost', 'Subscription', 'subscription', 'cost');
    }
    public static function forums() : ColumnField
    {
        return new ColumnField('forums', 'Subscription', 'subscription', 'forums');
    }
    public static function nUserGroupId() : ColumnField
    {
        return new ColumnField('nUserGroupId', 'Subscription', 'subscription', 'nusergroupid');
    }
    public static function memberGroupIds() : ColumnField
    {
        return new ColumnField('memberGroupIds', 'Subscription', 'subscription', 'membergroupids');
    }
    public static function active() : ColumnField
    {
        return new ColumnField('active', 'Subscription', 'subscription', 'active');
    }
    public static function displayOrder() : ColumnField
    {
        return new ColumnField('displayOrder', 'Subscription', 'subscription', 'displayorder');
    }
    public static function options() : ColumnField
    {
        return new ColumnField('options', 'Subscription', 'subscription', 'options');
    }
    public static function adminOptions() : ColumnField
    {
        return new ColumnField('adminOptions', 'Subscription', 'subscription', 'adminoptions');
    }

    public function getTableName(): string
    {
        return 'subscription';
    }
    
    public function __listColumns() : array
    {
        return ['subscriptionid', 'cost', 'forums', 'nusergroupid', 'membergroupids', 'active', 'displayorder', 'options', 'adminoptions'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['subscriptionid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'subscriptionid' => 'integer', 
			'cost' => 'string', 
			'forums' => 'string', 
			'nusergroupid' => 'integer', 
			'membergroupids' => 'string', 
			'active' => 'integer', 
			'displayorder' => 'integer', 
			'options' => 'integer', 
			'adminoptions' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'subscriptionid' => 'subscriptionId', 
			'cost' => 'cost', 
			'forums' => 'forums', 
			'nusergroupid' => 'nUserGroupId', 
			'membergroupids' => 'memberGroupIds', 
			'active' => 'active', 
			'displayorder' => 'displayOrder', 
			'options' => 'options', 
			'adminoptions' => 'adminOptions'
		];
    }
}