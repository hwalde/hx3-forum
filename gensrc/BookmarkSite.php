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

class BookmarkSite implements Table {

    const table = 'bookmarksite';
   
    public static function as(string $aliasName): BookmarkSiteAlias
    {
        return new BookmarkSiteAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::bookmarkSiteId(),
			self::title(),
			self::iconPath(),
			self::active(),
			self::displayOrder(),
			self::url()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : BookmarkSiteRecord
    {
        return new BookmarkSiteRecord();
    }
    
    public static function bookmarkSiteId() : ColumnField
    {
        return new ColumnField('bookmarksite', 'bookmarksiteid');
    }
    public static function title() : ColumnField
    {
        return new ColumnField('bookmarksite', 'title');
    }
    public static function iconPath() : ColumnField
    {
        return new ColumnField('bookmarksite', 'iconpath');
    }
    public static function active() : ColumnField
    {
        return new ColumnField('bookmarksite', 'active');
    }
    public static function displayOrder() : ColumnField
    {
        return new ColumnField('bookmarksite', 'displayorder');
    }
    public static function url() : ColumnField
    {
        return new ColumnField('bookmarksite', 'url');
    }

    public function getTableName(): string
    {
        return 'bookmarksite';
    }
    
    public function __listColumns() : array
    {
        return ['bookmarksiteid', 'title', 'iconpath', 'active', 'displayorder', 'url'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'bookmarksiteid' => 'integer', 
			'title' => 'string', 
			'iconpath' => 'string', 
			'active' => 'integer', 
			'displayorder' => 'integer', 
			'url' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'bookmarksiteid' => 'bookmarkSiteId', 
			'title' => 'title', 
			'iconpath' => 'iconPath', 
			'active' => 'active', 
			'displayorder' => 'displayOrder', 
			'url' => 'url'
		];
    }

}