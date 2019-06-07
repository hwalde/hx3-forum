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

class PictureCommentHashAlias extends TableAlias {
   
    public function postUserId() : ColumnField
    {
        return new ColumnField('postUserId', 'PictureCommentHash', 'picturecomment_hash', 'postuserid', $this->getAliasName());
    }
    public function pictureId() : ColumnField
    {
        return new ColumnField('pictureId', 'PictureCommentHash', 'picturecomment_hash', 'pictureid', $this->getAliasName());
    }
    public function dupeHash() : ColumnField
    {
        return new ColumnField('dupeHash', 'PictureCommentHash', 'picturecomment_hash', 'dupehash', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'PictureCommentHash', 'picturecomment_hash', 'dateline', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'picturecomment_hash';
    }
    
    public function __listColumns() : array
    {
        return ['postuserid', 'pictureid', 'dupehash', 'dateline'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return [];
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->postUserId(),
			$this->pictureId(),
			$this->dupeHash(),
			$this->dateLine()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PictureCommentHashRecord
    {
        return new PictureCommentHashRecord();
    }
}