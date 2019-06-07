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

class SubscriptionAlias extends TableAlias {
   
    public function subscriptionId() : ColumnField
    {
        return new ColumnField('subscriptionId', 'Subscription', 'subscription', 'subscriptionid', $this->getAliasName());
    }
    public function cost() : ColumnField
    {
        return new ColumnField('cost', 'Subscription', 'subscription', 'cost', $this->getAliasName());
    }
    public function forums() : ColumnField
    {
        return new ColumnField('forums', 'Subscription', 'subscription', 'forums', $this->getAliasName());
    }
    public function nUserGroupId() : ColumnField
    {
        return new ColumnField('nUserGroupId', 'Subscription', 'subscription', 'nusergroupid', $this->getAliasName());
    }
    public function memberGroupIds() : ColumnField
    {
        return new ColumnField('memberGroupIds', 'Subscription', 'subscription', 'membergroupids', $this->getAliasName());
    }
    public function active() : ColumnField
    {
        return new ColumnField('active', 'Subscription', 'subscription', 'active', $this->getAliasName());
    }
    public function displayOrder() : ColumnField
    {
        return new ColumnField('displayOrder', 'Subscription', 'subscription', 'displayorder', $this->getAliasName());
    }
    public function options() : ColumnField
    {
        return new ColumnField('options', 'Subscription', 'subscription', 'options', $this->getAliasName());
    }
    public function adminOptions() : ColumnField
    {
        return new ColumnField('adminOptions', 'Subscription', 'subscription', 'adminoptions', $this->getAliasName());
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->subscriptionId(),
			$this->cost(),
			$this->forums(),
			$this->nUserGroupId(),
			$this->memberGroupIds(),
			$this->active(),
			$this->displayOrder(),
			$this->options(),
			$this->adminOptions()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : SubscriptionRecord
    {
        return new SubscriptionRecord();
    }
}