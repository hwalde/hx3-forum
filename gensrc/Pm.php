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

class Pm implements Table {

    const table = 'pm';
   
    public static function as(string $aliasName): PmAlias
    {
        return new PmAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::pmId(),
			self::pmTextId(),
			self::userId(),
			self::folderId(),
			self::messageRead()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PmRecord
    {
        return new PmRecord();
    }
    
    public static function pmId() : ColumnField
    {
        return new ColumnField('pm', 'pmid');
    }
    public static function pmTextId() : ColumnField
    {
        return new ColumnField('pm', 'pmtextid');
    }
    public static function userId() : ColumnField
    {
        return new ColumnField('pm', 'userid');
    }
    public static function folderId() : ColumnField
    {
        return new ColumnField('pm', 'folderid');
    }
    public static function messageRead() : ColumnField
    {
        return new ColumnField('pm', 'messageread');
    }

    public function getTableName(): string
    {
        return 'pm';
    }
    
    public function __listColumns() : array
    {
        return ['pmid', 'pmtextid', 'userid', 'folderid', 'messageread'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'pmid' => 'integer', 
			'pmtextid' => 'integer', 
			'userid' => 'integer', 
			'folderid' => 'integer', 
			'messageread' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'pmid' => 'pmId', 
			'pmtextid' => 'pmTextId', 
			'userid' => 'userId', 
			'folderid' => 'folderId', 
			'messageread' => 'messageRead'
		];
    }

}