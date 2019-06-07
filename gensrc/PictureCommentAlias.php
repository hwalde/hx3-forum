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

class PictureCommentAlias extends TableAlias {
   
    public function commentId() : ColumnField
    {
        return new ColumnField('commentId', 'PictureComment', 'picturecomment', 'commentid', $this->getAliasName());
    }
    public function pictureId() : ColumnField
    {
        return new ColumnField('pictureId', 'PictureComment', 'picturecomment', 'pictureid', $this->getAliasName());
    }
    public function postUserId() : ColumnField
    {
        return new ColumnField('postUserId', 'PictureComment', 'picturecomment', 'postuserid', $this->getAliasName());
    }
    public function postUserName() : ColumnField
    {
        return new ColumnField('postUserName', 'PictureComment', 'picturecomment', 'postusername', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'PictureComment', 'picturecomment', 'dateline', $this->getAliasName());
    }
    public function state() : ColumnField
    {
        return new ColumnField('state', 'PictureComment', 'picturecomment', 'state', $this->getAliasName());
    }
    public function title() : ColumnField
    {
        return new ColumnField('title', 'PictureComment', 'picturecomment', 'title', $this->getAliasName());
    }
    public function pageText() : ColumnField
    {
        return new ColumnField('pageText', 'PictureComment', 'picturecomment', 'pagetext', $this->getAliasName());
    }
    public function ipAddress() : ColumnField
    {
        return new ColumnField('ipAddress', 'PictureComment', 'picturecomment', 'ipaddress', $this->getAliasName());
    }
    public function allowSmilie() : ColumnField
    {
        return new ColumnField('allowSmilie', 'PictureComment', 'picturecomment', 'allowsmilie', $this->getAliasName());
    }
    public function reportThreadId() : ColumnField
    {
        return new ColumnField('reportThreadId', 'PictureComment', 'picturecomment', 'reportthreadid', $this->getAliasName());
    }
    public function messageRead() : ColumnField
    {
        return new ColumnField('messageRead', 'PictureComment', 'picturecomment', 'messageread', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'picturecomment';
    }
    
    public function __listColumns() : array
    {
        return ['commentid', 'pictureid', 'postuserid', 'postusername', 'dateline', 'state', 'title', 'pagetext', 'ipaddress', 'allowsmilie', 'reportthreadid', 'messageread'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['commentid'];
    }
    
    public function __listNullableColumns() : array
    {
        return ['pagetext'];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'commentid' => 'integer', 
			'pictureid' => 'integer', 
			'postuserid' => 'integer', 
			'postusername' => 'string', 
			'dateline' => 'integer', 
			'state' => 'string', 
			'title' => 'string', 
			'pagetext' => 'string', 
			'ipaddress' => 'integer', 
			'allowsmilie' => 'integer', 
			'reportthreadid' => 'integer', 
			'messageread' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'commentid' => 'commentId', 
			'pictureid' => 'pictureId', 
			'postuserid' => 'postUserId', 
			'postusername' => 'postUserName', 
			'dateline' => 'dateLine', 
			'state' => 'state', 
			'title' => 'title', 
			'pagetext' => 'pageText', 
			'ipaddress' => 'ipAddress', 
			'allowsmilie' => 'allowSmilie', 
			'reportthreadid' => 'reportThreadId', 
			'messageread' => 'messageRead'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->commentId(),
			$this->pictureId(),
			$this->postUserId(),
			$this->postUserName(),
			$this->dateLine(),
			$this->state(),
			$this->title(),
			$this->pageText(),
			$this->ipAddress(),
			$this->allowSmilie(),
			$this->reportThreadId(),
			$this->messageRead()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PictureCommentRecord
    {
        return new PictureCommentRecord();
    }
}