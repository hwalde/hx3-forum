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

class Announcement implements Table {

    const table = 'announcement';
   
    public static function as(string $aliasName): AnnouncementAlias
    {
        return new AnnouncementAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::announcementId(),
			self::title(),
			self::userId(),
			self::startDate(),
			self::endDate(),
			self::pageText(),
			self::forumId(),
			self::views(),
			self::announcementOptions()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : AnnouncementRecord
    {
        return new AnnouncementRecord();
    }
    
    public static function announcementId() : ColumnField
    {
        return new ColumnField('announcement', 'announcementid');
    }
    public static function title() : ColumnField
    {
        return new ColumnField('announcement', 'title');
    }
    public static function userId() : ColumnField
    {
        return new ColumnField('announcement', 'userid');
    }
    public static function startDate() : ColumnField
    {
        return new ColumnField('announcement', 'startdate');
    }
    public static function endDate() : ColumnField
    {
        return new ColumnField('announcement', 'enddate');
    }
    public static function pageText() : ColumnField
    {
        return new ColumnField('announcement', 'pagetext');
    }
    public static function forumId() : ColumnField
    {
        return new ColumnField('announcement', 'forumid');
    }
    public static function views() : ColumnField
    {
        return new ColumnField('announcement', 'views');
    }
    public static function announcementOptions() : ColumnField
    {
        return new ColumnField('announcement', 'announcementoptions');
    }

    public function getTableName(): string
    {
        return 'announcement';
    }
    
    public function __listColumns() : array
    {
        return ['announcementid', 'title', 'userid', 'startdate', 'enddate', 'pagetext', 'forumid', 'views', 'announcementoptions'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'announcementid' => 'integer', 
			'title' => 'string', 
			'userid' => 'integer', 
			'startdate' => 'integer', 
			'enddate' => 'integer', 
			'pagetext' => 'string', 
			'forumid' => 'integer', 
			'views' => 'integer', 
			'announcementoptions' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'announcementid' => 'announcementId', 
			'title' => 'title', 
			'userid' => 'userId', 
			'startdate' => 'startDate', 
			'enddate' => 'endDate', 
			'pagetext' => 'pageText', 
			'forumid' => 'forumId', 
			'views' => 'views', 
			'announcementoptions' => 'announcementOptions'
		];
    }

}