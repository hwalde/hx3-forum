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

class SubscriptionPermissionAlias extends TableAlias {
   
    public function subscriptionPermissionId() : ColumnField
    {
        return new ColumnField('subscriptionpermission', 'subscriptionpermissionid', $this->getAliasName());
    }
    public function subscriptionId() : ColumnField
    {
        return new ColumnField('subscriptionpermission', 'subscriptionid', $this->getAliasName());
    }
    public function userGroupId() : ColumnField
    {
        return new ColumnField('subscriptionpermission', 'usergroupid', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'subscriptionpermission';
    }
    
    public function __listColumns() : array
    {
        return ['subscriptionpermissionid', 'subscriptionid', 'usergroupid'];
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->subscriptionPermissionId(),
			$this->subscriptionId(),
			$this->userGroupId()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : SubscriptionPermissionRecord
    {
        return new SubscriptionPermissionRecord();
    }
}