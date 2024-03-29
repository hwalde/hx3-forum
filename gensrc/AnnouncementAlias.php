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

class AnnouncementAlias extends TableAlias {
   
    public function announcementId() : ColumnField
    {
        return new ColumnField('announcementId', 'Announcement', 'announcement', 'announcementid', $this->getAliasName());
    }
    public function title() : ColumnField
    {
        return new ColumnField('title', 'Announcement', 'announcement', 'title', $this->getAliasName());
    }
    public function userId() : ColumnField
    {
        return new ColumnField('userId', 'Announcement', 'announcement', 'userid', $this->getAliasName());
    }
    public function startDate() : ColumnField
    {
        return new ColumnField('startDate', 'Announcement', 'announcement', 'startdate', $this->getAliasName());
    }
    public function endDate() : ColumnField
    {
        return new ColumnField('endDate', 'Announcement', 'announcement', 'enddate', $this->getAliasName());
    }
    public function pageText() : ColumnField
    {
        return new ColumnField('pageText', 'Announcement', 'announcement', 'pagetext', $this->getAliasName());
    }
    public function forumId() : ColumnField
    {
        return new ColumnField('forumId', 'Announcement', 'announcement', 'forumid', $this->getAliasName());
    }
    public function views() : ColumnField
    {
        return new ColumnField('views', 'Announcement', 'announcement', 'views', $this->getAliasName());
    }
    public function announcementOptions() : ColumnField
    {
        return new ColumnField('announcementOptions', 'Announcement', 'announcement', 'announcementoptions', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'announcement';
    }
    
    public function __listColumns() : array
    {
        return ['announcementid', 'title', 'userid', 'startdate', 'enddate', 'pagetext', 'forumid', 'views', 'announcementoptions'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['announcementid'];
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->announcementId(),
			$this->title(),
			$this->userId(),
			$this->startDate(),
			$this->endDate(),
			$this->pageText(),
			$this->forumId(),
			$this->views(),
			$this->announcementOptions()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : AnnouncementRecord
    {
        return new AnnouncementRecord();
    }
}