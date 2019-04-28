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

class UserCssAlias extends TableAlias {
   
    public function userId() : ColumnField
    {
        return new ColumnField('usercss', 'userid', $this->getAliasName());
    }
    public function selector() : ColumnField
    {
        return new ColumnField('usercss', 'selector', $this->getAliasName());
    }
    public function property() : ColumnField
    {
        return new ColumnField('usercss', 'property', $this->getAliasName());
    }
    public function value() : ColumnField
    {
        return new ColumnField('usercss', 'value', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'usercss';
    }
    
    public function __listColumns() : array
    {
        return ['userid', 'selector', 'property', 'value'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'userid' => 'integer', 
			'selector' => 'string', 
			'property' => 'string', 
			'value' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'userid' => 'userId', 
			'selector' => 'selector', 
			'property' => 'property', 
			'value' => 'value'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->userId(),
			$this->selector(),
			$this->property(),
			$this->value()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : UserCssRecord
    {
        return new UserCssRecord();
    }
}