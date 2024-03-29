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

class CustomProfilePicAlias extends TableAlias {
   
    public function userId() : ColumnField
    {
        return new ColumnField('userId', 'CustomProfilePic', 'customprofilepic', 'userid', $this->getAliasName());
    }
    public function fileData() : ColumnField
    {
        return new ColumnField('fileData', 'CustomProfilePic', 'customprofilepic', 'filedata', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'CustomProfilePic', 'customprofilepic', 'dateline', $this->getAliasName());
    }
    public function fileName() : ColumnField
    {
        return new ColumnField('fileName', 'CustomProfilePic', 'customprofilepic', 'filename', $this->getAliasName());
    }
    public function visible() : ColumnField
    {
        return new ColumnField('visible', 'CustomProfilePic', 'customprofilepic', 'visible', $this->getAliasName());
    }
    public function fileSize() : ColumnField
    {
        return new ColumnField('fileSize', 'CustomProfilePic', 'customprofilepic', 'filesize', $this->getAliasName());
    }
    public function width() : ColumnField
    {
        return new ColumnField('width', 'CustomProfilePic', 'customprofilepic', 'width', $this->getAliasName());
    }
    public function height() : ColumnField
    {
        return new ColumnField('height', 'CustomProfilePic', 'customprofilepic', 'height', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'customprofilepic';
    }
    
    public function __listColumns() : array
    {
        return ['userid', 'filedata', 'dateline', 'filename', 'visible', 'filesize', 'width', 'height'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['userid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'userid' => 'integer', 
			'filedata' => 'string', 
			'dateline' => 'integer', 
			'filename' => 'string', 
			'visible' => 'integer', 
			'filesize' => 'integer', 
			'width' => 'integer', 
			'height' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'userid' => 'userId', 
			'filedata' => 'fileData', 
			'dateline' => 'dateLine', 
			'filename' => 'fileName', 
			'visible' => 'visible', 
			'filesize' => 'fileSize', 
			'width' => 'width', 
			'height' => 'height'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->userId(),
			$this->fileData(),
			$this->dateLine(),
			$this->fileName(),
			$this->visible(),
			$this->fileSize(),
			$this->width(),
			$this->height()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : CustomProfilePicRecord
    {
        return new CustomProfilePicRecord();
    }
}