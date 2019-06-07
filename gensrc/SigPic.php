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

class SigPic implements Table {

    const table = 'sigpic';
   
    public static function as(string $aliasName): SigPicAlias
    {
        return new SigPicAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::userId(),
			self::fileData(),
			self::dateLine(),
			self::fileName(),
			self::visible(),
			self::fileSize(),
			self::width(),
			self::height()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : SigPicRecord
    {
        return new SigPicRecord();
    }
    
    public static function userId() : ColumnField
    {
        return new ColumnField('userId', 'SigPic', 'sigpic', 'userid');
    }
    public static function fileData() : ColumnField
    {
        return new ColumnField('fileData', 'SigPic', 'sigpic', 'filedata');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'SigPic', 'sigpic', 'dateline');
    }
    public static function fileName() : ColumnField
    {
        return new ColumnField('fileName', 'SigPic', 'sigpic', 'filename');
    }
    public static function visible() : ColumnField
    {
        return new ColumnField('visible', 'SigPic', 'sigpic', 'visible');
    }
    public static function fileSize() : ColumnField
    {
        return new ColumnField('fileSize', 'SigPic', 'sigpic', 'filesize');
    }
    public static function width() : ColumnField
    {
        return new ColumnField('width', 'SigPic', 'sigpic', 'width');
    }
    public static function height() : ColumnField
    {
        return new ColumnField('height', 'SigPic', 'sigpic', 'height');
    }

    public function getTableName(): string
    {
        return 'sigpic';
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
        return ['filedata'];
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
}