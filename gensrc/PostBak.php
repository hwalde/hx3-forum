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

class PostBak implements Table {

    const table = 'post_bak';
   
    public static function as(string $aliasName): PostBakAlias
    {
        return new PostBakAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::postId(),
			self::threadId(),
			self::parentId(),
			self::userName(),
			self::userId(),
			self::title(),
			self::dateLine(),
			self::pageText(),
			self::allowSmilie(),
			self::showSignature(),
			self::ipAddress(),
			self::iconId(),
			self::visible(),
			self::attach(),
			self::importThreadId(),
			self::importpostId(),
			self::infraction(),
			self::reportThreadId()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PostBakRecord
    {
        return new PostBakRecord();
    }
    
    public static function postId() : ColumnField
    {
        return new ColumnField('post_bak', 'postid');
    }
    public static function threadId() : ColumnField
    {
        return new ColumnField('post_bak', 'threadid');
    }
    public static function parentId() : ColumnField
    {
        return new ColumnField('post_bak', 'parentid');
    }
    public static function userName() : ColumnField
    {
        return new ColumnField('post_bak', 'username');
    }
    public static function userId() : ColumnField
    {
        return new ColumnField('post_bak', 'userid');
    }
    public static function title() : ColumnField
    {
        return new ColumnField('post_bak', 'title');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('post_bak', 'dateline');
    }
    public static function pageText() : ColumnField
    {
        return new ColumnField('post_bak', 'pagetext');
    }
    public static function allowSmilie() : ColumnField
    {
        return new ColumnField('post_bak', 'allowsmilie');
    }
    public static function showSignature() : ColumnField
    {
        return new ColumnField('post_bak', 'showsignature');
    }
    public static function ipAddress() : ColumnField
    {
        return new ColumnField('post_bak', 'ipaddress');
    }
    public static function iconId() : ColumnField
    {
        return new ColumnField('post_bak', 'iconid');
    }
    public static function visible() : ColumnField
    {
        return new ColumnField('post_bak', 'visible');
    }
    public static function attach() : ColumnField
    {
        return new ColumnField('post_bak', 'attach');
    }
    public static function importThreadId() : ColumnField
    {
        return new ColumnField('post_bak', 'importthreadid');
    }
    public static function importpostId() : ColumnField
    {
        return new ColumnField('post_bak', 'importpostid');
    }
    public static function infraction() : ColumnField
    {
        return new ColumnField('post_bak', 'infraction');
    }
    public static function reportThreadId() : ColumnField
    {
        return new ColumnField('post_bak', 'reportthreadid');
    }

    public function getTableName(): string
    {
        return 'post_bak';
    }
    
    public function __listColumns() : array
    {
        return ['postid', 'threadid', 'parentid', 'username', 'userid', 'title', 'dateline', 'pagetext', 'allowsmilie', 'showsignature', 'ipaddress', 'iconid', 'visible', 'attach', 'importthreadid', 'importpostid', 'infraction', 'reportthreadid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'postid' => 'integer', 
			'threadid' => 'integer', 
			'parentid' => 'integer', 
			'username' => 'string', 
			'userid' => 'integer', 
			'title' => 'string', 
			'dateline' => 'integer', 
			'pagetext' => 'string', 
			'allowsmilie' => 'integer', 
			'showsignature' => 'integer', 
			'ipaddress' => 'string', 
			'iconid' => 'integer', 
			'visible' => 'integer', 
			'attach' => 'integer', 
			'importthreadid' => 'integer', 
			'importpostid' => 'integer', 
			'infraction' => 'integer', 
			'reportthreadid' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'postid' => 'postId', 
			'threadid' => 'threadId', 
			'parentid' => 'parentId', 
			'username' => 'userName', 
			'userid' => 'userId', 
			'title' => 'title', 
			'dateline' => 'dateLine', 
			'pagetext' => 'pageText', 
			'allowsmilie' => 'allowSmilie', 
			'showsignature' => 'showSignature', 
			'ipaddress' => 'ipAddress', 
			'iconid' => 'iconId', 
			'visible' => 'visible', 
			'attach' => 'attach', 
			'importthreadid' => 'importThreadId', 
			'importpostid' => 'importpostId', 
			'infraction' => 'infraction', 
			'reportthreadid' => 'reportThreadId'
		];
    }

}