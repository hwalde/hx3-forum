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

class AttachmentTypeAlias extends TableAlias {
   
    public function extension() : ColumnField
    {
        return new ColumnField('extension', 'AttachmentType', 'attachmenttype', 'extension', $this->getAliasName());
    }
    public function mimeType() : ColumnField
    {
        return new ColumnField('mimeType', 'AttachmentType', 'attachmenttype', 'mimetype', $this->getAliasName());
    }
    public function size() : ColumnField
    {
        return new ColumnField('size', 'AttachmentType', 'attachmenttype', 'size', $this->getAliasName());
    }
    public function width() : ColumnField
    {
        return new ColumnField('width', 'AttachmentType', 'attachmenttype', 'width', $this->getAliasName());
    }
    public function height() : ColumnField
    {
        return new ColumnField('height', 'AttachmentType', 'attachmenttype', 'height', $this->getAliasName());
    }
    public function enabled() : ColumnField
    {
        return new ColumnField('enabled', 'AttachmentType', 'attachmenttype', 'enabled', $this->getAliasName());
    }
    public function display() : ColumnField
    {
        return new ColumnField('display', 'AttachmentType', 'attachmenttype', 'display', $this->getAliasName());
    }
    public function thumbnail() : ColumnField
    {
        return new ColumnField('thumbnail', 'AttachmentType', 'attachmenttype', 'thumbnail', $this->getAliasName());
    }
    public function newWindow() : ColumnField
    {
        return new ColumnField('newWindow', 'AttachmentType', 'attachmenttype', 'newwindow', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'attachmenttype';
    }
    
    public function __listColumns() : array
    {
        return ['extension', 'mimetype', 'size', 'width', 'height', 'enabled', 'display', 'thumbnail', 'newwindow'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['extension'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'extension' => 'string', 
			'mimetype' => 'string', 
			'size' => 'integer', 
			'width' => 'integer', 
			'height' => 'integer', 
			'enabled' => 'integer', 
			'display' => 'integer', 
			'thumbnail' => 'integer', 
			'newwindow' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'extension' => 'extension', 
			'mimetype' => 'mimeType', 
			'size' => 'size', 
			'width' => 'width', 
			'height' => 'height', 
			'enabled' => 'enabled', 
			'display' => 'display', 
			'thumbnail' => 'thumbnail', 
			'newwindow' => 'newWindow'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->extension(),
			$this->mimeType(),
			$this->size(),
			$this->width(),
			$this->height(),
			$this->enabled(),
			$this->display(),
			$this->thumbnail(),
			$this->newWindow()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : AttachmentTypeRecord
    {
        return new AttachmentTypeRecord();
    }
}