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

class HvAnswer implements Table {

    const table = 'hvanswer';
   
    public static function as(string $aliasName): HvAnswerAlias
    {
        return new HvAnswerAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::answerId(),
			self::questionId(),
			self::answer(),
			self::dateLine()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : HvAnswerRecord
    {
        return new HvAnswerRecord();
    }
    
    public static function answerId() : ColumnField
    {
        return new ColumnField('hvanswer', 'answerid');
    }
    public static function questionId() : ColumnField
    {
        return new ColumnField('hvanswer', 'questionid');
    }
    public static function answer() : ColumnField
    {
        return new ColumnField('hvanswer', 'answer');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('hvanswer', 'dateline');
    }

    public function getTableName(): string
    {
        return 'hvanswer';
    }
    
    public function __listColumns() : array
    {
        return ['answerid', 'questionid', 'answer', 'dateline'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'answerid' => 'integer', 
			'questionid' => 'integer', 
			'answer' => 'string', 
			'dateline' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'answerid' => 'answerId', 
			'questionid' => 'questionId', 
			'answer' => 'answer', 
			'dateline' => 'dateLine'
		];
    }

}