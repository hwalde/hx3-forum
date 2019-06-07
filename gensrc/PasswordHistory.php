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

class PasswordHistory implements Table {

    const table = 'passwordhistory';
   
    public static function as(string $aliasName): PasswordHistoryAlias
    {
        return new PasswordHistoryAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::userId(),
			self::password(),
			self::passwordDate()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PasswordHistoryRecord
    {
        return new PasswordHistoryRecord();
    }
    
    public static function userId() : ColumnField
    {
        return new ColumnField('userId', 'PasswordHistory', 'passwordhistory', 'userid');
    }
    public static function password() : ColumnField
    {
        return new ColumnField('password', 'PasswordHistory', 'passwordhistory', 'password');
    }
    public static function passwordDate() : ColumnField
    {
        return new ColumnField('passwordDate', 'PasswordHistory', 'passwordhistory', 'passworddate');
    }

    public function getTableName(): string
    {
        return 'passwordhistory';
    }
    
    public function __listColumns() : array
    {
        return ['userid', 'password', 'passworddate'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return [];
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
}