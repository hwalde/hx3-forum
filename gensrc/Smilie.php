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

class Smilie implements Table {

    const table = 'smilie';
   
    public static function as(string $aliasName): SmilieAlias
    {
        return new SmilieAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::smilieId(),
			self::title(),
			self::smilieText(),
			self::smiliePath(),
			self::imageCategoryId(),
			self::displayOrder(),
			self::importSmilieId()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : SmilieRecord
    {
        return new SmilieRecord();
    }
    
    public static function smilieId() : ColumnField
    {
        return new ColumnField('smilieId', 'Smilie', 'smilie', 'smilieid');
    }
    public static function title() : ColumnField
    {
        return new ColumnField('title', 'Smilie', 'smilie', 'title');
    }
    public static function smilieText() : ColumnField
    {
        return new ColumnField('smilieText', 'Smilie', 'smilie', 'smilietext');
    }
    public static function smiliePath() : ColumnField
    {
        return new ColumnField('smiliePath', 'Smilie', 'smilie', 'smiliepath');
    }
    public static function imageCategoryId() : ColumnField
    {
        return new ColumnField('imageCategoryId', 'Smilie', 'smilie', 'imagecategoryid');
    }
    public static function displayOrder() : ColumnField
    {
        return new ColumnField('displayOrder', 'Smilie', 'smilie', 'displayorder');
    }
    public static function importSmilieId() : ColumnField
    {
        return new ColumnField('importSmilieId', 'Smilie', 'smilie', 'importsmilieid');
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
}