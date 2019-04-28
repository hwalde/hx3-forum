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

class SubscribeThread implements Table {

    const table = 'subscribethread';
   
    public static function as(string $aliasName): SubscribeThreadAlias
    {
        return new SubscribeThreadAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::subscribeThreadId(),
			self::userId(),
			self::threadId(),
			self::emailUpdate(),
			self::folderId(),
			self::canView()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : SubscribeThreadRecord
    {
        return new SubscribeThreadRecord();
    }
    
    public static function subscribeThreadId() : ColumnField
    {
        return new ColumnField('subscribethread', 'subscribethreadid');
    }
    public static function userId() : ColumnField
    {
        return new ColumnField('subscribethread', 'userid');
    }
    public static function threadId() : ColumnField
    {
        return new ColumnField('subscribethread', 'threadid');
    }
    public static function emailUpdate() : ColumnField
    {
        return new ColumnField('subscribethread', 'emailupdate');
    }
    public static function folderId() : ColumnField
    {
        return new ColumnField('subscribethread', 'folderid');
    }
    public static function canView() : ColumnField
    {
        return new ColumnField('subscribethread', 'canview');
    }

    public function getTableName(): string
    {
        return 'subscribethread';
    }
    
    public function __listColumns() : array
    {
        return ['subscribethreadid', 'userid', 'threadid', 'emailupdate', 'folderid', 'canview'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'subscribethreadid' => 'integer', 
			'userid' => 'integer', 
			'threadid' => 'integer', 
			'emailupdate' => 'integer', 
			'folderid' => 'integer', 
			'canview' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'subscribethreadid' => 'subscribeThreadId', 
			'userid' => 'userId', 
			'threadid' => 'threadId', 
			'emailupdate' => 'emailUpdate', 
			'folderid' => 'folderId', 
			'canview' => 'canView'
		];
    }

}