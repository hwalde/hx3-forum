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

class SocialGroupMemberAlias extends TableAlias {
   
    public function userId() : ColumnField
    {
        return new ColumnField('userId', 'SocialGroupMember', 'socialgroupmember', 'userid', $this->getAliasName());
    }
    public function groupId() : ColumnField
    {
        return new ColumnField('groupId', 'SocialGroupMember', 'socialgroupmember', 'groupid', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'SocialGroupMember', 'socialgroupmember', 'dateline', $this->getAliasName());
    }
    public function type() : ColumnField
    {
        return new ColumnField('type', 'SocialGroupMember', 'socialgroupmember', 'type', $this->getAliasName());
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->userId(),
			$this->groupId(),
			$this->dateLine(),
			$this->type()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : SocialGroupMemberRecord
    {
        return new SocialGroupMemberRecord();
    }
}