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

class AlbumAlias extends TableAlias {
   
    public function albumId() : ColumnField
    {
        return new ColumnField('albumId', 'Album', 'album', 'albumid', $this->getAliasName());
    }
    public function userId() : ColumnField
    {
        return new ColumnField('userId', 'Album', 'album', 'userid', $this->getAliasName());
    }
    public function createDate() : ColumnField
    {
        return new ColumnField('createDate', 'Album', 'album', 'createdate', $this->getAliasName());
    }
    public function lastPictureDate() : ColumnField
    {
        return new ColumnField('lastPictureDate', 'Album', 'album', 'lastpicturedate', $this->getAliasName());
    }
    public function visible() : ColumnField
    {
        return new ColumnField('visible', 'Album', 'album', 'visible', $this->getAliasName());
    }
    public function title() : ColumnField
    {
        return new ColumnField('title', 'Album', 'album', 'title', $this->getAliasName());
    }
    public function description() : ColumnField
    {
        return new ColumnField('description', 'Album', 'album', 'description', $this->getAliasName());
    }
    public function coverPictureId() : ColumnField
    {
        return new ColumnField('coverPictureId', 'Album', 'album', 'coverpictureid', $this->getAliasName());
    }
    public function state() : ColumnField
    {
        return new ColumnField('state', 'Album', 'album', 'state', $this->getAliasName());
    }
    public function moderation() : ColumnField
    {
        return new ColumnField('moderation', 'Album', 'album', 'moderation', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'album';
    }
    
    public function __listColumns() : array
    {
        return ['albumid', 'userid', 'createdate', 'lastpicturedate', 'visible', 'title', 'description', 'coverpictureid', 'state', 'moderation'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['albumid'];
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->albumId(),
			$this->userId(),
			$this->createDate(),
			$this->lastPictureDate(),
			$this->visible(),
			$this->title(),
			$this->description(),
			$this->coverPictureId(),
			$this->state(),
			$this->moderation()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : AlbumRecord
    {
        return new AlbumRecord();
    }
}