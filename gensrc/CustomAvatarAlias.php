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

class CustomAvatarAlias extends TableAlias {
   
    public function userId() : ColumnField
    {
        return new ColumnField('userId', 'CustomAvatar', 'customavatar', 'userid', $this->getAliasName());
    }
    public function fileData() : ColumnField
    {
        return new ColumnField('fileData', 'CustomAvatar', 'customavatar', 'filedata', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'CustomAvatar', 'customavatar', 'dateline', $this->getAliasName());
    }
    public function fileName() : ColumnField
    {
        return new ColumnField('fileName', 'CustomAvatar', 'customavatar', 'filename', $this->getAliasName());
    }
    public function visible() : ColumnField
    {
        return new ColumnField('visible', 'CustomAvatar', 'customavatar', 'visible', $this->getAliasName());
    }
    public function fileSize() : ColumnField
    {
        return new ColumnField('fileSize', 'CustomAvatar', 'customavatar', 'filesize', $this->getAliasName());
    }
    public function width() : ColumnField
    {
        return new ColumnField('width', 'CustomAvatar', 'customavatar', 'width', $this->getAliasName());
    }
    public function height() : ColumnField
    {
        return new ColumnField('height', 'CustomAvatar', 'customavatar', 'height', $this->getAliasName());
    }
    public function fileDataThumb() : ColumnField
    {
        return new ColumnField('fileDataThumb', 'CustomAvatar', 'customavatar', 'filedata_thumb', $this->getAliasName());
    }
    public function widthThumb() : ColumnField
    {
        return new ColumnField('widthThumb', 'CustomAvatar', 'customavatar', 'width_thumb', $this->getAliasName());
    }
    public function heightThumb() : ColumnField
    {
        return new ColumnField('heightThumb', 'CustomAvatar', 'customavatar', 'height_thumb', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'customavatar';
    }
    
    public function __listColumns() : array
    {
        return ['userid', 'filedata', 'dateline', 'filename', 'visible', 'filesize', 'width', 'height', 'filedata_thumb', 'width_thumb', 'height_thumb'];
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
        return ['filedata_thumb'];
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
			'height' => 'integer', 
			'filedata_thumb' => 'string', 
			'width_thumb' => 'integer', 
			'height_thumb' => 'integer'
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
			'height' => 'height', 
			'filedata_thumb' => 'fileDataThumb', 
			'width_thumb' => 'widthThumb', 
			'height_thumb' => 'heightThumb'
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
			$this->height(),
			$this->fileDataThumb(),
			$this->widthThumb(),
			$this->heightThumb()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : CustomAvatarRecord
    {
        return new CustomAvatarRecord();
    }
}