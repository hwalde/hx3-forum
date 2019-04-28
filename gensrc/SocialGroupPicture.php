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

class SocialGroupPicture implements Table {

    const table = 'socialgrouppicture';
   
    public static function as(string $aliasName): SocialGroupPictureAlias
    {
        return new SocialGroupPictureAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::groupId(),
			self::pictureId(),
			self::dateLine()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : SocialGroupPictureRecord
    {
        return new SocialGroupPictureRecord();
    }
    
    public static function groupId() : ColumnField
    {
        return new ColumnField('socialgrouppicture', 'groupid');
    }
    public static function pictureId() : ColumnField
    {
        return new ColumnField('socialgrouppicture', 'pictureid');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('socialgrouppicture', 'dateline');
    }

    public function getTableName(): string
    {
        return 'socialgrouppicture';
    }
    
    public function __listColumns() : array
    {
        return ['groupid', 'pictureid', 'dateline'];
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

}