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

class AdminMessageAlias extends TableAlias {
   
    public function adminMessageId() : ColumnField
    {
        return new ColumnField('adminMessageId', 'AdminMessage', 'adminmessage', 'adminmessageid', $this->getAliasName());
    }
    public function varName() : ColumnField
    {
        return new ColumnField('varName', 'AdminMessage', 'adminmessage', 'varname', $this->getAliasName());
    }
    public function dismissable() : ColumnField
    {
        return new ColumnField('dismissable', 'AdminMessage', 'adminmessage', 'dismissable', $this->getAliasName());
    }
    public function script() : ColumnField
    {
        return new ColumnField('script', 'AdminMessage', 'adminmessage', 'script', $this->getAliasName());
    }
    public function action() : ColumnField
    {
        return new ColumnField('action', 'AdminMessage', 'adminmessage', 'action', $this->getAliasName());
    }
    public function execUrl() : ColumnField
    {
        return new ColumnField('execUrl', 'AdminMessage', 'adminmessage', 'execurl', $this->getAliasName());
    }
    public function method() : ColumnField
    {
        return new ColumnField('method', 'AdminMessage', 'adminmessage', 'method', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'AdminMessage', 'adminmessage', 'dateline', $this->getAliasName());
    }
    public function status() : ColumnField
    {
        return new ColumnField('status', 'AdminMessage', 'adminmessage', 'status', $this->getAliasName());
    }
    public function statusUserId() : ColumnField
    {
        return new ColumnField('statusUserId', 'AdminMessage', 'adminmessage', 'statususerid', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'adminmessage';
    }
    
    public function __listColumns() : array
    {
        return ['adminmessageid', 'varname', 'dismissable', 'script', 'action', 'execurl', 'method', 'dateline', 'status', 'statususerid'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['adminmessageid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'adminmessageid' => 'integer', 
			'varname' => 'string', 
			'dismissable' => 'integer', 
			'script' => 'string', 
			'action' => 'string', 
			'execurl' => 'string', 
			'method' => 'string', 
			'dateline' => 'integer', 
			'status' => 'string', 
			'statususerid' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'adminmessageid' => 'adminMessageId', 
			'varname' => 'varName', 
			'dismissable' => 'dismissable', 
			'script' => 'script', 
			'action' => 'action', 
			'execurl' => 'execUrl', 
			'method' => 'method', 
			'dateline' => 'dateLine', 
			'status' => 'status', 
			'statususerid' => 'statusUserId'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->adminMessageId(),
			$this->varName(),
			$this->dismissable(),
			$this->script(),
			$this->action(),
			$this->execUrl(),
			$this->method(),
			$this->dateLine(),
			$this->status(),
			$this->statusUserId()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : AdminMessageRecord
    {
        return new AdminMessageRecord();
    }
}