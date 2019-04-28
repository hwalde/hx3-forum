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

class SubscribeEvent implements Table {

    const table = 'subscribeevent';
   
    public static function as(string $aliasName): SubscribeEventAlias
    {
        return new SubscribeEventAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::subscribeEventId(),
			self::userId(),
			self::eventId(),
			self::lastReminder(),
			self::reminder()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : SubscribeEventRecord
    {
        return new SubscribeEventRecord();
    }
    
    public static function subscribeEventId() : ColumnField
    {
        return new ColumnField('subscribeevent', 'subscribeeventid');
    }
    public static function userId() : ColumnField
    {
        return new ColumnField('subscribeevent', 'userid');
    }
    public static function eventId() : ColumnField
    {
        return new ColumnField('subscribeevent', 'eventid');
    }
    public static function lastReminder() : ColumnField
    {
        return new ColumnField('subscribeevent', 'lastreminder');
    }
    public static function reminder() : ColumnField
    {
        return new ColumnField('subscribeevent', 'reminder');
    }

    public function getTableName(): string
    {
        return 'subscribeevent';
    }
    
    public function __listColumns() : array
    {
        return ['subscribeeventid', 'userid', 'eventid', 'lastreminder', 'reminder'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'subscribeeventid' => 'integer', 
			'userid' => 'integer', 
			'eventid' => 'integer', 
			'lastreminder' => 'integer', 
			'reminder' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'subscribeeventid' => 'subscribeEventId', 
			'userid' => 'userId', 
			'eventid' => 'eventId', 
			'lastreminder' => 'lastReminder', 
			'reminder' => 'reminder'
		];
    }

}