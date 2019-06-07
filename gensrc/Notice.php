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

class Notice implements Table {

    const table = 'notice';
   
    public static function as(string $aliasName): NoticeAlias
    {
        return new NoticeAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::noticeId(),
			self::title(),
			self::displayOrder(),
			self::persistent(),
			self::active()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : NoticeRecord
    {
        return new NoticeRecord();
    }
    
    public static function noticeId() : ColumnField
    {
        return new ColumnField('noticeId', 'Notice', 'notice', 'noticeid');
    }
    public static function title() : ColumnField
    {
        return new ColumnField('title', 'Notice', 'notice', 'title');
    }
    public static function displayOrder() : ColumnField
    {
        return new ColumnField('displayOrder', 'Notice', 'notice', 'displayorder');
    }
    public static function persistent() : ColumnField
    {
        return new ColumnField('persistent', 'Notice', 'notice', 'persistent');
    }
    public static function active() : ColumnField
    {
        return new ColumnField('active', 'Notice', 'notice', 'active');
    }

    public function getTableName(): string
    {
        return 'notice';
    }
    
    public function __listColumns() : array
    {
        return ['noticeid', 'title', 'displayorder', 'persistent', 'active'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['noticeid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'noticeid' => 'integer', 
			'title' => 'string', 
			'displayorder' => 'integer', 
			'persistent' => 'integer', 
			'active' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'noticeid' => 'noticeId', 
			'title' => 'title', 
			'displayorder' => 'displayOrder', 
			'persistent' => 'persistent', 
			'active' => 'active'
		];
    }
}