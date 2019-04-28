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

class AttachmentAlias extends TableAlias {
   
    public function attachmentId() : ColumnField
    {
        return new ColumnField('attachment', 'attachmentid', $this->getAliasName());
    }
    public function userId() : ColumnField
    {
        return new ColumnField('attachment', 'userid', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('attachment', 'dateline', $this->getAliasName());
    }
    public function thumbnailDateline() : ColumnField
    {
        return new ColumnField('attachment', 'thumbnail_dateline', $this->getAliasName());
    }
    public function fileName() : ColumnField
    {
        return new ColumnField('attachment', 'filename', $this->getAliasName());
    }
    public function fileData() : ColumnField
    {
        return new ColumnField('attachment', 'filedata', $this->getAliasName());
    }
    public function visible() : ColumnField
    {
        return new ColumnField('attachment', 'visible', $this->getAliasName());
    }
    public function counter() : ColumnField
    {
        return new ColumnField('attachment', 'counter', $this->getAliasName());
    }
    public function fileSize() : ColumnField
    {
        return new ColumnField('attachment', 'filesize', $this->getAliasName());
    }
    public function postId() : ColumnField
    {
        return new ColumnField('attachment', 'postid', $this->getAliasName());
    }
    public function fileHash() : ColumnField
    {
        return new ColumnField('attachment', 'filehash', $this->getAliasName());
    }
    public function postHash() : ColumnField
    {
        return new ColumnField('attachment', 'posthash', $this->getAliasName());
    }
    public function thumbnail() : ColumnField
    {
        return new ColumnField('attachment', 'thumbnail', $this->getAliasName());
    }
    public function thumbnailFileSize() : ColumnField
    {
        return new ColumnField('attachment', 'thumbnail_filesize', $this->getAliasName());
    }
    public function importAttachmentId() : ColumnField
    {
        return new ColumnField('attachment', 'importattachmentid', $this->getAliasName());
    }
    public function extension() : ColumnField
    {
        return new ColumnField('attachment', 'extension', $this->getAliasName());
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->attachmentId(),
			$this->userId(),
			$this->dateLine(),
			$this->thumbnailDateline(),
			$this->fileName(),
			$this->fileData(),
			$this->visible(),
			$this->counter(),
			$this->fileSize(),
			$this->postId(),
			$this->fileHash(),
			$this->postHash(),
			$this->thumbnail(),
			$this->thumbnailFileSize(),
			$this->importAttachmentId(),
			$this->extension()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : AttachmentRecord
    {
        return new AttachmentRecord();
    }
}