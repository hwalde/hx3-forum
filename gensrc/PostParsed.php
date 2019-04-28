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

class PostParsed implements Table {

    const table = 'postparsed';
   
    public static function as(string $aliasName): PostParsedAlias
    {
        return new PostParsedAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::postId(),
			self::dateLine(),
			self::hasImages(),
			self::pageTextHtml(),
			self::styleId(),
			self::languageId()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PostParsedRecord
    {
        return new PostParsedRecord();
    }
    
    public static function postId() : ColumnField
    {
        return new ColumnField('postparsed', 'postid');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('postparsed', 'dateline');
    }
    public static function hasImages() : ColumnField
    {
        return new ColumnField('postparsed', 'hasimages');
    }
    public static function pageTextHtml() : ColumnField
    {
        return new ColumnField('postparsed', 'pagetext_html');
    }
    public static function styleId() : ColumnField
    {
        return new ColumnField('postparsed', 'styleid');
    }
    public static function languageId() : ColumnField
    {
        return new ColumnField('postparsed', 'languageid');
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

}