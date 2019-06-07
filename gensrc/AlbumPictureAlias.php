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

class AlbumPictureAlias extends TableAlias {
   
    public function albumId() : ColumnField
    {
        return new ColumnField('albumId', 'AlbumPicture', 'albumpicture', 'albumid', $this->getAliasName());
    }
    public function pictureId() : ColumnField
    {
        return new ColumnField('pictureId', 'AlbumPicture', 'albumpicture', 'pictureid', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'AlbumPicture', 'albumpicture', 'dateline', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'albumpicture';
    }
    
    public function __listColumns() : array
    {
        return ['albumid', 'pictureid', 'dateline'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['albumid', 'pictureid'];
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->albumId(),
			$this->pictureId(),
			$this->dateLine()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : AlbumPictureRecord
    {
        return new AlbumPictureRecord();
    }
}