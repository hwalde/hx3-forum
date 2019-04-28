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

class PtTagAlias extends TableAlias {
   
    public function tagId() : ColumnField
    {
        return new ColumnField('pt_tag', 'tagid', $this->getAliasName());
    }
    public function tagText() : ColumnField
    {
        return new ColumnField('pt_tag', 'tagtext', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'pt_tag';
    }
    
    public function __listColumns() : array
    {
        return ['tagid', 'tagtext'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'tagid' => 'integer', 
			'tagtext' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'tagid' => 'tagId', 
			'tagtext' => 'tagText'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->tagId(),
			$this->tagText()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PtTagRecord
    {
        return new PtTagRecord();
    }
}