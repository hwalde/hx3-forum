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

class Attachment implements Table {

    const table = 'attachment';
   
    public static function as(string $aliasName): AttachmentAlias
    {
        return new AttachmentAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::attachmentId(),
			self::userId(),
			self::dateLine(),
			self::thumbnailDateline(),
			self::fileName(),
			self::fileData(),
			self::visible(),
			self::counter(),
			self::fileSize(),
			self::postId(),
			self::fileHash(),
			self::postHash(),
			self::thumbnail(),
			self::thumbnailFileSize(),
			self::importAttachmentId(),
			self::extension()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : AttachmentRecord
    {
        return new AttachmentRecord();
    }
    
    public static function attachmentId() : ColumnField
    {
        return new ColumnField('attachment', 'attachmentid');
    }
    public static function userId() : ColumnField
    {
        return new ColumnField('attachment', 'userid');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('attachment', 'dateline');
    }
    public static function thumbnailDateline() : ColumnField
    {
        return new ColumnField('attachment', 'thumbnail_dateline');
    }
    public static function fileName() : ColumnField
    {
        return new ColumnField('attachment', 'filename');
    }
    public static function fileData() : ColumnField
    {
        return new ColumnField('attachment', 'filedata');
    }
    public static function visible() : ColumnField
    {
        return new ColumnField('attachment', 'visible');
    }
    public static function counter() : ColumnField
    {
        return new ColumnField('attachment', 'counter');
    }
    public static function fileSize() : ColumnField
    {
        return new ColumnField('attachment', 'filesize');
    }
    public static function postId() : ColumnField
    {
        return new ColumnField('attachment', 'postid');
    }
    public static function fileHash() : ColumnField
    {
        return new ColumnField('attachment', 'filehash');
    }
    public static function postHash() : ColumnField
    {
        return new ColumnField('attachment', 'posthash');
    }
    public static function thumbnail() : ColumnField
    {
        return new ColumnField('attachment', 'thumbnail');
    }
    public static function thumbnailFileSize() : ColumnField
    {
        return new ColumnField('attachment', 'thumbnail_filesize');
    }
    public static function importAttachmentId() : ColumnField
    {
        return new ColumnField('attachment', 'importattachmentid');
    }
    public static function extension() : ColumnField
    {
        return new ColumnField('attachment', 'extension');
    }

    public function getTableName(): string
    {
        return 'attachment';
    }
    
    public function __listColumns() : array
    {
        return ['attachmentid', 'userid', 'dateline', 'thumbnail_dateline', 'filename', 'filedata', 'visible', 'counter', 'filesize', 'postid', 'filehash', 'posthash', 'thumbnail', 'thumbnail_filesize', 'importattachmentid', 'extension'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'attachmentid' => 'integer', 
			'userid' => 'integer', 
			'dateline' => 'integer', 
			'thumbnail_dateline' => 'integer', 
			'filename' => 'string', 
			'filedata' => 'string', 
			'visible' => 'integer', 
			'counter' => 'integer', 
			'filesize' => 'integer', 
			'postid' => 'integer', 
			'filehash' => 'string', 
			'posthash' => 'string', 
			'thumbnail' => 'string', 
			'thumbnail_filesize' => 'integer', 
			'importattachmentid' => 'integer', 
			'extension' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'attachmentid' => 'attachmentId', 
			'userid' => 'userId', 
			'dateline' => 'dateLine', 
			'thumbnail_dateline' => 'thumbnailDateline', 
			'filename' => 'fileName', 
			'filedata' => 'fileData', 
			'visible' => 'visible', 
			'counter' => 'counter', 
			'filesize' => 'fileSize', 
			'postid' => 'postId', 
			'filehash' => 'fileHash', 
			'posthash' => 'postHash', 
			'thumbnail' => 'thumbnail', 
			'thumbnail_filesize' => 'thumbnailFileSize', 
			'importattachmentid' => 'importAttachmentId', 
			'extension' => 'extension'
		];
    }

}