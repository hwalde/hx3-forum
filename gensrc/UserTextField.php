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

class UserTextField implements Table {

    const table = 'usertextfield';
   
    public static function as(string $aliasName): UserTextFieldAlias
    {
        return new UserTextFieldAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::userId(),
			self::subFolders(),
			self::pmFolders(),
			self::buddyList(),
			self::ignoreList(),
			self::signature(),
			self::searchPrefs(),
			self::rank()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : UserTextFieldRecord
    {
        return new UserTextFieldRecord();
    }
    
    public static function userId() : ColumnField
    {
        return new ColumnField('userId', 'UserTextField', 'usertextfield', 'userid');
    }
    public static function subFolders() : ColumnField
    {
        return new ColumnField('subFolders', 'UserTextField', 'usertextfield', 'subfolders');
    }
    public static function pmFolders() : ColumnField
    {
        return new ColumnField('pmFolders', 'UserTextField', 'usertextfield', 'pmfolders');
    }
    public static function buddyList() : ColumnField
    {
        return new ColumnField('buddyList', 'UserTextField', 'usertextfield', 'buddylist');
    }
    public static function ignoreList() : ColumnField
    {
        return new ColumnField('ignoreList', 'UserTextField', 'usertextfield', 'ignorelist');
    }
    public static function signature() : ColumnField
    {
        return new ColumnField('signature', 'UserTextField', 'usertextfield', 'signature');
    }
    public static function searchPrefs() : ColumnField
    {
        return new ColumnField('searchPrefs', 'UserTextField', 'usertextfield', 'searchprefs');
    }
    public static function rank() : ColumnField
    {
        return new ColumnField('rank', 'UserTextField', 'usertextfield', 'rank');
    }

    public function getTableName(): string
    {
        return 'usertextfield';
    }
    
    public function __listColumns() : array
    {
        return ['userid', 'subfolders', 'pmfolders', 'buddylist', 'ignorelist', 'signature', 'searchprefs', 'rank'];
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
			'subfolders' => 'string', 
			'pmfolders' => 'string', 
			'buddylist' => 'string', 
			'ignorelist' => 'string', 
			'signature' => 'string', 
			'searchprefs' => 'string', 
			'rank' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'userid' => 'userId', 
			'subfolders' => 'subFolders', 
			'pmfolders' => 'pmFolders', 
			'buddylist' => 'buddyList', 
			'ignorelist' => 'ignoreList', 
			'signature' => 'signature', 
			'searchprefs' => 'searchPrefs', 
			'rank' => 'rank'
		];
    }
}