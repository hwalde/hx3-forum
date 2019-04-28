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

class PasswordHistoryAlias extends TableAlias {
   
    public function userId() : ColumnField
    {
        return new ColumnField('passwordhistory', 'userid', $this->getAliasName());
    }
    public function password() : ColumnField
    {
        return new ColumnField('passwordhistory', 'password', $this->getAliasName());
    }
    public function passwordDate() : ColumnField
    {
        return new ColumnField('passwordhistory', 'passworddate', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'passwordhistory';
    }
    
    public function __listColumns() : array
    {
        return ['userid', 'password', 'passworddate'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'userid' => 'integer', 
			'password' => 'string', 
			'passworddate' => 'date'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'userid' => 'userId', 
			'password' => 'password', 
			'passworddate' => 'passwordDate'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->userId(),
			$this->password(),
			$this->passwordDate()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PasswordHistoryRecord
    {
        return new PasswordHistoryRecord();
    }
}