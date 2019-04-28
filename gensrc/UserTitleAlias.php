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

class UserTitleAlias extends TableAlias {
   
    public function userTitleId() : ColumnField
    {
        return new ColumnField('usertitle', 'usertitleid', $this->getAliasName());
    }
    public function minPosts() : ColumnField
    {
        return new ColumnField('usertitle', 'minposts', $this->getAliasName());
    }
    public function title() : ColumnField
    {
        return new ColumnField('usertitle', 'title', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'usertitle';
    }
    
    public function __listColumns() : array
    {
        return ['usertitleid', 'minposts', 'title'];
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->userTitleId(),
			$this->minPosts(),
			$this->title()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : UserTitleRecord
    {
        return new UserTitleRecord();
    }
}