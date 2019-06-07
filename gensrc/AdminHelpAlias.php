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

class AdminHelpAlias extends TableAlias {
   
    public function adminHelpId() : ColumnField
    {
        return new ColumnField('adminHelpId', 'AdminHelp', 'adminhelp', 'adminhelpid', $this->getAliasName());
    }
    public function script() : ColumnField
    {
        return new ColumnField('script', 'AdminHelp', 'adminhelp', 'script', $this->getAliasName());
    }
    public function action() : ColumnField
    {
        return new ColumnField('action', 'AdminHelp', 'adminhelp', 'action', $this->getAliasName());
    }
    public function optionName() : ColumnField
    {
        return new ColumnField('optionName', 'AdminHelp', 'adminhelp', 'optionname', $this->getAliasName());
    }
    public function displayOrder() : ColumnField
    {
        return new ColumnField('displayOrder', 'AdminHelp', 'adminhelp', 'displayorder', $this->getAliasName());
    }
    public function volatile() : ColumnField
    {
        return new ColumnField('volatile', 'AdminHelp', 'adminhelp', 'volatile', $this->getAliasName());
    }
    public function product() : ColumnField
    {
        return new ColumnField('product', 'AdminHelp', 'adminhelp', 'product', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'adminhelp';
    }
    
    public function __listColumns() : array
    {
        return ['adminhelpid', 'script', 'action', 'optionname', 'displayorder', 'volatile', 'product'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['adminhelpid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'adminhelpid' => 'integer', 
			'script' => 'string', 
			'action' => 'string', 
			'optionname' => 'string', 
			'displayorder' => 'integer', 
			'volatile' => 'integer', 
			'product' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'adminhelpid' => 'adminHelpId', 
			'script' => 'script', 
			'action' => 'action', 
			'optionname' => 'optionName', 
			'displayorder' => 'displayOrder', 
			'volatile' => 'volatile', 
			'product' => 'product'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->adminHelpId(),
			$this->script(),
			$this->action(),
			$this->optionName(),
			$this->displayOrder(),
			$this->volatile(),
			$this->product()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : AdminHelpRecord
    {
        return new AdminHelpRecord();
    }
}