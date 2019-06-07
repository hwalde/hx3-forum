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

class SigParsed implements Table {

    const table = 'sigparsed';
   
    public static function as(string $aliasName): SigParsedAlias
    {
        return new SigParsedAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::userId(),
			self::styleId(),
			self::languageId(),
			self::signatureParsed(),
			self::hasImages()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : SigParsedRecord
    {
        return new SigParsedRecord();
    }
    
    public static function userId() : ColumnField
    {
        return new ColumnField('userId', 'SigParsed', 'sigparsed', 'userid');
    }
    public static function styleId() : ColumnField
    {
        return new ColumnField('styleId', 'SigParsed', 'sigparsed', 'styleid');
    }
    public static function languageId() : ColumnField
    {
        return new ColumnField('languageId', 'SigParsed', 'sigparsed', 'languageid');
    }
    public static function signatureParsed() : ColumnField
    {
        return new ColumnField('signatureParsed', 'SigParsed', 'sigparsed', 'signatureparsed');
    }
    public static function hasImages() : ColumnField
    {
        return new ColumnField('hasImages', 'SigParsed', 'sigparsed', 'hasimages');
    }

    public function getTableName(): string
    {
        return 'sigparsed';
    }
    
    public function __listColumns() : array
    {
        return ['userid', 'styleid', 'languageid', 'signatureparsed', 'hasimages'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['userid', 'styleid', 'languageid'];
    }
    
    public function __listNullableColumns() : array
    {
        return ['signatureparsed'];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'userid' => 'integer', 
			'styleid' => 'integer', 
			'languageid' => 'integer', 
			'signatureparsed' => 'string', 
			'hasimages' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'userid' => 'userId', 
			'styleid' => 'styleId', 
			'languageid' => 'languageId', 
			'signatureparsed' => 'signatureParsed', 
			'hasimages' => 'hasImages'
		];
    }
}