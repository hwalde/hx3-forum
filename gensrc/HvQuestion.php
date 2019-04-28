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

class HvQuestion implements Table {

    const table = 'hvquestion';
   
    public static function as(string $aliasName): HvQuestionAlias
    {
        return new HvQuestionAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::questionId(),
			self::regex(),
			self::dateLine()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : HvQuestionRecord
    {
        return new HvQuestionRecord();
    }
    
    public static function questionId() : ColumnField
    {
        return new ColumnField('hvquestion', 'questionid');
    }
    public static function regex() : ColumnField
    {
        return new ColumnField('hvquestion', 'regex');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('hvquestion', 'dateline');
    }

    public function getTableName(): string
    {
        return 'hvquestion';
    }
    
    public function __listColumns() : array
    {
        return ['questionid', 'regex', 'dateline'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'questionid' => 'integer', 
			'regex' => 'string', 
			'dateline' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'questionid' => 'questionId', 
			'regex' => 'regex', 
			'dateline' => 'dateLine'
		];
    }

}