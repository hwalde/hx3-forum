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

class SearchAlias extends TableAlias {
   
    public function searchId() : ColumnField
    {
        return new ColumnField('searchId', 'Search', 'search', 'searchid', $this->getAliasName());
    }
    public function userId() : ColumnField
    {
        return new ColumnField('userId', 'Search', 'search', 'userid', $this->getAliasName());
    }
    public function ipAddress() : ColumnField
    {
        return new ColumnField('ipAddress', 'Search', 'search', 'ipaddress', $this->getAliasName());
    }
    public function personal() : ColumnField
    {
        return new ColumnField('personal', 'Search', 'search', 'personal', $this->getAliasName());
    }
    public function query() : ColumnField
    {
        return new ColumnField('query', 'Search', 'search', 'query', $this->getAliasName());
    }
    public function searchUser() : ColumnField
    {
        return new ColumnField('searchUser', 'Search', 'search', 'searchuser', $this->getAliasName());
    }
    public function forumChoice() : ColumnField
    {
        return new ColumnField('forumChoice', 'Search', 'search', 'forumchoice', $this->getAliasName());
    }
    public function sortBy() : ColumnField
    {
        return new ColumnField('sortBy', 'Search', 'search', 'sortby', $this->getAliasName());
    }
    public function sortOrder() : ColumnField
    {
        return new ColumnField('sortOrder', 'Search', 'search', 'sortorder', $this->getAliasName());
    }
    public function searchTime() : ColumnField
    {
        return new ColumnField('searchTime', 'Search', 'search', 'searchtime', $this->getAliasName());
    }
    public function showPosts() : ColumnField
    {
        return new ColumnField('showPosts', 'Search', 'search', 'showposts', $this->getAliasName());
    }
    public function orderedIds() : ColumnField
    {
        return new ColumnField('orderedIds', 'Search', 'search', 'orderedids', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'Search', 'search', 'dateline', $this->getAliasName());
    }
    public function searchTerms() : ColumnField
    {
        return new ColumnField('searchTerms', 'Search', 'search', 'searchterms', $this->getAliasName());
    }
    public function displayTerms() : ColumnField
    {
        return new ColumnField('displayTerms', 'Search', 'search', 'displayterms', $this->getAliasName());
    }
    public function searchHash() : ColumnField
    {
        return new ColumnField('searchHash', 'Search', 'search', 'searchhash', $this->getAliasName());
    }
    public function titleOnly() : ColumnField
    {
        return new ColumnField('titleOnly', 'Search', 'search', 'titleonly', $this->getAliasName());
    }
    public function announceIds() : ColumnField
    {
        return new ColumnField('announceIds', 'Search', 'search', 'announceids', $this->getAliasName());
    }
    public function completed() : ColumnField
    {
        return new ColumnField('completed', 'Search', 'search', 'completed', $this->getAliasName());
    }
    public function prefixChoice() : ColumnField
    {
        return new ColumnField('prefixChoice', 'Search', 'search', 'prefixchoice', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'search';
    }
    
    public function __listColumns() : array
    {
        return ['searchid', 'userid', 'ipaddress', 'personal', 'query', 'searchuser', 'forumchoice', 'sortby', 'sortorder', 'searchtime', 'showposts', 'orderedids', 'dateline', 'searchterms', 'displayterms', 'searchhash', 'titleonly', 'announceids', 'completed', 'prefixchoice'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['searchid'];
    }
    
    public function __listNullableColumns() : array
    {
        return ['announceids', 'prefixchoice'];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'searchid' => 'integer', 
			'userid' => 'integer', 
			'ipaddress' => 'string', 
			'personal' => 'integer', 
			'query' => 'string', 
			'searchuser' => 'string', 
			'forumchoice' => 'string', 
			'sortby' => 'string', 
			'sortorder' => 'string', 
			'searchtime' => 'unknown', 
			'showposts' => 'integer', 
			'orderedids' => 'string', 
			'dateline' => 'integer', 
			'searchterms' => 'string', 
			'displayterms' => 'string', 
			'searchhash' => 'string', 
			'titleonly' => 'integer', 
			'announceids' => 'string', 
			'completed' => 'integer', 
			'prefixchoice' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'searchid' => 'searchId', 
			'userid' => 'userId', 
			'ipaddress' => 'ipAddress', 
			'personal' => 'personal', 
			'query' => 'query', 
			'searchuser' => 'searchUser', 
			'forumchoice' => 'forumChoice', 
			'sortby' => 'sortBy', 
			'sortorder' => 'sortOrder', 
			'searchtime' => 'searchTime', 
			'showposts' => 'showPosts', 
			'orderedids' => 'orderedIds', 
			'dateline' => 'dateLine', 
			'searchterms' => 'searchTerms', 
			'displayterms' => 'displayTerms', 
			'searchhash' => 'searchHash', 
			'titleonly' => 'titleOnly', 
			'announceids' => 'announceIds', 
			'completed' => 'completed', 
			'prefixchoice' => 'prefixChoice'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->searchId(),
			$this->userId(),
			$this->ipAddress(),
			$this->personal(),
			$this->query(),
			$this->searchUser(),
			$this->forumChoice(),
			$this->sortBy(),
			$this->sortOrder(),
			$this->searchTime(),
			$this->showPosts(),
			$this->orderedIds(),
			$this->dateLine(),
			$this->searchTerms(),
			$this->displayTerms(),
			$this->searchHash(),
			$this->titleOnly(),
			$this->announceIds(),
			$this->completed(),
			$this->prefixChoice()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : SearchRecord
    {
        return new SearchRecord();
    }
}