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

class UserPromotionAlias extends TableAlias {
   
    public function userpromotionid() : ColumnField
    {
        return new ColumnField('userpromotionid', 'UserPromotion', 'userpromotion', 'userpromotionid', $this->getAliasName());
    }
    public function userGroupId() : ColumnField
    {
        return new ColumnField('userGroupId', 'UserPromotion', 'userpromotion', 'usergroupid', $this->getAliasName());
    }
    public function joinUserGroupId() : ColumnField
    {
        return new ColumnField('joinUserGroupId', 'UserPromotion', 'userpromotion', 'joinusergroupid', $this->getAliasName());
    }
    public function reputation() : ColumnField
    {
        return new ColumnField('reputation', 'UserPromotion', 'userpromotion', 'reputation', $this->getAliasName());
    }
    public function date() : ColumnField
    {
        return new ColumnField('date', 'UserPromotion', 'userpromotion', 'date', $this->getAliasName());
    }
    public function posts() : ColumnField
    {
        return new ColumnField('posts', 'UserPromotion', 'userpromotion', 'posts', $this->getAliasName());
    }
    public function strategy() : ColumnField
    {
        return new ColumnField('strategy', 'UserPromotion', 'userpromotion', 'strategy', $this->getAliasName());
    }
    public function type() : ColumnField
    {
        return new ColumnField('type', 'UserPromotion', 'userpromotion', 'type', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'userpromotion';
    }
    
    public function __listColumns() : array
    {
        return ['userpromotionid', 'usergroupid', 'joinusergroupid', 'reputation', 'date', 'posts', 'strategy', 'type'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['userpromotionid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'userpromotionid' => 'integer', 
			'usergroupid' => 'integer', 
			'joinusergroupid' => 'integer', 
			'reputation' => 'integer', 
			'date' => 'integer', 
			'posts' => 'integer', 
			'strategy' => 'integer', 
			'type' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'userpromotionid' => 'userpromotionid', 
			'usergroupid' => 'userGroupId', 
			'joinusergroupid' => 'joinUserGroupId', 
			'reputation' => 'reputation', 
			'date' => 'date', 
			'posts' => 'posts', 
			'strategy' => 'strategy', 
			'type' => 'type'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->userpromotionid(),
			$this->userGroupId(),
			$this->joinUserGroupId(),
			$this->reputation(),
			$this->date(),
			$this->posts(),
			$this->strategy(),
			$this->type()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : UserPromotionRecord
    {
        return new UserPromotionRecord();
    }
}