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

class PictureComment implements Table {

    const table = 'picturecomment';
   
    public static function as(string $aliasName): PictureCommentAlias
    {
        return new PictureCommentAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::commentId(),
			self::pictureId(),
			self::postUserId(),
			self::postUserName(),
			self::dateLine(),
			self::state(),
			self::title(),
			self::pageText(),
			self::ipAddress(),
			self::allowSmilie(),
			self::reportThreadId(),
			self::messageRead()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PictureCommentRecord
    {
        return new PictureCommentRecord();
    }
    
    public static function commentId() : ColumnField
    {
        return new ColumnField('commentId', 'PictureComment', 'picturecomment', 'commentid');
    }
    public static function pictureId() : ColumnField
    {
        return new ColumnField('pictureId', 'PictureComment', 'picturecomment', 'pictureid');
    }
    public static function postUserId() : ColumnField
    {
        return new ColumnField('postUserId', 'PictureComment', 'picturecomment', 'postuserid');
    }
    public static function postUserName() : ColumnField
    {
        return new ColumnField('postUserName', 'PictureComment', 'picturecomment', 'postusername');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'PictureComment', 'picturecomment', 'dateline');
    }
    public static function state() : ColumnField
    {
        return new ColumnField('state', 'PictureComment', 'picturecomment', 'state');
    }
    public static function title() : ColumnField
    {
        return new ColumnField('title', 'PictureComment', 'picturecomment', 'title');
    }
    public static function pageText() : ColumnField
    {
        return new ColumnField('pageText', 'PictureComment', 'picturecomment', 'pagetext');
    }
    public static function ipAddress() : ColumnField
    {
        return new ColumnField('ipAddress', 'PictureComment', 'picturecomment', 'ipaddress');
    }
    public static function allowSmilie() : ColumnField
    {
        return new ColumnField('allowSmilie', 'PictureComment', 'picturecomment', 'allowsmilie');
    }
    public static function reportThreadId() : ColumnField
    {
        return new ColumnField('reportThreadId', 'PictureComment', 'picturecomment', 'reportthreadid');
    }
    public static function messageRead() : ColumnField
    {
        return new ColumnField('messageRead', 'PictureComment', 'picturecomment', 'messageread');
    }

    public function getTableName(): string
    {
        return 'picturecomment';
    }
    
    public function __listColumns() : array
    {
        return ['commentid', 'pictureid', 'postuserid', 'postusername', 'dateline', 'state', 'title', 'pagetext', 'ipaddress', 'allowsmilie', 'reportthreadid', 'messageread'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['commentid'];
    }
    
    public function __listNullableColumns() : array
    {
        return ['pagetext'];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'commentid' => 'integer', 
			'pictureid' => 'integer', 
			'postuserid' => 'integer', 
			'postusername' => 'string', 
			'dateline' => 'integer', 
			'state' => 'string', 
			'title' => 'string', 
			'pagetext' => 'string', 
			'ipaddress' => 'integer', 
			'allowsmilie' => 'integer', 
			'reportthreadid' => 'integer', 
			'messageread' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'commentid' => 'commentId', 
			'pictureid' => 'pictureId', 
			'postuserid' => 'postUserId', 
			'postusername' => 'postUserName', 
			'dateline' => 'dateLine', 
			'state' => 'state', 
			'title' => 'title', 
			'pagetext' => 'pageText', 
			'ipaddress' => 'ipAddress', 
			'allowsmilie' => 'allowSmilie', 
			'reportthreadid' => 'reportThreadId', 
			'messageread' => 'messageRead'
		];
    }
}