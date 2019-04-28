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

class HvAnswerAlias extends TableAlias {
   
    public function answerId() : ColumnField
    {
        return new ColumnField('hvanswer', 'answerid', $this->getAliasName());
    }
    public function questionId() : ColumnField
    {
        return new ColumnField('hvanswer', 'questionid', $this->getAliasName());
    }
    public function answer() : ColumnField
    {
        return new ColumnField('hvanswer', 'answer', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('hvanswer', 'dateline', $this->getAliasName());
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->answerId(),
			$this->questionId(),
			$this->answer(),
			$this->dateLine()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : HvAnswerRecord
    {
        return new HvAnswerRecord();
    }
}