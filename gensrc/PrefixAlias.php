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

class PrefixAlias extends TableAlias {
   
    public function prefixId() : ColumnField
    {
        return new ColumnField('prefix', 'prefixid', $this->getAliasName());
    }
    public function prefixSetId() : ColumnField
    {
        return new ColumnField('prefix', 'prefixsetid', $this->getAliasName());
    }
    public function displayOrder() : ColumnField
    {
        return new ColumnField('prefix', 'displayorder', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'prefix';
    }
    
    public function __listColumns() : array
    {
        return ['prefixid', 'prefixsetid', 'displayorder'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'prefixid' => 'string', 
			'prefixsetid' => 'string', 
			'displayorder' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'prefixid' => 'prefixId', 
			'prefixsetid' => 'prefixSetId', 
			'displayorder' => 'displayOrder'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->prefixId(),
			$this->prefixSetId(),
			$this->displayOrder()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PrefixRecord
    {
        return new PrefixRecord();
    }
}