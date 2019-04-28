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

class Picture implements Table {

    const table = 'picture';
   
    public static function as(string $aliasName): PictureAlias
    {
        return new PictureAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::pictureId(),
			self::userId(),
			self::caption(),
			self::extension(),
			self::fileData(),
			self::fileSize(),
			self::width(),
			self::height(),
			self::thumbnail(),
			self::thumbnailFileSize(),
			self::thumbnailWidth(),
			self::thumbnailHeight(),
			self::thumbnailDateline(),
			self::idHash(),
			self::reportThreadId(),
			self::state()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PictureRecord
    {
        return new PictureRecord();
    }
    
    public static function pictureId() : ColumnField
    {
        return new ColumnField('picture', 'pictureid');
    }
    public static function userId() : ColumnField
    {
        return new ColumnField('picture', 'userid');
    }
    public static function caption() : ColumnField
    {
        return new ColumnField('picture', 'caption');
    }
    public static function extension() : ColumnField
    {
        return new ColumnField('picture', 'extension');
    }
    public static function fileData() : ColumnField
    {
        return new ColumnField('picture', 'filedata');
    }
    public static function fileSize() : ColumnField
    {
        return new ColumnField('picture', 'filesize');
    }
    public static function width() : ColumnField
    {
        return new ColumnField('picture', 'width');
    }
    public static function height() : ColumnField
    {
        return new ColumnField('picture', 'height');
    }
    public static function thumbnail() : ColumnField
    {
        return new ColumnField('picture', 'thumbnail');
    }
    public static function thumbnailFileSize() : ColumnField
    {
        return new ColumnField('picture', 'thumbnail_filesize');
    }
    public static function thumbnailWidth() : ColumnField
    {
        return new ColumnField('picture', 'thumbnail_width');
    }
    public static function thumbnailHeight() : ColumnField
    {
        return new ColumnField('picture', 'thumbnail_height');
    }
    public static function thumbnailDateline() : ColumnField
    {
        return new ColumnField('picture', 'thumbnail_dateline');
    }
    public static function idHash() : ColumnField
    {
        return new ColumnField('picture', 'idhash');
    }
    public static function reportThreadId() : ColumnField
    {
        return new ColumnField('picture', 'reportthreadid');
    }
    public static function state() : ColumnField
    {
        return new ColumnField('picture', 'state');
    }

    public function getTableName(): string
    {
        return 'picture';
    }
    
    public function __listColumns() : array
    {
        return ['pictureid', 'userid', 'caption', 'extension', 'filedata', 'filesize', 'width', 'height', 'thumbnail', 'thumbnail_filesize', 'thumbnail_width', 'thumbnail_height', 'thumbnail_dateline', 'idhash', 'reportthreadid', 'state'];
    }
    
    public function __listNullableColumns() : array
    {
        return ['caption', 'filedata', 'thumbnail'];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'pictureid' => 'integer', 
			'userid' => 'integer', 
			'caption' => 'string', 
			'extension' => 'string', 
			'filedata' => 'string', 
			'filesize' => 'integer', 
			'width' => 'integer', 
			'height' => 'integer', 
			'thumbnail' => 'string', 
			'thumbnail_filesize' => 'integer', 
			'thumbnail_width' => 'integer', 
			'thumbnail_height' => 'integer', 
			'thumbnail_dateline' => 'integer', 
			'idhash' => 'string', 
			'reportthreadid' => 'integer', 
			'state' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'pictureid' => 'pictureId', 
			'userid' => 'userId', 
			'caption' => 'caption', 
			'extension' => 'extension', 
			'filedata' => 'fileData', 
			'filesize' => 'fileSize', 
			'width' => 'width', 
			'height' => 'height', 
			'thumbnail' => 'thumbnail', 
			'thumbnail_filesize' => 'thumbnailFileSize', 
			'thumbnail_width' => 'thumbnailWidth', 
			'thumbnail_height' => 'thumbnailHeight', 
			'thumbnail_dateline' => 'thumbnailDateline', 
			'idhash' => 'idHash', 
			'reportthreadid' => 'reportThreadId', 
			'state' => 'state'
		];
    }

}