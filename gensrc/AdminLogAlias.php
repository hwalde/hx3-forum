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

class AdminLogAlias extends TableAlias {
   
    public function adminLogId() : ColumnField
    {
        return new ColumnField('adminLogId', 'AdminLog', 'adminlog', 'adminlogid', $this->getAliasName());
    }
    public function userId() : ColumnField
    {
        return new ColumnField('userId', 'AdminLog', 'adminlog', 'userid', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'AdminLog', 'adminlog', 'dateline', $this->getAliasName());
    }
    public function script() : ColumnField
    {
        return new ColumnField('script', 'AdminLog', 'adminlog', 'script', $this->getAliasName());
    }
    public function action() : ColumnField
    {
        return new ColumnField('action', 'AdminLog', 'adminlog', 'action', $this->getAliasName());
    }
    public function extraInfo() : ColumnField
    {
        return new ColumnField('extraInfo', 'AdminLog', 'adminlog', 'extrainfo', $this->getAliasName());
    }
    public function ipAddress() : ColumnField
    {
        return new ColumnField('ipAddress', 'AdminLog', 'adminlog', 'ipaddress', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'adminlog';
    }
    
    public function __listColumns() : array
    {
        return ['adminlogid', 'userid', 'dateline', 'script', 'action', 'extrainfo', 'ipaddress'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['adminlogid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'adminlogid' => 'integer', 
			'userid' => 'integer', 
			'dateline' => 'integer', 
			'script' => 'string', 
			'action' => 'string', 
			'extrainfo' => 'string', 
			'ipaddress' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'adminlogid' => 'adminLogId', 
			'userid' => 'userId', 
			'dateline' => 'dateLine', 
			'script' => 'script', 
			'action' => 'action', 
			'extrainfo' => 'extraInfo', 
			'ipaddress' => 'ipAddress'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->adminLogId(),
			$this->userId(),
			$this->dateLine(),
			$this->script(),
			$this->action(),
			$this->extraInfo(),
			$this->ipAddress()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : AdminLogRecord
    {
        return new AdminLogRecord();
    }
}