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

class Podcast implements Table {

    const table = 'podcast';
   
    public static function as(string $aliasName): PodcastAlias
    {
        return new PodcastAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::forumId(),
			self::author(),
			self::category(),
			self::image(),
			self::explicit(),
			self::enabled(),
			self::keywords(),
			self::ownerEmail(),
			self::ownerName(),
			self::subTitle(),
			self::summary(),
			self::categoryId()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PodcastRecord
    {
        return new PodcastRecord();
    }
    
    public static function forumId() : ColumnField
    {
        return new ColumnField('forumId', 'Podcast', 'podcast', 'forumid');
    }
    public static function author() : ColumnField
    {
        return new ColumnField('author', 'Podcast', 'podcast', 'author');
    }
    public static function category() : ColumnField
    {
        return new ColumnField('category', 'Podcast', 'podcast', 'category');
    }
    public static function image() : ColumnField
    {
        return new ColumnField('image', 'Podcast', 'podcast', 'image');
    }
    public static function explicit() : ColumnField
    {
        return new ColumnField('explicit', 'Podcast', 'podcast', 'explicit');
    }
    public static function enabled() : ColumnField
    {
        return new ColumnField('enabled', 'Podcast', 'podcast', 'enabled');
    }
    public static function keywords() : ColumnField
    {
        return new ColumnField('keywords', 'Podcast', 'podcast', 'keywords');
    }
    public static function ownerEmail() : ColumnField
    {
        return new ColumnField('ownerEmail', 'Podcast', 'podcast', 'owneremail');
    }
    public static function ownerName() : ColumnField
    {
        return new ColumnField('ownerName', 'Podcast', 'podcast', 'ownername');
    }
    public static function subTitle() : ColumnField
    {
        return new ColumnField('subTitle', 'Podcast', 'podcast', 'subtitle');
    }
    public static function summary() : ColumnField
    {
        return new ColumnField('summary', 'Podcast', 'podcast', 'summary');
    }
    public static function categoryId() : ColumnField
    {
        return new ColumnField('categoryId', 'Podcast', 'podcast', 'categoryid');
    }

    public function getTableName(): string
    {
        return 'podcast';
    }
    
    public function __listColumns() : array
    {
        return ['forumid', 'author', 'category', 'image', 'explicit', 'enabled', 'keywords', 'owneremail', 'ownername', 'subtitle', 'summary', 'categoryid'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['forumid'];
    }
    
    public function __listNullableColumns() : array
    {
        return ['summary'];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'forumid' => 'integer', 
			'author' => 'string', 
			'category' => 'string', 
			'image' => 'string', 
			'explicit' => 'integer', 
			'enabled' => 'integer', 
			'keywords' => 'string', 
			'owneremail' => 'string', 
			'ownername' => 'string', 
			'subtitle' => 'string', 
			'summary' => 'string', 
			'categoryid' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'forumid' => 'forumId', 
			'author' => 'author', 
			'category' => 'category', 
			'image' => 'image', 
			'explicit' => 'explicit', 
			'enabled' => 'enabled', 
			'keywords' => 'keywords', 
			'owneremail' => 'ownerEmail', 
			'ownername' => 'ownerName', 
			'subtitle' => 'subTitle', 
			'summary' => 'summary', 
			'categoryid' => 'categoryId'
		];
    }
}