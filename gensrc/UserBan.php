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

class UserBan implements Table {

    const table = 'userban';
   
    public static function as(string $aliasName): UserBanAlias
    {
        return new UserBanAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::userId(),
			self::userGroupId(),
			self::displayGroupId(),
			self::userTitle(),
			self::customTitle(),
			self::adminId(),
			self::bandate(),
			self::liftDate(),
			self::reason()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : UserBanRecord
    {
        return new UserBanRecord();
    }
    
    public static function userId() : ColumnField
    {
        return new ColumnField('userId', 'UserBan', 'userban', 'userid');
    }
    public static function userGroupId() : ColumnField
    {
        return new ColumnField('userGroupId', 'UserBan', 'userban', 'usergroupid');
    }
    public static function displayGroupId() : ColumnField
    {
        return new ColumnField('displayGroupId', 'UserBan', 'userban', 'displaygroupid');
    }
    public static function userTitle() : ColumnField
    {
        return new ColumnField('userTitle', 'UserBan', 'userban', 'usertitle');
    }
    public static function customTitle() : ColumnField
    {
        return new ColumnField('customTitle', 'UserBan', 'userban', 'customtitle');
    }
    public static function adminId() : ColumnField
    {
        return new ColumnField('adminId', 'UserBan', 'userban', 'adminid');
    }
    public static function bandate() : ColumnField
    {
        return new ColumnField('bandate', 'UserBan', 'userban', 'bandate');
    }
    public static function liftDate() : ColumnField
    {
        return new ColumnField('liftDate', 'UserBan', 'userban', 'liftdate');
    }
    public static function reason() : ColumnField
    {
        return new ColumnField('reason', 'UserBan', 'userban', 'reason');
    }

    public function getTableName(): string
    {
        return 'userban';
    }
    
    public function __listColumns() : array
    {
        return ['userid', 'usergroupid', 'displaygroupid', 'usertitle', 'customtitle', 'adminid', 'bandate', 'liftdate', 'reason'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['userid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'userid' => 'integer', 
			'usergroupid' => 'integer', 
			'displaygroupid' => 'integer', 
			'usertitle' => 'string', 
			'customtitle' => 'integer', 
			'adminid' => 'integer', 
			'bandate' => 'integer', 
			'liftdate' => 'integer', 
			'reason' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'userid' => 'userId', 
			'usergroupid' => 'userGroupId', 
			'displaygroupid' => 'displayGroupId', 
			'usertitle' => 'userTitle', 
			'customtitle' => 'customTitle', 
			'adminid' => 'adminId', 
			'bandate' => 'bandate', 
			'liftdate' => 'liftDate', 
			'reason' => 'reason'
		];
    }
}