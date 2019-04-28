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

class PostParsedAlias extends TableAlias {
   
    public function postId() : ColumnField
    {
        return new ColumnField('postparsed', 'postid', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('postparsed', 'dateline', $this->getAliasName());
    }
    public function hasImages() : ColumnField
    {
        return new ColumnField('postparsed', 'hasimages', $this->getAliasName());
    }
    public function pageTextHtml() : ColumnField
    {
        return new ColumnField('postparsed', 'pagetext_html', $this->getAliasName());
    }
    public function styleId() : ColumnField
    {
        return new ColumnField('postparsed', 'styleid', $this->getAliasName());
    }
    public function languageId() : ColumnField
    {
        return new ColumnField('postparsed', 'languageid', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'postparsed';
    }
    
    public function __listColumns() : array
    {
        return ['postid', 'dateline', 'hasimages', 'pagetext_html', 'styleid', 'languageid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'postid' => 'integer', 
			'dateline' => 'integer', 
			'hasimages' => 'integer', 
			'pagetext_html' => 'string', 
			'styleid' => 'integer', 
			'languageid' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'postid' => 'postId', 
			'dateline' => 'dateLine', 
			'hasimages' => 'hasImages', 
			'pagetext_html' => 'pageTextHtml', 
			'styleid' => 'styleId', 
			'languageid' => 'languageId'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->postId(),
			$this->dateLine(),
			$this->hasImages(),
			$this->pageTextHtml(),
			$this->styleId(),
			$this->languageId()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PostParsedRecord
    {
        return new PostParsedRecord();
    }
}