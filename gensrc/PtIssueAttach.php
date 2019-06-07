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

class PtIssueAttach implements Table {

    const table = 'pt_issueattach';
   
    public static function as(string $aliasName): PtIssueAttachAlias
    {
        return new PtIssueAttachAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::attachmentId(),
			self::issueId(),
			self::userId(),
			self::fileName(),
			self::extension(),
			self::dateLine(),
			self::visible(),
			self::status(),
			self::fileSize(),
			self::fileHash(),
			self::fileData(),
			self::thumbnail(),
			self::thumbnailFileSize(),
			self::thumbnailDateline(),
			self::isPatchFile()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PtIssueAttachRecord
    {
        return new PtIssueAttachRecord();
    }
    
    public static function attachmentId() : ColumnField
    {
        return new ColumnField('attachmentId', 'PtIssueAttach', 'pt_issueattach', 'attachmentid');
    }
    public static function issueId() : ColumnField
    {
        return new ColumnField('issueId', 'PtIssueAttach', 'pt_issueattach', 'issueid');
    }
    public static function userId() : ColumnField
    {
        return new ColumnField('userId', 'PtIssueAttach', 'pt_issueattach', 'userid');
    }
    public static function fileName() : ColumnField
    {
        return new ColumnField('fileName', 'PtIssueAttach', 'pt_issueattach', 'filename');
    }
    public static function extension() : ColumnField
    {
        return new ColumnField('extension', 'PtIssueAttach', 'pt_issueattach', 'extension');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'PtIssueAttach', 'pt_issueattach', 'dateline');
    }
    public static function visible() : ColumnField
    {
        return new ColumnField('visible', 'PtIssueAttach', 'pt_issueattach', 'visible');
    }
    public static function status() : ColumnField
    {
        return new ColumnField('status', 'PtIssueAttach', 'pt_issueattach', 'status');
    }
    public static function fileSize() : ColumnField
    {
        return new ColumnField('fileSize', 'PtIssueAttach', 'pt_issueattach', 'filesize');
    }
    public static function fileHash() : ColumnField
    {
        return new ColumnField('fileHash', 'PtIssueAttach', 'pt_issueattach', 'filehash');
    }
    public static function fileData() : ColumnField
    {
        return new ColumnField('fileData', 'PtIssueAttach', 'pt_issueattach', 'filedata');
    }
    public static function thumbnail() : ColumnField
    {
        return new ColumnField('thumbnail', 'PtIssueAttach', 'pt_issueattach', 'thumbnail');
    }
    public static function thumbnailFileSize() : ColumnField
    {
        return new ColumnField('thumbnailFileSize', 'PtIssueAttach', 'pt_issueattach', 'thumbnail_filesize');
    }
    public static function thumbnailDateline() : ColumnField
    {
        return new ColumnField('thumbnailDateline', 'PtIssueAttach', 'pt_issueattach', 'thumbnail_dateline');
    }
    public static function isPatchFile() : ColumnField
    {
        return new ColumnField('isPatchFile', 'PtIssueAttach', 'pt_issueattach', 'ispatchfile');
    }

    public function getTableName(): string
    {
        return 'pt_issueattach';
    }
    
    public function __listColumns() : array
    {
        return ['attachmentid', 'issueid', 'userid', 'filename', 'extension', 'dateline', 'visible', 'status', 'filesize', 'filehash', 'filedata', 'thumbnail', 'thumbnail_filesize', 'thumbnail_dateline', 'ispatchfile'];
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
}