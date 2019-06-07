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

class SocialGroupPictureAlias extends TableAlias {
   
    public function groupId() : ColumnField
    {
        return new ColumnField('groupId', 'SocialGroupPicture', 'socialgrouppicture', 'groupid', $this->getAliasName());
    }
    public function pictureId() : ColumnField
    {
        return new ColumnField('pictureId', 'SocialGroupPicture', 'socialgrouppicture', 'pictureid', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'SocialGroupPicture', 'socialgrouppicture', 'dateline', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'socialgrouppicture';
    }
    
    public function __listColumns() : array
    {
        return ['groupid', 'pictureid', 'dateline'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['groupid', 'pictureid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'groupid' => 'integer', 
			'pictureid' => 'integer', 
			'dateline' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'groupid' => 'groupId', 
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
            $this->groupId(),
			$this->pictureId(),
			$this->dateLine()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : SocialGroupPictureRecord
    {
        return new SocialGroupPictureRecord();
    }
}