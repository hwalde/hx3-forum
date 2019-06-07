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

class Avatar implements Table {

    const table = 'avatar';
   
    public static function as(string $aliasName): AvatarAlias
    {
        return new AvatarAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::avatarId(),
			self::title(),
			self::minimumPosts(),
			self::avatarPath(),
			self::imageCategoryId(),
			self::displayOrder()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : AvatarRecord
    {
        return new AvatarRecord();
    }
    
    public static function avatarId() : ColumnField
    {
        return new ColumnField('avatarId', 'Avatar', 'avatar', 'avatarid');
    }
    public static function title() : ColumnField
    {
        return new ColumnField('title', 'Avatar', 'avatar', 'title');
    }
    public static function minimumPosts() : ColumnField
    {
        return new ColumnField('minimumPosts', 'Avatar', 'avatar', 'minimumposts');
    }
    public static function avatarPath() : ColumnField
    {
        return new ColumnField('avatarPath', 'Avatar', 'avatar', 'avatarpath');
    }
    public static function imageCategoryId() : ColumnField
    {
        return new ColumnField('imageCategoryId', 'Avatar', 'avatar', 'imagecategoryid');
    }
    public static function displayOrder() : ColumnField
    {
        return new ColumnField('displayOrder', 'Avatar', 'avatar', 'displayorder');
    }

    public function getTableName(): string
    {
        return 'avatar';
    }
    
    public function __listColumns() : array
    {
        return ['avatarid', 'title', 'minimumposts', 'avatarpath', 'imagecategoryid', 'displayorder'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['avatarid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'avatarid' => 'integer', 
			'title' => 'string', 
			'minimumposts' => 'integer', 
			'avatarpath' => 'string', 
			'imagecategoryid' => 'integer', 
			'displayorder' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'avatarid' => 'avatarId', 
			'title' => 'title', 
			'minimumposts' => 'minimumPosts', 
			'avatarpath' => 'avatarPath', 
			'imagecategoryid' => 'imageCategoryId', 
			'displayorder' => 'displayOrder'
		];
    }
}