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

class TagAlias extends TableAlias {
   
    public function tagId() : ColumnField
    {
        return new ColumnField('tagId', 'Tag', 'tag', 'tagid', $this->getAliasName());
    }
    public function tagText() : ColumnField
    {
        return new ColumnField('tagText', 'Tag', 'tag', 'tagtext', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'Tag', 'tag', 'dateline', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'tag';
    }
    
    public function __listColumns() : array
    {
        return ['tagid', 'tagtext', 'dateline'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['tagid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'tagid' => 'integer', 
			'tagtext' => 'string', 
			'dateline' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'tagid' => 'tagId', 
			'tagtext' => 'tagText', 
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
			$this->tagText(),
			$this->dateLine()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : TagRecord
    {
        return new TagRecord();
    }
}