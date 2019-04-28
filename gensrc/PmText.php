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

class PmText implements Table {

    const table = 'pmtext';
   
    public static function as(string $aliasName): PmTextAlias
    {
        return new PmTextAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::pmTextId(),
			self::fromUserId(),
			self::fromUserName(),
			self::title(),
			self::message(),
			self::toUserArray(),
			self::iconId(),
			self::dateLine(),
			self::showSignature(),
			self::allowSmilie(),
			self::importPmId()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PmTextRecord
    {
        return new PmTextRecord();
    }
    
    public static function pmTextId() : ColumnField
    {
        return new ColumnField('pmtext', 'pmtextid');
    }
    public static function fromUserId() : ColumnField
    {
        return new ColumnField('pmtext', 'fromuserid');
    }
    public static function fromUserName() : ColumnField
    {
        return new ColumnField('pmtext', 'fromusername');
    }
    public static function title() : ColumnField
    {
        return new ColumnField('pmtext', 'title');
    }
    public static function message() : ColumnField
    {
        return new ColumnField('pmtext', 'message');
    }
    public static function toUserArray() : ColumnField
    {
        return new ColumnField('pmtext', 'touserarray');
    }
    public static function iconId() : ColumnField
    {
        return new ColumnField('pmtext', 'iconid');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('pmtext', 'dateline');
    }
    public static function showSignature() : ColumnField
    {
        return new ColumnField('pmtext', 'showsignature');
    }
    public static function allowSmilie() : ColumnField
    {
        return new ColumnField('pmtext', 'allowsmilie');
    }
    public static function importPmId() : ColumnField
    {
        return new ColumnField('pmtext', 'importpmid');
    }

    public function getTableName(): string
    {
        return 'pmtext';
    }
    
    public function __listColumns() : array
    {
        return ['pmtextid', 'fromuserid', 'fromusername', 'title', 'message', 'touserarray', 'iconid', 'dateline', 'showsignature', 'allowsmilie', 'importpmid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'pmtextid' => 'integer', 
			'fromuserid' => 'integer', 
			'fromusername' => 'string', 
			'title' => 'string', 
			'message' => 'string', 
			'touserarray' => 'string', 
			'iconid' => 'integer', 
			'dateline' => 'integer', 
			'showsignature' => 'integer', 
			'allowsmilie' => 'integer', 
			'importpmid' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'pmtextid' => 'pmTextId', 
			'fromuserid' => 'fromUserId', 
			'fromusername' => 'fromUserName', 
			'title' => 'title', 
			'message' => 'message', 
			'touserarray' => 'toUserArray', 
			'iconid' => 'iconId', 
			'dateline' => 'dateLine', 
			'showsignature' => 'showSignature', 
			'allowsmilie' => 'allowSmilie', 
			'importpmid' => 'importPmId'
		];
    }

}