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

class UserTitle implements Table {

    const table = 'usertitle';
   
    public static function as(string $aliasName): UserTitleAlias
    {
        return new UserTitleAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::userTitleId(),
			self::minPosts(),
			self::title()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : UserTitleRecord
    {
        return new UserTitleRecord();
    }
    
    public static function userTitleId() : ColumnField
    {
        return new ColumnField('userTitleId', 'UserTitle', 'usertitle', 'usertitleid');
    }
    public static function minPosts() : ColumnField
    {
        return new ColumnField('minPosts', 'UserTitle', 'usertitle', 'minposts');
    }
    public static function title() : ColumnField
    {
        return new ColumnField('title', 'UserTitle', 'usertitle', 'title');
    }

    public function getTableName(): string
    {
        return 'usertitle';
    }
    
    public function __listColumns() : array
    {
        return ['usertitleid', 'minposts', 'title'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['usertitleid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'usertitleid' => 'integer', 
			'minposts' => 'integer', 
			'title' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'usertitleid' => 'userTitleId', 
			'minposts' => 'minPosts', 
			'title' => 'title'
		];
    }
}