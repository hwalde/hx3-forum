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
        return new ColumnField('search', 'searchid', $this->getAliasName());
    }
    public function userId() : ColumnField
    {
        return new ColumnField('search', 'userid', $this->getAliasName());
    }
    public function ipAddress() : ColumnField
    {
        return new ColumnField('search', 'ipaddress', $this->getAliasName());
    }
    public function personal() : ColumnField
    {
        return new ColumnField('search', 'personal', $this->getAliasName());
    }
    public function query() : ColumnField
    {
        return new ColumnField('search', 'query', $this->getAliasName());
    }
    public function searchUser() : ColumnField
    {
        return new ColumnField('search', 'searchuser', $this->getAliasName());
    }
    public function forumChoice() : ColumnField
    {
        return new ColumnField('search', 'forumchoice', $this->getAliasName());
    }
    public function sortBy() : ColumnField
    {
        return new ColumnField('search', 'sortby', $this->getAliasName());
    }
    public function sortOrder() : ColumnField
    {
        return new ColumnField('search', 'sortorder', $this->getAliasName());
    }
    public function searchTime() : ColumnField
    {
        return new ColumnField('search', 'searchtime', $this->getAliasName());
    }
    public function showPosts() : ColumnField
    {
        return new ColumnField('search', 'showposts', $this->getAliasName());
    }
    public function orderedIds() : ColumnField
    {
        return new ColumnField('search', 'orderedids', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('search', 'dateline', $this->getAliasName());
    }
    public function searchTerms() : ColumnField
    {
        return new ColumnField('search', 'searchterms', $this->getAliasName());
    }
    public function displayTerms() : ColumnField
    {
        return new ColumnField('search', 'displayterms', $this->getAliasName());
    }
    public function searchHash() : ColumnField
    {
        return new ColumnField('search', 'searchhash', $this->getAliasName());
    }
    public function titleOnly() : ColumnField
    {
        return new ColumnField('search', 'titleonly', $this->getAliasName());
    }
    public function announceIds() : ColumnField
    {
        return new ColumnField('search', 'announceids', $this->getAliasName());
    }
    public function completed() : ColumnField
    {
        return new ColumnField('search', 'completed', $this->getAliasName());
    }
    public function prefixChoice() : ColumnField
    {
        return new ColumnField('search', 'prefixchoice', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'search';
    }
    
    public function __listColumns() : array
    {
        return ['searchid', 'userid', 'ipaddress', 'personal', 'query', 'searchuser', 'forumchoice', 'sortby', 'sortorder', 'searchtime', 'showposts', 'orderedids', 'dateline', 'searchterms', 'displayterms', 'searchhash', 'titleonly', 'announceids', 'completed', 'prefixchoice'];
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