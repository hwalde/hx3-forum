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

class SocialGroupMember implements Table {

    const table = 'socialgroupmember';
   
    public static function as(string $aliasName): SocialGroupMemberAlias
    {
        return new SocialGroupMemberAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::userId(),
			self::groupId(),
			self::dateLine(),
			self::type()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : SocialGroupMemberRecord
    {
        return new SocialGroupMemberRecord();
    }
    
    public static function userId() : ColumnField
    {
        return new ColumnField('userId', 'SocialGroupMember', 'socialgroupmember', 'userid');
    }
    public static function groupId() : ColumnField
    {
        return new ColumnField('groupId', 'SocialGroupMember', 'socialgroupmember', 'groupid');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'SocialGroupMember', 'socialgroupmember', 'dateline');
    }
    public static function type() : ColumnField
    {
        return new ColumnField('type', 'SocialGroupMember', 'socialgroupmember', 'type');
    }

    public function getTableName(): string
    {
        return 'socialgroupmember';
    }
    
    public function __listColumns() : array
    {
        return ['userid', 'groupid', 'dateline', 'type'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['userid', 'groupid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'userid' => 'integer', 
			'groupid' => 'integer', 
			'dateline' => 'integer', 
			'type' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'userid' => 'userId', 
			'groupid' => 'groupId', 
			'dateline' => 'dateLine', 
			'type' => 'type'
		];
    }
}