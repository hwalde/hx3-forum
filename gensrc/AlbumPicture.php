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

class AlbumPicture implements Table {

    const table = 'albumpicture';
   
    public static function as(string $aliasName): AlbumPictureAlias
    {
        return new AlbumPictureAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::albumId(),
			self::pictureId(),
			self::dateLine()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : AlbumPictureRecord
    {
        return new AlbumPictureRecord();
    }
    
    public static function albumId() : ColumnField
    {
        return new ColumnField('albumpicture', 'albumid');
    }
    public static function pictureId() : ColumnField
    {
        return new ColumnField('albumpicture', 'pictureid');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('albumpicture', 'dateline');
    }

    public function getTableName(): string
    {
        return 'albumpicture';
    }
    
    public function __listColumns() : array
    {
        return ['albumid', 'pictureid', 'dateline'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'albumid' => 'integer', 
			'pictureid' => 'integer', 
			'dateline' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'albumid' => 'albumId', 
			'pictureid' => 'pictureId', 
			'dateline' => 'dateLine'
		];
    }

}