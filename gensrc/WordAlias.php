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

class WordAlias extends TableAlias {
   
    public function wordId() : ColumnField
    {
        return new ColumnField('word', 'wordid', $this->getAliasName());
    }
    public function title() : ColumnField
    {
        return new ColumnField('word', 'title', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'word';
    }
    
    public function __listColumns() : array
    {
        return ['wordid', 'title'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'wordid' => 'integer', 
			'title' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'wordid' => 'wordId', 
			'title' => 'title'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->wordId(),
			$this->title()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : WordRecord
    {
        return new WordRecord();
    }
}