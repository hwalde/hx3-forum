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

class PodcastItem implements Table {

    const table = 'podcastitem';
   
    public static function as(string $aliasName): PodcastItemAlias
    {
        return new PodcastItemAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::postId(),
			self::url(),
			self::length(),
			self::explicit(),
			self::keywords(),
			self::subTitle(),
			self::author()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PodcastItemRecord
    {
        return new PodcastItemRecord();
    }
    
    public static function postId() : ColumnField
    {
        return new ColumnField('postId', 'PodcastItem', 'podcastitem', 'postid');
    }
    public static function url() : ColumnField
    {
        return new ColumnField('url', 'PodcastItem', 'podcastitem', 'url');
    }
    public static function length() : ColumnField
    {
        return new ColumnField('length', 'PodcastItem', 'podcastitem', 'length');
    }
    public static function explicit() : ColumnField
    {
        return new ColumnField('explicit', 'PodcastItem', 'podcastitem', 'explicit');
    }
    public static function keywords() : ColumnField
    {
        return new ColumnField('keywords', 'PodcastItem', 'podcastitem', 'keywords');
    }
    public static function subTitle() : ColumnField
    {
        return new ColumnField('subTitle', 'PodcastItem', 'podcastitem', 'subtitle');
    }
    public static function author() : ColumnField
    {
        return new ColumnField('author', 'PodcastItem', 'podcastitem', 'author');
    }

    public function getTableName(): string
    {
        return 'podcastitem';
    }
    
    public function __listColumns() : array
    {
        return ['postid', 'url', 'length', 'explicit', 'keywords', 'subtitle', 'author'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['postid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'postid' => 'integer', 
			'url' => 'string', 
			'length' => 'integer', 
			'explicit' => 'integer', 
			'keywords' => 'string', 
			'subtitle' => 'string', 
			'author' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'postid' => 'postId', 
			'url' => 'url', 
			'length' => 'length', 
			'explicit' => 'explicit', 
			'keywords' => 'keywords', 
			'subtitle' => 'subTitle', 
			'author' => 'author'
		];
    }
}