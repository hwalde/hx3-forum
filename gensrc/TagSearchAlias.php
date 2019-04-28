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

class TagSearchAlias extends TableAlias {
   
    public function tagId() : ColumnField
    {
        return new ColumnField('tagsearch', 'tagid', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('tagsearch', 'dateline', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'tagsearch';
    }
    
    public function __listColumns() : array
    {
        return ['tagid', 'dateline'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'tagid' => 'integer', 
			'dateline' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'tagid' => 'tagId', 
			'dateline' => 'dateLine'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->tagId(),
			$this->dateLine()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : TagSearchRecord
    {
        return new TagSearchRecord();
    }
}