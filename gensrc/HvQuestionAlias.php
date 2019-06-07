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

class HvQuestionAlias extends TableAlias {
   
    public function questionId() : ColumnField
    {
        return new ColumnField('questionId', 'HvQuestion', 'hvquestion', 'questionid', $this->getAliasName());
    }
    public function regex() : ColumnField
    {
        return new ColumnField('regex', 'HvQuestion', 'hvquestion', 'regex', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'HvQuestion', 'hvquestion', 'dateline', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'hvquestion';
    }
    
    public function __listColumns() : array
    {
        return ['questionid', 'regex', 'dateline'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['questionid'];
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->questionId(),
			$this->regex(),
			$this->dateLine()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : HvQuestionRecord
    {
        return new HvQuestionRecord();
    }
}