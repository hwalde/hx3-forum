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

class PostEditHistory implements Table {

    const table = 'postedithistory';
   
    public static function as(string $aliasName): PostEditHistoryAlias
    {
        return new PostEditHistoryAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::postEditHistoryid(),
			self::postId(),
			self::userId(),
			self::userName(),
			self::title(),
			self::iconId(),
			self::dateLine(),
			self::reason(),
			self::original(),
			self::pageText()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PostEditHistoryRecord
    {
        return new PostEditHistoryRecord();
    }
    
    public static function postEditHistoryid() : ColumnField
    {
        return new ColumnField('postedithistory', 'postedithistoryid');
    }
    public static function postId() : ColumnField
    {
        return new ColumnField('postedithistory', 'postid');
    }
    public static function userId() : ColumnField
    {
        return new ColumnField('postedithistory', 'userid');
    }
    public static function userName() : ColumnField
    {
        return new ColumnField('postedithistory', 'username');
    }
    public static function title() : ColumnField
    {
        return new ColumnField('postedithistory', 'title');
    }
    public static function iconId() : ColumnField
    {
        return new ColumnField('postedithistory', 'iconid');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('postedithistory', 'dateline');
    }
    public static function reason() : ColumnField
    {
        return new ColumnField('postedithistory', 'reason');
    }
    public static function original() : ColumnField
    {
        return new ColumnField('postedithistory', 'original');
    }
    public static function pageText() : ColumnField
    {
        return new ColumnField('postedithistory', 'pagetext');
    }

    public function getTableName(): string
    {
        return 'postedithistory';
    }
    
    public function __listColumns() : array
    {
        return ['postedithistoryid', 'postid', 'userid', 'username', 'title', 'iconid', 'dateline', 'reason', 'original', 'pagetext'];
    }
    
    public function __listNullableColumns() : array
    {
        return ['pagetext'];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'postedithistoryid' => 'integer', 
			'postid' => 'integer', 
			'userid' => 'integer', 
			'username' => 'string', 
			'title' => 'string', 
			'iconid' => 'integer', 
			'dateline' => 'integer', 
			'reason' => 'string', 
			'original' => 'integer', 
			'pagetext' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'postedithistoryid' => 'postEditHistoryid', 
			'postid' => 'postId', 
			'userid' => 'userId', 
			'username' => 'userName', 
			'title' => 'title', 
			'iconid' => 'iconId', 
			'dateline' => 'dateLine', 
			'reason' => 'reason', 
			'original' => 'original', 
			'pagetext' => 'pageText'
		];
    }

}