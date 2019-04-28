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

class AdministratorAlias extends TableAlias {
   
    public function userId() : ColumnField
    {
        return new ColumnField('administrator', 'userid', $this->getAliasName());
    }
    public function adminPermissions() : ColumnField
    {
        return new ColumnField('administrator', 'adminpermissions', $this->getAliasName());
    }
    public function navPrefs() : ColumnField
    {
        return new ColumnField('administrator', 'navprefs', $this->getAliasName());
    }
    public function cssPrefs() : ColumnField
    {
        return new ColumnField('administrator', 'cssprefs', $this->getAliasName());
    }
    public function notes() : ColumnField
    {
        return new ColumnField('administrator', 'notes', $this->getAliasName());
    }
    public function languageId() : ColumnField
    {
        return new ColumnField('administrator', 'languageid', $this->getAliasName());
    }
    public function dismissedNews() : ColumnField
    {
        return new ColumnField('administrator', 'dismissednews', $this->getAliasName());
    }
    public function ptPermissions() : ColumnField
    {
        return new ColumnField('administrator', 'ptpermissions', $this->getAliasName());
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->userId(),
			$this->adminPermissions(),
			$this->navPrefs(),
			$this->cssPrefs(),
			$this->notes(),
			$this->languageId(),
			$this->dismissedNews(),
			$this->ptPermissions()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : AdministratorRecord
    {
        return new AdministratorRecord();
    }
}