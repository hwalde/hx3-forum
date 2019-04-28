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

class Search implements Table {

    const table = 'search';
   
    public static function as(string $aliasName): SearchAlias
    {
        return new SearchAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::searchId(),
			self::userId(),
			self::ipAddress(),
			self::personal(),
			self::query(),
			self::searchUser(),
			self::forumChoice(),
			self::sortBy(),
			self::sortOrder(),
			self::searchTime(),
			self::showPosts(),
			self::orderedIds(),
			self::dateLine(),
			self::searchTerms(),
			self::displayTerms(),
			self::searchHash(),
			self::titleOnly(),
			self::announceIds(),
			self::completed(),
			self::prefixChoice()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : SearchRecord
    {
        return new SearchRecord();
    }
    
    public static function searchId() : ColumnField
    {
        return new ColumnField('search', 'searchid');
    }
    public static function userId() : ColumnField
    {
        return new ColumnField('search', 'userid');
    }
    public static function ipAddress() : ColumnField
    {
        return new ColumnField('search', 'ipaddress');
    }
    public static function personal() : ColumnField
    {
        return new ColumnField('search', 'personal');
    }
    public static function query() : ColumnField
    {
        return new ColumnField('search', 'query');
    }
    public static function searchUser() : ColumnField
    {
        return new ColumnField('search', 'searchuser');
    }
    public static function forumChoice() : ColumnField
    {
        return new ColumnField('search', 'forumchoice');
    }
    public static function sortBy() : ColumnField
    {
        return new ColumnField('search', 'sortby');
    }
    public static function sortOrder() : ColumnField
    {
        return new ColumnField('search', 'sortorder');
    }
    public static function searchTime() : ColumnField
    {
        return new ColumnField('search', 'searchtime');
    }
    public static function showPosts() : ColumnField
    {
        return new ColumnField('search', 'showposts');
    }
    public static function orderedIds() : ColumnField
    {
        return new ColumnField('search', 'orderedids');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('search', 'dateline');
    }
    public static function searchTerms() : ColumnField
    {
        return new ColumnField('search', 'searchterms');
    }
    public static function displayTerms() : ColumnField
    {
        return new ColumnField('search', 'displayterms');
    }
    public static function searchHash() : ColumnField
    {
        return new ColumnField('search', 'searchhash');
    }
    public static function titleOnly() : ColumnField
    {
        return new ColumnField('search', 'titleonly');
    }
    public static function announceIds() : ColumnField
    {
        return new ColumnField('search', 'announceids');
    }
    public static function completed() : ColumnField
    {
        return new ColumnField('search', 'completed');
    }
    public static function prefixChoice() : ColumnField
    {
        return new ColumnField('search', 'prefixchoice');
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

}