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

class UserActivation implements Table {

    const table = 'useractivation';
   
    public static function as(string $aliasName): UserActivationAlias
    {
        return new UserActivationAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::userActivationId(),
			self::userId(),
			self::dateLine(),
			self::activationId(),
			self::type(),
			self::userGroupId(),
			self::emailChange()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : UserActivationRecord
    {
        return new UserActivationRecord();
    }
    
    public static function userActivationId() : ColumnField
    {
        return new ColumnField('useractivation', 'useractivationid');
    }
    public static function userId() : ColumnField
    {
        return new ColumnField('useractivation', 'userid');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('useractivation', 'dateline');
    }
    public static function activationId() : ColumnField
    {
        return new ColumnField('useractivation', 'activationid');
    }
    public static function type() : ColumnField
    {
        return new ColumnField('useractivation', 'type');
    }
    public static function userGroupId() : ColumnField
    {
        return new ColumnField('useractivation', 'usergroupid');
    }
    public static function emailChange() : ColumnField
    {
        return new ColumnField('useractivation', 'emailchange');
    }

    public function getTableName(): string
    {
        return 'useractivation';
    }
    
    public function __listColumns() : array
    {
        return ['useractivationid', 'userid', 'dateline', 'activationid', 'type', 'usergroupid', 'emailchange'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'useractivationid' => 'integer', 
			'userid' => 'integer', 
			'dateline' => 'integer', 
			'activationid' => 'integer', 
			'type' => 'integer', 
			'usergroupid' => 'integer', 
			'emailchange' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'useractivationid' => 'userActivationId', 
			'userid' => 'userId', 
			'dateline' => 'dateLine', 
			'activationid' => 'activationId', 
			'type' => 'type', 
			'usergroupid' => 'userGroupId', 
			'emailchange' => 'emailChange'
		];
    }

}