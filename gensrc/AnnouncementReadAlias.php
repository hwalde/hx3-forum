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

class AnnouncementReadAlias extends TableAlias {
   
    public function announcementId() : ColumnField
    {
        return new ColumnField('announcementread', 'announcementid', $this->getAliasName());
    }
    public function userId() : ColumnField
    {
        return new ColumnField('announcementread', 'userid', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'announcementread';
    }
    
    public function __listColumns() : array
    {
        return ['announcementid', 'userid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'announcementid' => 'integer', 
			'userid' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'announcementid' => 'announcementId', 
			'userid' => 'userId'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->announcementId(),
			$this->userId()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : AnnouncementReadRecord
    {
        return new AnnouncementReadRecord();
    }
}