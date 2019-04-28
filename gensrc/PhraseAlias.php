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

class PhraseAlias extends TableAlias {
   
    public function phraseId() : ColumnField
    {
        return new ColumnField('phrase', 'phraseid', $this->getAliasName());
    }
    public function languageId() : ColumnField
    {
        return new ColumnField('phrase', 'languageid', $this->getAliasName());
    }
    public function varName() : ColumnField
    {
        return new ColumnField('phrase', 'varname', $this->getAliasName());
    }
    public function text() : ColumnField
    {
        return new ColumnField('phrase', 'text', $this->getAliasName());
    }
    public function product() : ColumnField
    {
        return new ColumnField('phrase', 'product', $this->getAliasName());
    }
    public function fieldName() : ColumnField
    {
        return new ColumnField('phrase', 'fieldname', $this->getAliasName());
    }
    public function userName() : ColumnField
    {
        return new ColumnField('phrase', 'username', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('phrase', 'dateline', $this->getAliasName());
    }
    public function version() : ColumnField
    {
        return new ColumnField('phrase', 'version', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'phrase';
    }
    
    public function __listColumns() : array
    {
        return ['phraseid', 'languageid', 'varname', 'text', 'product', 'fieldname', 'username', 'dateline', 'version'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'phraseid' => 'integer', 
			'languageid' => 'integer', 
			'varname' => 'string', 
			'text' => 'string', 
			'product' => 'string', 
			'fieldname' => 'string', 
			'username' => 'string', 
			'dateline' => 'integer', 
			'version' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'phraseid' => 'phraseId', 
			'languageid' => 'languageId', 
			'varname' => 'varName', 
			'text' => 'text', 
			'product' => 'product', 
			'fieldname' => 'fieldName', 
			'username' => 'userName', 
			'dateline' => 'dateLine', 
			'version' => 'version'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->phraseId(),
			$this->languageId(),
			$this->varName(),
			$this->text(),
			$this->product(),
			$this->fieldName(),
			$this->userName(),
			$this->dateLine(),
			$this->version()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PhraseRecord
    {
        return new PhraseRecord();
    }
}