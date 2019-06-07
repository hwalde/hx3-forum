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

class UserCssCacheAlias extends TableAlias {
   
    public function userId() : ColumnField
    {
        return new ColumnField('userId', 'UserCssCache', 'usercsscache', 'userid', $this->getAliasName());
    }
    public function cachedCss() : ColumnField
    {
        return new ColumnField('cachedCss', 'UserCssCache', 'usercsscache', 'cachedcss', $this->getAliasName());
    }
    public function buildPermissions() : ColumnField
    {
        return new ColumnField('buildPermissions', 'UserCssCache', 'usercsscache', 'buildpermissions', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'usercsscache';
    }
    
    public function __listColumns() : array
    {
        return ['userid', 'cachedcss', 'buildpermissions'];
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
        return ['cachedcss'];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'userid' => 'integer', 
			'cachedcss' => 'string', 
			'buildpermissions' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'userid' => 'userId', 
			'cachedcss' => 'cachedCss', 
			'buildpermissions' => 'buildPermissions'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->userId(),
			$this->cachedCss(),
			$this->buildPermissions()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : UserCssCacheRecord
    {
        return new UserCssCacheRecord();
    }
}