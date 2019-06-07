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

use POOQ\ColumnField;
use POOQ\ColumnFieldList;
use POOQ\Table;

class PtTag implements Table {

    const table = 'pt_tag';
   
    public static function as(string $aliasName): PtTagAlias
    {
        return new PtTagAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::tagId(),
			self::tagText()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PtTagRecord
    {
        return new PtTagRecord();
    }
    
    public static function tagId() : ColumnField
    {
        return new ColumnField('tagId', 'PtTag', 'pt_tag', 'tagid');
    }
    public static function tagText() : ColumnField
    {
        return new ColumnField('tagText', 'PtTag', 'pt_tag', 'tagtext');
    }

    public function getTableName(): string
    {
        return 'pt_tag';
    }
    
    public function __listColumns() : array
    {
        return ['tagid', 'tagtext'];
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
}