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

class PostEditHistoryAlias extends TableAlias {
   
    public function postEditHistoryid() : ColumnField
    {
        return new ColumnField('postedithistory', 'postedithistoryid', $this->getAliasName());
    }
    public function postId() : ColumnField
    {
        return new ColumnField('postedithistory', 'postid', $this->getAliasName());
    }
    public function userId() : ColumnField
    {
        return new ColumnField('postedithistory', 'userid', $this->getAliasName());
    }
    public function userName() : ColumnField
    {
        return new ColumnField('postedithistory', 'username', $this->getAliasName());
    }
    public function title() : ColumnField
    {
        return new ColumnField('postedithistory', 'title', $this->getAliasName());
    }
    public function iconId() : ColumnField
    {
        return new ColumnField('postedithistory', 'iconid', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('postedithistory', 'dateline', $this->getAliasName());
    }
    public function reason() : ColumnField
    {
        return new ColumnField('postedithistory', 'reason', $this->getAliasName());
    }
    public function original() : ColumnField
    {
        return new ColumnField('postedithistory', 'original', $this->getAliasName());
    }
    public function pageText() : ColumnField
    {
        return new ColumnField('postedithistory', 'pagetext', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'postedithistory';
    }
    
    public function __listColumns() : array
    {
        return ['postedithistoryid', 'postid', 'userid', 'username', 'title', 'iconid', 'dateline', 'reason', 'original', 'pagetext'];
    }
    
    public function __listNullableColumns() : array
    {
        return ['pagetext'];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'postedithistoryid' => 'integer', 
			'postid' => 'integer', 
			'userid' => 'integer', 
			'username' => 'string', 
			'title' => 'string', 
			'iconid' => 'integer', 
			'dateline' => 'integer', 
			'reason' => 'string', 
			'original' => 'integer', 
			'pagetext' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'postedithistoryid' => 'postEditHistoryid', 
			'postid' => 'postId', 
			'userid' => 'userId', 
			'username' => 'userName', 
			'title' => 'title', 
			'iconid' => 'iconId', 
			'dateline' => 'dateLine', 
			'reason' => 'reason', 
			'original' => 'original', 
			'pagetext' => 'pageText'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->postEditHistoryid(),
			$this->postId(),
			$this->userId(),
			$this->userName(),
			$this->title(),
			$this->iconId(),
			$this->dateLine(),
			$this->reason(),
			$this->original(),
			$this->pageText()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PostEditHistoryRecord
    {
        return new PostEditHistoryRecord();
    }
}