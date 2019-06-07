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

class BookmarkSiteAlias extends TableAlias {
   
    public function bookmarkSiteId() : ColumnField
    {
        return new ColumnField('bookmarkSiteId', 'BookmarkSite', 'bookmarksite', 'bookmarksiteid', $this->getAliasName());
    }
    public function title() : ColumnField
    {
        return new ColumnField('title', 'BookmarkSite', 'bookmarksite', 'title', $this->getAliasName());
    }
    public function iconPath() : ColumnField
    {
        return new ColumnField('iconPath', 'BookmarkSite', 'bookmarksite', 'iconpath', $this->getAliasName());
    }
    public function active() : ColumnField
    {
        return new ColumnField('active', 'BookmarkSite', 'bookmarksite', 'active', $this->getAliasName());
    }
    public function displayOrder() : ColumnField
    {
        return new ColumnField('displayOrder', 'BookmarkSite', 'bookmarksite', 'displayorder', $this->getAliasName());
    }
    public function url() : ColumnField
    {
        return new ColumnField('url', 'BookmarkSite', 'bookmarksite', 'url', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'bookmarksite';
    }
    
    public function __listColumns() : array
    {
        return ['bookmarksiteid', 'title', 'iconpath', 'active', 'displayorder', 'url'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['bookmarksiteid'];
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->bookmarkSiteId(),
			$this->title(),
			$this->iconPath(),
			$this->active(),
			$this->displayOrder(),
			$this->url()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : BookmarkSiteRecord
    {
        return new BookmarkSiteRecord();
    }
}