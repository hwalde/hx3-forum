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

class UserActivationAlias extends TableAlias {
   
    public function userActivationId() : ColumnField
    {
        return new ColumnField('userActivationId', 'UserActivation', 'useractivation', 'useractivationid', $this->getAliasName());
    }
    public function userId() : ColumnField
    {
        return new ColumnField('userId', 'UserActivation', 'useractivation', 'userid', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'UserActivation', 'useractivation', 'dateline', $this->getAliasName());
    }
    public function activationId() : ColumnField
    {
        return new ColumnField('activationId', 'UserActivation', 'useractivation', 'activationid', $this->getAliasName());
    }
    public function type() : ColumnField
    {
        return new ColumnField('type', 'UserActivation', 'useractivation', 'type', $this->getAliasName());
    }
    public function userGroupId() : ColumnField
    {
        return new ColumnField('userGroupId', 'UserActivation', 'useractivation', 'usergroupid', $this->getAliasName());
    }
    public function emailChange() : ColumnField
    {
        return new ColumnField('emailChange', 'UserActivation', 'useractivation', 'emailchange', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'useractivation';
    }
    
    public function __listColumns() : array
    {
        return ['useractivationid', 'userid', 'dateline', 'activationid', 'type', 'usergroupid', 'emailchange'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['useractivationid'];
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->userActivationId(),
			$this->userId(),
			$this->dateLine(),
			$this->activationId(),
			$this->type(),
			$this->userGroupId(),
			$this->emailChange()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : UserActivationRecord
    {
        return new UserActivationRecord();
    }
}