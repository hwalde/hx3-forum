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

class Phrase implements Table {

    const table = 'phrase';
   
    public static function as(string $aliasName): PhraseAlias
    {
        return new PhraseAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::phraseId(),
			self::languageId(),
			self::varName(),
			self::text(),
			self::product(),
			self::fieldName(),
			self::userName(),
			self::dateLine(),
			self::version()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PhraseRecord
    {
        return new PhraseRecord();
    }
    
    public static function phraseId() : ColumnField
    {
        return new ColumnField('phraseId', 'Phrase', 'phrase', 'phraseid');
    }
    public static function languageId() : ColumnField
    {
        return new ColumnField('languageId', 'Phrase', 'phrase', 'languageid');
    }
    public static function varName() : ColumnField
    {
        return new ColumnField('varName', 'Phrase', 'phrase', 'varname');
    }
    public static function text() : ColumnField
    {
        return new ColumnField('text', 'Phrase', 'phrase', 'text');
    }
    public static function product() : ColumnField
    {
        return new ColumnField('product', 'Phrase', 'phrase', 'product');
    }
    public static function fieldName() : ColumnField
    {
        return new ColumnField('fieldName', 'Phrase', 'phrase', 'fieldname');
    }
    public static function userName() : ColumnField
    {
        return new ColumnField('userName', 'Phrase', 'phrase', 'username');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'Phrase', 'phrase', 'dateline');
    }
    public static function version() : ColumnField
    {
        return new ColumnField('version', 'Phrase', 'phrase', 'version');
    }

    public function getTableName(): string
    {
        return 'phrase';
    }
    
    public function __listColumns() : array
    {
        return ['phraseid', 'languageid', 'varname', 'text', 'product', 'fieldname', 'username', 'dateline', 'version'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['phraseid'];
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
}