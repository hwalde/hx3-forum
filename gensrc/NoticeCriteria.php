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

class NoticeCriteria implements Table {

    const table = 'noticecriteria';
   
    public static function as(string $aliasName): NoticeCriteriaAlias
    {
        return new NoticeCriteriaAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::noticeId(),
			self::criteriaId(),
			self::condition1(),
			self::condition2(),
			self::condition3()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : NoticeCriteriaRecord
    {
        return new NoticeCriteriaRecord();
    }
    
    public static function noticeId() : ColumnField
    {
        return new ColumnField('noticecriteria', 'noticeid');
    }
    public static function criteriaId() : ColumnField
    {
        return new ColumnField('noticecriteria', 'criteriaid');
    }
    public static function condition1() : ColumnField
    {
        return new ColumnField('noticecriteria', 'condition1');
    }
    public static function condition2() : ColumnField
    {
        return new ColumnField('noticecriteria', 'condition2');
    }
    public static function condition3() : ColumnField
    {
        return new ColumnField('noticecriteria', 'condition3');
    }

    public function getTableName(): string
    {
        return 'noticecriteria';
    }
    
    public function __listColumns() : array
    {
        return ['noticeid', 'criteriaid', 'condition1', 'condition2', 'condition3'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'noticeid' => 'integer', 
			'criteriaid' => 'string', 
			'condition1' => 'string', 
			'condition2' => 'string', 
			'condition3' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'noticeid' => 'noticeId', 
			'criteriaid' => 'criteriaId', 
			'condition1' => 'condition1', 
			'condition2' => 'condition2', 
			'condition3' => 'condition3'
		];
    }

}