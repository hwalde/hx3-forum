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

class AvatarAlias extends TableAlias {
   
    public function avatarId() : ColumnField
    {
        return new ColumnField('avatarId', 'Avatar', 'avatar', 'avatarid', $this->getAliasName());
    }
    public function title() : ColumnField
    {
        return new ColumnField('title', 'Avatar', 'avatar', 'title', $this->getAliasName());
    }
    public function minimumPosts() : ColumnField
    {
        return new ColumnField('minimumPosts', 'Avatar', 'avatar', 'minimumposts', $this->getAliasName());
    }
    public function avatarPath() : ColumnField
    {
        return new ColumnField('avatarPath', 'Avatar', 'avatar', 'avatarpath', $this->getAliasName());
    }
    public function imageCategoryId() : ColumnField
    {
        return new ColumnField('imageCategoryId', 'Avatar', 'avatar', 'imagecategoryid', $this->getAliasName());
    }
    public function displayOrder() : ColumnField
    {
        return new ColumnField('displayOrder', 'Avatar', 'avatar', 'displayorder', $this->getAliasName());
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->avatarId(),
			$this->title(),
			$this->minimumPosts(),
			$this->avatarPath(),
			$this->imageCategoryId(),
			$this->displayOrder()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : AvatarRecord
    {
        return new AvatarRecord();
    }
}