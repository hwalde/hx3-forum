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

class PostIndex implements Table {

    const table = 'postindex';
   
    public static function as(string $aliasName): PostIndexAlias
    {
        return new PostIndexAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::wordId(),
			self::postId(),
			self::inTitle(),
			self::score()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PostIndexRecord
    {
        return new PostIndexRecord();
    }
    
    public static function wordId() : ColumnField
    {
        return new ColumnField('wordId', 'PostIndex', 'postindex', 'wordid');
    }
    public static function postId() : ColumnField
    {
        return new ColumnField('postId', 'PostIndex', 'postindex', 'postid');
    }
    public static function inTitle() : ColumnField
    {
        return new ColumnField('inTitle', 'PostIndex', 'postindex', 'intitle');
    }
    public static function score() : ColumnField
    {
        return new ColumnField('score', 'PostIndex', 'postindex', 'score');
    }

    public function getTableName(): string
    {
        return 'postindex';
    }
    
    public function __listColumns() : array
    {
        return ['wordid', 'postid', 'intitle', 'score'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['wordid', 'postid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'wordid' => 'integer', 
			'postid' => 'integer', 
			'intitle' => 'integer', 
			'score' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'wordid' => 'wordId', 
			'postid' => 'postId', 
			'intitle' => 'inTitle', 
			'score' => 'score'
		];
    }
}