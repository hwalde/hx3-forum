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

class ThreadRateAlias extends TableAlias {
   
    public function threadRateId() : ColumnField
    {
        return new ColumnField('threadrate', 'threadrateid', $this->getAliasName());
    }
    public function threadId() : ColumnField
    {
        return new ColumnField('threadrate', 'threadid', $this->getAliasName());
    }
    public function userId() : ColumnField
    {
        return new ColumnField('threadrate', 'userid', $this->getAliasName());
    }
    public function vote() : ColumnField
    {
        return new ColumnField('threadrate', 'vote', $this->getAliasName());
    }
    public function ipAddress() : ColumnField
    {
        return new ColumnField('threadrate', 'ipaddress', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'threadrate';
    }
    
    public function __listColumns() : array
    {
        return ['threadrateid', 'threadid', 'userid', 'vote', 'ipaddress'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'threadrateid' => 'integer', 
			'threadid' => 'integer', 
			'userid' => 'integer', 
			'vote' => 'integer', 
			'ipaddress' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'threadrateid' => 'threadRateId', 
			'threadid' => 'threadId', 
			'userid' => 'userId', 
			'vote' => 'vote', 
			'ipaddress' => 'ipAddress'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->threadRateId(),
			$this->threadId(),
			$this->userId(),
			$this->vote(),
			$this->ipAddress()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : ThreadRateRecord
    {
        return new ThreadRateRecord();
    }
}