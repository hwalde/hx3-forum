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

class Album implements Table {

    const table = 'album';
   
    public static function as(string $aliasName): AlbumAlias
    {
        return new AlbumAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::albumId(),
			self::userId(),
			self::createDate(),
			self::lastPictureDate(),
			self::visible(),
			self::title(),
			self::description(),
			self::coverPictureId(),
			self::state(),
			self::moderation()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : AlbumRecord
    {
        return new AlbumRecord();
    }
    
    public static function albumId() : ColumnField
    {
        return new ColumnField('album', 'albumid');
    }
    public static function userId() : ColumnField
    {
        return new ColumnField('album', 'userid');
    }
    public static function createDate() : ColumnField
    {
        return new ColumnField('album', 'createdate');
    }
    public static function lastPictureDate() : ColumnField
    {
        return new ColumnField('album', 'lastpicturedate');
    }
    public static function visible() : ColumnField
    {
        return new ColumnField('album', 'visible');
    }
    public static function title() : ColumnField
    {
        return new ColumnField('album', 'title');
    }
    public static function description() : ColumnField
    {
        return new ColumnField('album', 'description');
    }
    public static function coverPictureId() : ColumnField
    {
        return new ColumnField('album', 'coverpictureid');
    }
    public static function state() : ColumnField
    {
        return new ColumnField('album', 'state');
    }
    public static function moderation() : ColumnField
    {
        return new ColumnField('album', 'moderation');
    }

    public function getTableName(): string
    {
        return 'album';
    }
    
    public function __listColumns() : array
    {
        return ['albumid', 'userid', 'createdate', 'lastpicturedate', 'visible', 'title', 'description', 'coverpictureid', 'state', 'moderation'];
    }
    
    public function __listNullableColumns() : array
    {
        return ['description'];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'albumid' => 'integer', 
			'userid' => 'integer', 
			'createdate' => 'integer', 
			'lastpicturedate' => 'integer', 
			'visible' => 'integer', 
			'title' => 'string', 
			'description' => 'string', 
			'coverpictureid' => 'integer', 
			'state' => 'string', 
			'moderation' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'albumid' => 'albumId', 
			'userid' => 'userId', 
			'createdate' => 'createDate', 
			'lastpicturedate' => 'lastPictureDate', 
			'visible' => 'visible', 
			'title' => 'title', 
			'description' => 'description', 
			'coverpictureid' => 'coverPictureId', 
			'state' => 'state', 
			'moderation' => 'moderation'
		];
    }

}