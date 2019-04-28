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

class Administrator implements Table {

    const table = 'administrator';
   
    public static function as(string $aliasName): AdministratorAlias
    {
        return new AdministratorAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::userId(),
			self::adminPermissions(),
			self::navPrefs(),
			self::cssPrefs(),
			self::notes(),
			self::languageId(),
			self::dismissedNews(),
			self::ptPermissions()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : AdministratorRecord
    {
        return new AdministratorRecord();
    }
    
    public static function userId() : ColumnField
    {
        return new ColumnField('administrator', 'userid');
    }
    public static function adminPermissions() : ColumnField
    {
        return new ColumnField('administrator', 'adminpermissions');
    }
    public static function navPrefs() : ColumnField
    {
        return new ColumnField('administrator', 'navprefs');
    }
    public static function cssPrefs() : ColumnField
    {
        return new ColumnField('administrator', 'cssprefs');
    }
    public static function notes() : ColumnField
    {
        return new ColumnField('administrator', 'notes');
    }
    public static function languageId() : ColumnField
    {
        return new ColumnField('administrator', 'languageid');
    }
    public static function dismissedNews() : ColumnField
    {
        return new ColumnField('administrator', 'dismissednews');
    }
    public static function ptPermissions() : ColumnField
    {
        return new ColumnField('administrator', 'ptpermissions');
    }

    public function getTableName(): string
    {
        return 'administrator';
    }
    
    public function __listColumns() : array
    {
        return ['userid', 'adminpermissions', 'navprefs', 'cssprefs', 'notes', 'languageid', 'dismissednews', 'ptpermissions'];
    }
    
    public function __listNullableColumns() : array
    {
        return ['dismissednews'];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'userid' => 'integer', 
			'adminpermissions' => 'integer', 
			'navprefs' => 'string', 
			'cssprefs' => 'string', 
			'notes' => 'string', 
			'languageid' => 'integer', 
			'dismissednews' => 'string', 
			'ptpermissions' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'userid' => 'userId', 
			'adminpermissions' => 'adminPermissions', 
			'navprefs' => 'navPrefs', 
			'cssprefs' => 'cssPrefs', 
			'notes' => 'notes', 
			'languageid' => 'languageId', 
			'dismissednews' => 'dismissedNews', 
			'ptpermissions' => 'ptPermissions'
		];
    }

}