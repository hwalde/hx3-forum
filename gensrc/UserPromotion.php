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

class UserPromotion implements Table {

    const table = 'userpromotion';
   
    public static function as(string $aliasName): UserPromotionAlias
    {
        return new UserPromotionAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::userpromotionid(),
			self::userGroupId(),
			self::joinUserGroupId(),
			self::reputation(),
			self::date(),
			self::posts(),
			self::strategy(),
			self::type()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : UserPromotionRecord
    {
        return new UserPromotionRecord();
    }
    
    public static function userpromotionid() : ColumnField
    {
        return new ColumnField('userpromotionid', 'UserPromotion', 'userpromotion', 'userpromotionid');
    }
    public static function userGroupId() : ColumnField
    {
        return new ColumnField('userGroupId', 'UserPromotion', 'userpromotion', 'usergroupid');
    }
    public static function joinUserGroupId() : ColumnField
    {
        return new ColumnField('joinUserGroupId', 'UserPromotion', 'userpromotion', 'joinusergroupid');
    }
    public static function reputation() : ColumnField
    {
        return new ColumnField('reputation', 'UserPromotion', 'userpromotion', 'reputation');
    }
    public static function date() : ColumnField
    {
        return new ColumnField('date', 'UserPromotion', 'userpromotion', 'date');
    }
    public static function posts() : ColumnField
    {
        return new ColumnField('posts', 'UserPromotion', 'userpromotion', 'posts');
    }
    public static function strategy() : ColumnField
    {
        return new ColumnField('strategy', 'UserPromotion', 'userpromotion', 'strategy');
    }
    public static function type() : ColumnField
    {
        return new ColumnField('type', 'UserPromotion', 'userpromotion', 'type');
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
}