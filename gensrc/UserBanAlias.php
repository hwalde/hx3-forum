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

class UserBanAlias extends TableAlias {
   
    public function userId() : ColumnField
    {
        return new ColumnField('userId', 'UserBan', 'userban', 'userid', $this->getAliasName());
    }
    public function userGroupId() : ColumnField
    {
        return new ColumnField('userGroupId', 'UserBan', 'userban', 'usergroupid', $this->getAliasName());
    }
    public function displayGroupId() : ColumnField
    {
        return new ColumnField('displayGroupId', 'UserBan', 'userban', 'displaygroupid', $this->getAliasName());
    }
    public function userTitle() : ColumnField
    {
        return new ColumnField('userTitle', 'UserBan', 'userban', 'usertitle', $this->getAliasName());
    }
    public function customTitle() : ColumnField
    {
        return new ColumnField('customTitle', 'UserBan', 'userban', 'customtitle', $this->getAliasName());
    }
    public function adminId() : ColumnField
    {
        return new ColumnField('adminId', 'UserBan', 'userban', 'adminid', $this->getAliasName());
    }
    public function bandate() : ColumnField
    {
        return new ColumnField('bandate', 'UserBan', 'userban', 'bandate', $this->getAliasName());
    }
    public function liftDate() : ColumnField
    {
        return new ColumnField('liftDate', 'UserBan', 'userban', 'liftdate', $this->getAliasName());
    }
    public function reason() : ColumnField
    {
        return new ColumnField('reason', 'UserBan', 'userban', 'reason', $this->getAliasName());
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->userId(),
			$this->userGroupId(),
			$this->displayGroupId(),
			$this->userTitle(),
			$this->customTitle(),
			$this->adminId(),
			$this->bandate(),
			$this->liftDate(),
			$this->reason()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : UserBanRecord
    {
        return new UserBanRecord();
    }
}