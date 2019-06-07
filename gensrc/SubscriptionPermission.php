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

class SubscriptionPermission implements Table {

    const table = 'subscriptionpermission';
   
    public static function as(string $aliasName): SubscriptionPermissionAlias
    {
        return new SubscriptionPermissionAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::subscriptionPermissionId(),
			self::subscriptionId(),
			self::userGroupId()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : SubscriptionPermissionRecord
    {
        return new SubscriptionPermissionRecord();
    }
    
    public static function subscriptionPermissionId() : ColumnField
    {
        return new ColumnField('subscriptionPermissionId', 'SubscriptionPermission', 'subscriptionpermission', 'subscriptionpermissionid');
    }
    public static function subscriptionId() : ColumnField
    {
        return new ColumnField('subscriptionId', 'SubscriptionPermission', 'subscriptionpermission', 'subscriptionid');
    }
    public static function userGroupId() : ColumnField
    {
        return new ColumnField('userGroupId', 'SubscriptionPermission', 'subscriptionpermission', 'usergroupid');
    }

    public function getTableName(): string
    {
        return 'subscriptionpermission';
    }
    
    public function __listColumns() : array
    {
        return ['subscriptionpermissionid', 'subscriptionid', 'usergroupid'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['subscriptionpermissionid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'subscriptionpermissionid' => 'integer', 
			'subscriptionid' => 'integer', 
			'usergroupid' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'subscriptionpermissionid' => 'subscriptionPermissionId', 
			'subscriptionid' => 'subscriptionId', 
			'usergroupid' => 'userGroupId'
		];
    }
}