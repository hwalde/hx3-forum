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

class PaymentApiAlias extends TableAlias {
   
    public function paymentApiId() : ColumnField
    {
        return new ColumnField('paymentapi', 'paymentapiid', $this->getAliasName());
    }
    public function title() : ColumnField
    {
        return new ColumnField('paymentapi', 'title', $this->getAliasName());
    }
    public function currency() : ColumnField
    {
        return new ColumnField('paymentapi', 'currency', $this->getAliasName());
    }
    public function recurring() : ColumnField
    {
        return new ColumnField('paymentapi', 'recurring', $this->getAliasName());
    }
    public function className() : ColumnField
    {
        return new ColumnField('paymentapi', 'classname', $this->getAliasName());
    }
    public function active() : ColumnField
    {
        return new ColumnField('paymentapi', 'active', $this->getAliasName());
    }
    public function settings() : ColumnField
    {
        return new ColumnField('paymentapi', 'settings', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'paymentapi';
    }
    
    public function __listColumns() : array
    {
        return ['paymentapiid', 'title', 'currency', 'recurring', 'classname', 'active', 'settings'];
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->paymentApiId(),
			$this->title(),
			$this->currency(),
			$this->recurring(),
			$this->className(),
			$this->active(),
			$this->settings()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PaymentApiRecord
    {
        return new PaymentApiRecord();
    }
}