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

class PmReceipt implements Table {

    const table = 'pmreceipt';
   
    public static function as(string $aliasName): PmReceiptAlias
    {
        return new PmReceiptAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::pmId(),
			self::userId(),
			self::toUserId(),
			self::toUserName(),
			self::title(),
			self::sendTime(),
			self::readTime(),
			self::denied()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PmReceiptRecord
    {
        return new PmReceiptRecord();
    }
    
    public static function pmId() : ColumnField
    {
        return new ColumnField('pmreceipt', 'pmid');
    }
    public static function userId() : ColumnField
    {
        return new ColumnField('pmreceipt', 'userid');
    }
    public static function toUserId() : ColumnField
    {
        return new ColumnField('pmreceipt', 'touserid');
    }
    public static function toUserName() : ColumnField
    {
        return new ColumnField('pmreceipt', 'tousername');
    }
    public static function title() : ColumnField
    {
        return new ColumnField('pmreceipt', 'title');
    }
    public static function sendTime() : ColumnField
    {
        return new ColumnField('pmreceipt', 'sendtime');
    }
    public static function readTime() : ColumnField
    {
        return new ColumnField('pmreceipt', 'readtime');
    }
    public static function denied() : ColumnField
    {
        return new ColumnField('pmreceipt', 'denied');
    }

    public function getTableName(): string
    {
        return 'pmreceipt';
    }
    
    public function __listColumns() : array
    {
        return ['pmid', 'userid', 'touserid', 'tousername', 'title', 'sendtime', 'readtime', 'denied'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'pmid' => 'integer', 
			'userid' => 'integer', 
			'touserid' => 'integer', 
			'tousername' => 'string', 
			'title' => 'string', 
			'sendtime' => 'integer', 
			'readtime' => 'integer', 
			'denied' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'pmid' => 'pmId', 
			'userid' => 'userId', 
			'touserid' => 'toUserId', 
			'tousername' => 'toUserName', 
			'title' => 'title', 
			'sendtime' => 'sendTime', 
			'readtime' => 'readTime', 
			'denied' => 'denied'
		];
    }

}