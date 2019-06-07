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

class BBCodeAlias extends TableAlias {
   
    public function bbCodeId() : ColumnField
    {
        return new ColumnField('bbCodeId', 'BBCode', 'bbcode', 'bbcodeid', $this->getAliasName());
    }
    public function bbBodeTag() : ColumnField
    {
        return new ColumnField('bbBodeTag', 'BBCode', 'bbcode', 'bbcodetag', $this->getAliasName());
    }
    public function bbCodeReplacement() : ColumnField
    {
        return new ColumnField('bbCodeReplacement', 'BBCode', 'bbcode', 'bbcodereplacement', $this->getAliasName());
    }
    public function bbCodeExample() : ColumnField
    {
        return new ColumnField('bbCodeExample', 'BBCode', 'bbcode', 'bbcodeexample', $this->getAliasName());
    }
    public function bbCodeExplanation() : ColumnField
    {
        return new ColumnField('bbCodeExplanation', 'BBCode', 'bbcode', 'bbcodeexplanation', $this->getAliasName());
    }
    public function twoParams() : ColumnField
    {
        return new ColumnField('twoParams', 'BBCode', 'bbcode', 'twoparams', $this->getAliasName());
    }
    public function title() : ColumnField
    {
        return new ColumnField('title', 'BBCode', 'bbcode', 'title', $this->getAliasName());
    }
    public function buttonImage() : ColumnField
    {
        return new ColumnField('buttonImage', 'BBCode', 'bbcode', 'buttonimage', $this->getAliasName());
    }
    public function options() : ColumnField
    {
        return new ColumnField('options', 'BBCode', 'bbcode', 'options', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'bbcode';
    }
    
    public function __listColumns() : array
    {
        return ['bbcodeid', 'bbcodetag', 'bbcodereplacement', 'bbcodeexample', 'bbcodeexplanation', 'twoparams', 'title', 'buttonimage', 'options'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['bbcodeid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'bbcodeid' => 'integer', 
			'bbcodetag' => 'string', 
			'bbcodereplacement' => 'string', 
			'bbcodeexample' => 'string', 
			'bbcodeexplanation' => 'string', 
			'twoparams' => 'integer', 
			'title' => 'string', 
			'buttonimage' => 'string', 
			'options' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'bbcodeid' => 'bbCodeId', 
			'bbcodetag' => 'bbBodeTag', 
			'bbcodereplacement' => 'bbCodeReplacement', 
			'bbcodeexample' => 'bbCodeExample', 
			'bbcodeexplanation' => 'bbCodeExplanation', 
			'twoparams' => 'twoParams', 
			'title' => 'title', 
			'buttonimage' => 'buttonImage', 
			'options' => 'options'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->bbCodeId(),
			$this->bbBodeTag(),
			$this->bbCodeReplacement(),
			$this->bbCodeExample(),
			$this->bbCodeExplanation(),
			$this->twoParams(),
			$this->title(),
			$this->buttonImage(),
			$this->options()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : BBCodeRecord
    {
        return new BBCodeRecord();
    }
}