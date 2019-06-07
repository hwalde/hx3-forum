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

class CustomProfilePic implements Table {

    const table = 'customprofilepic';
   
    public static function as(string $aliasName): CustomProfilePicAlias
    {
        return new CustomProfilePicAlias($aliasName);
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
    public function __getRecordClass() : CustomProfilePicRecord
    {
        return new CustomProfilePicRecord();
    }
    
    public static function userId() : ColumnField
    {
        return new ColumnField('userId', 'CustomProfilePic', 'customprofilepic', 'userid');
    }
    public static function fileData() : ColumnField
    {
        return new ColumnField('fileData', 'CustomProfilePic', 'customprofilepic', 'filedata');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'CustomProfilePic', 'customprofilepic', 'dateline');
    }
    public static function fileName() : ColumnField
    {
        return new ColumnField('fileName', 'CustomProfilePic', 'customprofilepic', 'filename');
    }
    public static function visible() : ColumnField
    {
        return new ColumnField('visible', 'CustomProfilePic', 'customprofilepic', 'visible');
    }
    public static function fileSize() : ColumnField
    {
        return new ColumnField('fileSize', 'CustomProfilePic', 'customprofilepic', 'filesize');
    }
    public static function width() : ColumnField
    {
        return new ColumnField('width', 'CustomProfilePic', 'customprofilepic', 'width');
    }
    public static function height() : ColumnField
    {
        return new ColumnField('height', 'CustomProfilePic', 'customprofilepic', 'height');
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
}