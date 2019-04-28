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

class PictureCommentHash implements Table {

    const table = 'picturecomment_hash';
   
    public static function as(string $aliasName): PictureCommentHashAlias
    {
        return new PictureCommentHashAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::postUserId(),
			self::pictureId(),
			self::dupeHash(),
			self::dateLine()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PictureCommentHashRecord
    {
        return new PictureCommentHashRecord();
    }
    
    public static function postUserId() : ColumnField
    {
        return new ColumnField('picturecomment_hash', 'postuserid');
    }
    public static function pictureId() : ColumnField
    {
        return new ColumnField('picturecomment_hash', 'pictureid');
    }
    public static function dupeHash() : ColumnField
    {
        return new ColumnField('picturecomment_hash', 'dupehash');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('picturecomment_hash', 'dateline');
    }

    public function getTableName(): string
    {
        return 'picturecomment_hash';
    }
    
    public function __listColumns() : array
    {
        return ['postuserid', 'pictureid', 'dupehash', 'dateline'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'postuserid' => 'integer', 
			'pictureid' => 'integer', 
			'dupehash' => 'string', 
			'dateline' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'postuserid' => 'postUserId', 
			'pictureid' => 'pictureId', 
			'dupehash' => 'dupeHash', 
			'dateline' => 'dateLine'
		];
    }

}