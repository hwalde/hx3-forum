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

class PtIssueAttachAlias extends TableAlias {
   
    public function attachmentId() : ColumnField
    {
        return new ColumnField('pt_issueattach', 'attachmentid', $this->getAliasName());
    }
    public function issueId() : ColumnField
    {
        return new ColumnField('pt_issueattach', 'issueid', $this->getAliasName());
    }
    public function userId() : ColumnField
    {
        return new ColumnField('pt_issueattach', 'userid', $this->getAliasName());
    }
    public function fileName() : ColumnField
    {
        return new ColumnField('pt_issueattach', 'filename', $this->getAliasName());
    }
    public function extension() : ColumnField
    {
        return new ColumnField('pt_issueattach', 'extension', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('pt_issueattach', 'dateline', $this->getAliasName());
    }
    public function visible() : ColumnField
    {
        return new ColumnField('pt_issueattach', 'visible', $this->getAliasName());
    }
    public function status() : ColumnField
    {
        return new ColumnField('pt_issueattach', 'status', $this->getAliasName());
    }
    public function fileSize() : ColumnField
    {
        return new ColumnField('pt_issueattach', 'filesize', $this->getAliasName());
    }
    public function fileHash() : ColumnField
    {
        return new ColumnField('pt_issueattach', 'filehash', $this->getAliasName());
    }
    public function fileData() : ColumnField
    {
        return new ColumnField('pt_issueattach', 'filedata', $this->getAliasName());
    }
    public function thumbnail() : ColumnField
    {
        return new ColumnField('pt_issueattach', 'thumbnail', $this->getAliasName());
    }
    public function thumbnailFileSize() : ColumnField
    {
        return new ColumnField('pt_issueattach', 'thumbnail_filesize', $this->getAliasName());
    }
    public function thumbnailDateline() : ColumnField
    {
        return new ColumnField('pt_issueattach', 'thumbnail_dateline', $this->getAliasName());
    }
    public function isPatchFile() : ColumnField
    {
        return new ColumnField('pt_issueattach', 'ispatchfile', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'pt_issueattach';
    }
    
    public function __listColumns() : array
    {
        return ['attachmentid', 'issueid', 'userid', 'filename', 'extension', 'dateline', 'visible', 'status', 'filesize', 'filehash', 'filedata', 'thumbnail', 'thumbnail_filesize', 'thumbnail_dateline', 'ispatchfile'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'attachmentid' => 'integer', 
			'issueid' => 'integer', 
			'userid' => 'integer', 
			'filename' => 'string', 
			'extension' => 'string', 
			'dateline' => 'integer', 
			'visible' => 'integer', 
			'status' => 'string', 
			'filesize' => 'integer', 
			'filehash' => 'string', 
			'filedata' => 'string', 
			'thumbnail' => 'string', 
			'thumbnail_filesize' => 'integer', 
			'thumbnail_dateline' => 'integer', 
			'ispatchfile' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'attachmentid' => 'attachmentId', 
			'issueid' => 'issueId', 
			'userid' => 'userId', 
			'filename' => 'fileName', 
			'extension' => 'extension', 
			'dateline' => 'dateLine', 
			'visible' => 'visible', 
			'status' => 'status', 
			'filesize' => 'fileSize', 
			'filehash' => 'fileHash', 
			'filedata' => 'fileData', 
			'thumbnail' => 'thumbnail', 
			'thumbnail_filesize' => 'thumbnailFileSize', 
			'thumbnail_dateline' => 'thumbnailDateline', 
			'ispatchfile' => 'isPatchFile'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->attachmentId(),
			$this->issueId(),
			$this->userId(),
			$this->fileName(),
			$this->extension(),
			$this->dateLine(),
			$this->visible(),
			$this->status(),
			$this->fileSize(),
			$this->fileHash(),
			$this->fileData(),
			$this->thumbnail(),
			$this->thumbnailFileSize(),
			$this->thumbnailDateline(),
			$this->isPatchFile()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PtIssueAttachRecord
    {
        return new PtIssueAttachRecord();
    }
}