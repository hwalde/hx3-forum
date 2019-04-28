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

class PrefixSetAlias extends TableAlias {
   
    public function prefixSetId() : ColumnField
    {
        return new ColumnField('prefixset', 'prefixsetid', $this->getAliasName());
    }
    public function displayOrder() : ColumnField
    {
        return new ColumnField('prefixset', 'displayorder', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'prefixset';
    }
    
    public function __listColumns() : array
    {
        return ['prefixsetid', 'displayorder'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'prefixsetid' => 'string', 
			'displayorder' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
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
            $this->prefixSetId(),
			$this->displayOrder()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PrefixSetRecord
    {
        return new PrefixSetRecord();
    }
}