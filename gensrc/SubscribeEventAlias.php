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

class SubscribeEventAlias extends TableAlias {
   
    public function subscribeEventId() : ColumnField
    {
        return new ColumnField('subscribeEventId', 'SubscribeEvent', 'subscribeevent', 'subscribeeventid', $this->getAliasName());
    }
    public function userId() : ColumnField
    {
        return new ColumnField('userId', 'SubscribeEvent', 'subscribeevent', 'userid', $this->getAliasName());
    }
    public function eventId() : ColumnField
    {
        return new ColumnField('eventId', 'SubscribeEvent', 'subscribeevent', 'eventid', $this->getAliasName());
    }
    public function lastReminder() : ColumnField
    {
        return new ColumnField('lastReminder', 'SubscribeEvent', 'subscribeevent', 'lastreminder', $this->getAliasName());
    }
    public function reminder() : ColumnField
    {
        return new ColumnField('reminder', 'SubscribeEvent', 'subscribeevent', 'reminder', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'subscribeevent';
    }
    
    public function __listColumns() : array
    {
        return ['subscribeeventid', 'userid', 'eventid', 'lastreminder', 'reminder'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['subscribeeventid'];
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->subscribeEventId(),
			$this->userId(),
			$this->eventId(),
			$this->lastReminder(),
			$this->reminder()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : SubscribeEventRecord
    {
        return new SubscribeEventRecord();
    }
}