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

class PostLog implements Table {

    const table = 'postlog';
   
    public static function as(string $aliasName): PostLogAlias
    {
        return new PostLogAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::postId(),
			self::userAgent(),
			self::ip(),
			self::dateLine()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PostLogRecord
    {
        return new PostLogRecord();
    }
    
    public static function postId() : ColumnField
    {
        return new ColumnField('postId', 'PostLog', 'postlog', 'postid');
    }
    public static function userAgent() : ColumnField
    {
        return new ColumnField('userAgent', 'PostLog', 'postlog', 'useragent');
    }
    public static function ip() : ColumnField
    {
        return new ColumnField('ip', 'PostLog', 'postlog', 'ip');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'PostLog', 'postlog', 'dateline');
    }

    public function getTableName(): string
    {
        return 'postlog';
    }
    
    public function __listColumns() : array
    {
        return ['postid', 'useragent', 'ip', 'dateline'];
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
			'useragent' => 'string', 
			'ip' => 'integer', 
			'dateline' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'postid' => 'postId', 
			'useragent' => 'userAgent', 
			'ip' => 'ip', 
			'dateline' => 'dateLine'
		];
    }
}