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

use POOQ\TableAlias;
use POOQ\ColumnField;
use POOQ\ColumnFieldList;

class PictureAlias extends TableAlias {
   
    public function pictureId() : ColumnField
    {
        return new ColumnField('picture', 'pictureid', $this->getAliasName());
    }
    public function userId() : ColumnField
    {
        return new ColumnField('picture', 'userid', $this->getAliasName());
    }
    public function caption() : ColumnField
    {
        return new ColumnField('picture', 'caption', $this->getAliasName());
    }
    public function extension() : ColumnField
    {
        return new ColumnField('picture', 'extension', $this->getAliasName());
    }
    public function fileData() : ColumnField
    {
        return new ColumnField('picture', 'filedata', $this->getAliasName());
    }
    public function fileSize() : ColumnField
    {
        return new ColumnField('picture', 'filesize', $this->getAliasName());
    }
    public function width() : ColumnField
    {
        return new ColumnField('picture', 'width', $this->getAliasName());
    }
    public function height() : ColumnField
    {
        return new ColumnField('picture', 'height', $this->getAliasName());
    }
    public function thumbnail() : ColumnField
    {
        return new ColumnField('picture', 'thumbnail', $this->getAliasName());
    }
    public function thumbnailFileSize() : ColumnField
    {
        return new ColumnField('picture', 'thumbnail_filesize', $this->getAliasName());
    }
    public function thumbnailWidth() : ColumnField
    {
        return new ColumnField('picture', 'thumbnail_width', $this->getAliasName());
    }
    public function thumbnailHeight() : ColumnField
    {
        return new ColumnField('picture', 'thumbnail_height', $this->getAliasName());
    }
    public function thumbnailDateline() : ColumnField
    {
        return new ColumnField('picture', 'thumbnail_dateline', $this->getAliasName());
    }
    public function idHash() : ColumnField
    {
        return new ColumnField('picture', 'idhash', $this->getAliasName());
    }
    public function reportThreadId() : ColumnField
    {
        return new ColumnField('picture', 'reportthreadid', $this->getAliasName());
    }
    public function state() : ColumnField
    {
        return new ColumnField('picture', 'state', $this->getAliasName());
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->pictureId(),
			$this->userId(),
			$this->caption(),
			$this->extension(),
			$this->fileData(),
			$this->fileSize(),
			$this->width(),
			$this->height(),
			$this->thumbnail(),
			$this->thumbnailFileSize(),
			$this->thumbnailWidth(),
			$this->thumbnailHeight(),
			$this->thumbnailDateline(),
			$this->idHash(),
			$this->reportThreadId(),
			$this->state()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PictureRecord
    {
        return new PictureRecord();
    }
}