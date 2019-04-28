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

class SigParsedAlias extends TableAlias {
   
    public function userId() : ColumnField
    {
        return new ColumnField('sigparsed', 'userid', $this->getAliasName());
    }
    public function styleId() : ColumnField
    {
        return new ColumnField('sigparsed', 'styleid', $this->getAliasName());
    }
    public function languageId() : ColumnField
    {
        return new ColumnField('sigparsed', 'languageid', $this->getAliasName());
    }
    public function signatureParsed() : ColumnField
    {
        return new ColumnField('sigparsed', 'signatureparsed', $this->getAliasName());
    }
    public function hasImages() : ColumnField
    {
        return new ColumnField('sigparsed', 'hasimages', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'sigparsed';
    }
    
    public function __listColumns() : array
    {
        return ['userid', 'styleid', 'languageid', 'signatureparsed', 'hasimages'];
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->userId(),
			$this->styleId(),
			$this->languageId(),
			$this->signatureParsed(),
			$this->hasImages()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : SigParsedRecord
    {
        return new SigParsedRecord();
    }
}