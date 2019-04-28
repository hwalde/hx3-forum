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

class SigPicAlias extends TableAlias {
   
    public function userId() : ColumnField
    {
        return new ColumnField('sigpic', 'userid', $this->getAliasName());
    }
    public function fileData() : ColumnField
    {
        return new ColumnField('sigpic', 'filedata', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('sigpic', 'dateline', $this->getAliasName());
    }
    public function fileName() : ColumnField
    {
        return new ColumnField('sigpic', 'filename', $this->getAliasName());
    }
    public function visible() : ColumnField
    {
        return new ColumnField('sigpic', 'visible', $this->getAliasName());
    }
    public function fileSize() : ColumnField
    {
        return new ColumnField('sigpic', 'filesize', $this->getAliasName());
    }
    public function width() : ColumnField
    {
        return new ColumnField('sigpic', 'width', $this->getAliasName());
    }
    public function height() : ColumnField
    {
        return new ColumnField('sigpic', 'height', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'sigpic';
    }
    
    public function __listColumns() : array
    {
        return ['userid', 'filedata', 'dateline', 'filename', 'visible', 'filesize', 'width', 'height'];
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
    public function __getRecordClass() : SigPicRecord
    {
        return new SigPicRecord();
    }
}