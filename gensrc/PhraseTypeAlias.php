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

class PhraseTypeAlias extends TableAlias {
   
    public function fieldName() : ColumnField
    {
        return new ColumnField('phrasetype', 'fieldname', $this->getAliasName());
    }
    public function title() : ColumnField
    {
        return new ColumnField('phrasetype', 'title', $this->getAliasName());
    }
    public function editRows() : ColumnField
    {
        return new ColumnField('phrasetype', 'editrows', $this->getAliasName());
    }
    public function product() : ColumnField
    {
        return new ColumnField('phrasetype', 'product', $this->getAliasName());
    }
    public function special() : ColumnField
    {
        return new ColumnField('phrasetype', 'special', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'phrasetype';
    }
    
    public function __listColumns() : array
    {
        return ['fieldname', 'title', 'editrows', 'product', 'special'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'fieldname' => 'string', 
			'title' => 'string', 
			'editrows' => 'integer', 
			'product' => 'string', 
			'special' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'fieldname' => 'fieldName', 
			'title' => 'title', 
			'editrows' => 'editRows', 
			'product' => 'product', 
			'special' => 'special'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->fieldName(),
			$this->title(),
			$this->editRows(),
			$this->product(),
			$this->special()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PhraseTypeRecord
    {
        return new PhraseTypeRecord();
    }
}