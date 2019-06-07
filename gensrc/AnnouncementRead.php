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

class AnnouncementRead implements Table {

    const table = 'announcementread';
   
    public static function as(string $aliasName): AnnouncementReadAlias
    {
        return new AnnouncementReadAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::announcementId(),
			self::userId()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : AnnouncementReadRecord
    {
        return new AnnouncementReadRecord();
    }
    
    public static function announcementId() : ColumnField
    {
        return new ColumnField('announcementId', 'AnnouncementRead', 'announcementread', 'announcementid');
    }
    public static function userId() : ColumnField
    {
        return new ColumnField('userId', 'AnnouncementRead', 'announcementread', 'userid');
    }

    public function getTableName(): string
    {
        return 'announcementread';
    }
    
    public function __listColumns() : array
    {
        return ['announcementid', 'userid'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
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
}