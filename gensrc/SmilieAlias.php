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

class SmilieAlias extends TableAlias {
   
    public function smilieId() : ColumnField
    {
        return new ColumnField('smilieId', 'Smilie', 'smilie', 'smilieid', $this->getAliasName());
    }
    public function title() : ColumnField
    {
        return new ColumnField('title', 'Smilie', 'smilie', 'title', $this->getAliasName());
    }
    public function smilieText() : ColumnField
    {
        return new ColumnField('smilieText', 'Smilie', 'smilie', 'smilietext', $this->getAliasName());
    }
    public function smiliePath() : ColumnField
    {
        return new ColumnField('smiliePath', 'Smilie', 'smilie', 'smiliepath', $this->getAliasName());
    }
    public function imageCategoryId() : ColumnField
    {
        return new ColumnField('imageCategoryId', 'Smilie', 'smilie', 'imagecategoryid', $this->getAliasName());
    }
    public function displayOrder() : ColumnField
    {
        return new ColumnField('displayOrder', 'Smilie', 'smilie', 'displayorder', $this->getAliasName());
    }
    public function importSmilieId() : ColumnField
    {
        return new ColumnField('importSmilieId', 'Smilie', 'smilie', 'importsmilieid', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'smilie';
    }
    
    public function __listColumns() : array
    {
        return ['smilieid', 'title', 'smilietext', 'smiliepath', 'imagecategoryid', 'displayorder', 'importsmilieid'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['smilieid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'smilieid' => 'integer', 
			'title' => 'string', 
			'smilietext' => 'string', 
			'smiliepath' => 'string', 
			'imagecategoryid' => 'integer', 
			'displayorder' => 'integer', 
			'importsmilieid' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'smilieid' => 'smilieId', 
			'title' => 'title', 
			'smilietext' => 'smilieText', 
			'smiliepath' => 'smiliePath', 
			'imagecategoryid' => 'imageCategoryId', 
			'displayorder' => 'displayOrder', 
			'importsmilieid' => 'importSmilieId'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->smilieId(),
			$this->title(),
			$this->smilieText(),
			$this->smiliePath(),
			$this->imageCategoryId(),
			$this->displayOrder(),
			$this->importSmilieId()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : SmilieRecord
    {
        return new SmilieRecord();
    }
}