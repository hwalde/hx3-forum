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

class AttachmentType implements Table {

    const table = 'attachmenttype';
   
    public static function as(string $aliasName): AttachmentTypeAlias
    {
        return new AttachmentTypeAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::extension(),
			self::mimeType(),
			self::size(),
			self::width(),
			self::height(),
			self::enabled(),
			self::display(),
			self::thumbnail(),
			self::newWindow()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : AttachmentTypeRecord
    {
        return new AttachmentTypeRecord();
    }
    
    public static function extension() : ColumnField
    {
        return new ColumnField('attachmenttype', 'extension');
    }
    public static function mimeType() : ColumnField
    {
        return new ColumnField('attachmenttype', 'mimetype');
    }
    public static function size() : ColumnField
    {
        return new ColumnField('attachmenttype', 'size');
    }
    public static function width() : ColumnField
    {
        return new ColumnField('attachmenttype', 'width');
    }
    public static function height() : ColumnField
    {
        return new ColumnField('attachmenttype', 'height');
    }
    public static function enabled() : ColumnField
    {
        return new ColumnField('attachmenttype', 'enabled');
    }
    public static function display() : ColumnField
    {
        return new ColumnField('attachmenttype', 'display');
    }
    public static function thumbnail() : ColumnField
    {
        return new ColumnField('attachmenttype', 'thumbnail');
    }
    public static function newWindow() : ColumnField
    {
        return new ColumnField('attachmenttype', 'newwindow');
    }

    public function getTableName(): string
    {
        return 'attachmenttype';
    }
    
    public function __listColumns() : array
    {
        return ['extension', 'mimetype', 'size', 'width', 'height', 'enabled', 'display', 'thumbnail', 'newwindow'];
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

}