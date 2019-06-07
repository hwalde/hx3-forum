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
        return new ColumnField('attachmentId', 'Attachment', 'attachment', 'attachmentid', $this->getAliasName());
    }
    public function userId() : ColumnField
    {
        return new ColumnField('userId', 'Attachment', 'attachment', 'userid', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'Attachment', 'attachment', 'dateline', $this->getAliasName());
    }
    public function thumbnailDateline() : ColumnField
    {
        return new ColumnField('thumbnailDateline', 'Attachment', 'attachment', 'thumbnail_dateline', $this->getAliasName());
    }
    public function fileName() : ColumnField
    {
        return new ColumnField('fileName', 'Attachment', 'attachment', 'filename', $this->getAliasName());
    }
    public function fileData() : ColumnField
    {
        return new ColumnField('fileData', 'Attachment', 'attachment', 'filedata', $this->getAliasName());
    }
    public function visible() : ColumnField
    {
        return new ColumnField('visible', 'Attachment', 'attachment', 'visible', $this->getAliasName());
    }
    public function counter() : ColumnField
    {
        return new ColumnField('counter', 'Attachment', 'attachment', 'counter', $this->getAliasName());
    }
    public function fileSize() : ColumnField
    {
        return new ColumnField('fileSize', 'Attachment', 'attachment', 'filesize', $this->getAliasName());
    }
    public function postId() : ColumnField
    {
        return new ColumnField('postId', 'Attachment', 'attachment', 'postid', $this->getAliasName());
    }
    public function fileHash() : ColumnField
    {
        return new ColumnField('fileHash', 'Attachment', 'attachment', 'filehash', $this->getAliasName());
    }
    public function postHash() : ColumnField
    {
        return new ColumnField('postHash', 'Attachment', 'attachment', 'posthash', $this->getAliasName());
    }
    public function thumbnail() : ColumnField
    {
        return new ColumnField('thumbnail', 'Attachment', 'attachment', 'thumbnail', $this->getAliasName());
    }
    public function thumbnailFileSize() : ColumnField
    {
        return new ColumnField('thumbnailFileSize', 'Attachment', 'attachment', 'thumbnail_filesize', $this->getAliasName());
    }
    public function importAttachmentId() : ColumnField
    {
        return new ColumnField('importAttachmentId', 'Attachment', 'attachment', 'importattachmentid', $this->getAliasName());
    }
    public function extension() : ColumnField
    {
        return new ColumnField('extension', 'Attachment', 'attachment', 'extension', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'attachment';
    }
    
    public function __listColumns() : array
    {
        return ['attachmentid', 'userid', 'dateline', 'thumbnail_dateline', 'filename', 'filedata', 'visible', 'counter', 'filesize', 'postid', 'filehash', 'posthash', 'thumbnail', 'thumbnail_filesize', 'importattachmentid', 'extension'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['attachmentid'];
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