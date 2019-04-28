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

class PostHash implements Table {

    const table = 'posthash';
   
    public static function as(string $aliasName): PostHashAlias
    {
        return new PostHashAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::userId(),
			self::threadId(),
			self::postId(),
			self::dupeHash(),
			self::dateLine()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PostHashRecord
    {
        return new PostHashRecord();
    }
    
    public static function userId() : ColumnField
    {
        return new ColumnField('posthash', 'userid');
    }
    public static function threadId() : ColumnField
    {
        return new ColumnField('posthash', 'threadid');
    }
    public static function postId() : ColumnField
    {
        return new ColumnField('posthash', 'postid');
    }
    public static function dupeHash() : ColumnField
    {
        return new ColumnField('posthash', 'dupehash');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('posthash', 'dateline');
    }

    public function getTableName(): string
    {
        return 'posthash';
    }
    
    public function __listColumns() : array
    {
        return ['userid', 'threadid', 'postid', 'dupehash', 'dateline'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'userid' => 'integer', 
			'threadid' => 'integer', 
			'postid' => 'integer', 
			'dupehash' => 'string', 
			'dateline' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'userid' => 'userId', 
			'threadid' => 'threadId', 
			'postid' => 'postId', 
			'dupehash' => 'dupeHash', 
			'dateline' => 'dateLine'
		];
    }

}