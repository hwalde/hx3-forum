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

class ThreadRate implements Table {

    const table = 'threadrate';
   
    public static function as(string $aliasName): ThreadRateAlias
    {
        return new ThreadRateAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::threadRateId(),
			self::threadId(),
			self::userId(),
			self::vote(),
			self::ipAddress()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : ThreadRateRecord
    {
        return new ThreadRateRecord();
    }
    
    public static function threadRateId() : ColumnField
    {
        return new ColumnField('threadRateId', 'ThreadRate', 'threadrate', 'threadrateid');
    }
    public static function threadId() : ColumnField
    {
        return new ColumnField('threadId', 'ThreadRate', 'threadrate', 'threadid');
    }
    public static function userId() : ColumnField
    {
        return new ColumnField('userId', 'ThreadRate', 'threadrate', 'userid');
    }
    public static function vote() : ColumnField
    {
        return new ColumnField('vote', 'ThreadRate', 'threadrate', 'vote');
    }
    public static function ipAddress() : ColumnField
    {
        return new ColumnField('ipAddress', 'ThreadRate', 'threadrate', 'ipaddress');
    }

    public function getTableName(): string
    {
        return 'threadrate';
    }
    
    public function __listColumns() : array
    {
        return ['threadrateid', 'threadid', 'userid', 'vote', 'ipaddress'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['threadrateid'];
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
}