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

class UserNote implements Table {

    const table = 'usernote';
   
    public static function as(string $aliasName): UserNoteAlias
    {
        return new UserNoteAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::usernoteid(),
			self::userId(),
			self::posterid(),
			self::userName(),
			self::dateLine(),
			self::message(),
			self::title(),
			self::allowSmilies()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : UserNoteRecord
    {
        return new UserNoteRecord();
    }
    
    public static function usernoteid() : ColumnField
    {
        return new ColumnField('usernote', 'usernoteid');
    }
    public static function userId() : ColumnField
    {
        return new ColumnField('usernote', 'userid');
    }
    public static function posterid() : ColumnField
    {
        return new ColumnField('usernote', 'posterid');
    }
    public static function userName() : ColumnField
    {
        return new ColumnField('usernote', 'username');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('usernote', 'dateline');
    }
    public static function message() : ColumnField
    {
        return new ColumnField('usernote', 'message');
    }
    public static function title() : ColumnField
    {
        return new ColumnField('usernote', 'title');
    }
    public static function allowSmilies() : ColumnField
    {
        return new ColumnField('usernote', 'allowsmilies');
    }

    public function getTableName(): string
    {
        return 'usernote';
    }
    
    public function __listColumns() : array
    {
        return ['usernoteid', 'userid', 'posterid', 'username', 'dateline', 'message', 'title', 'allowsmilies'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'usernoteid' => 'integer', 
			'userid' => 'integer', 
			'posterid' => 'integer', 
			'username' => 'string', 
			'dateline' => 'integer', 
			'message' => 'string', 
			'title' => 'string', 
			'allowsmilies' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'usernoteid' => 'usernoteid', 
			'userid' => 'userId', 
			'posterid' => 'posterid', 
			'username' => 'userName', 
			'dateline' => 'dateLine', 
			'message' => 'message', 
			'title' => 'title', 
			'allowsmilies' => 'allowSmilies'
		];
    }

}