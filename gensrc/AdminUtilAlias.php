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

class AdminUtilAlias extends TableAlias {
   
    public function title() : ColumnField
    {
        return new ColumnField('title', 'AdminUtil', 'adminutil', 'title', $this->getAliasName());
    }
    public function text() : ColumnField
    {
        return new ColumnField('text', 'AdminUtil', 'adminutil', 'text', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'adminutil';
    }
    
    public function __listColumns() : array
    {
        return ['title', 'text'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['title'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'title' => 'string', 
			'text' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'title' => 'title', 
			'text' => 'text'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->title(),
			$this->text()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : AdminUtilRecord
    {
        return new AdminUtilRecord();
    }
}