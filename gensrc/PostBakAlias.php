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

class PostBakAlias extends TableAlias {
   
    public function postId() : ColumnField
    {
        return new ColumnField('postId', 'PostBak', 'post_bak', 'postid', $this->getAliasName());
    }
    public function threadId() : ColumnField
    {
        return new ColumnField('threadId', 'PostBak', 'post_bak', 'threadid', $this->getAliasName());
    }
    public function parentId() : ColumnField
    {
        return new ColumnField('parentId', 'PostBak', 'post_bak', 'parentid', $this->getAliasName());
    }
    public function userName() : ColumnField
    {
        return new ColumnField('userName', 'PostBak', 'post_bak', 'username', $this->getAliasName());
    }
    public function userId() : ColumnField
    {
        return new ColumnField('userId', 'PostBak', 'post_bak', 'userid', $this->getAliasName());
    }
    public function title() : ColumnField
    {
        return new ColumnField('title', 'PostBak', 'post_bak', 'title', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'PostBak', 'post_bak', 'dateline', $this->getAliasName());
    }
    public function pageText() : ColumnField
    {
        return new ColumnField('pageText', 'PostBak', 'post_bak', 'pagetext', $this->getAliasName());
    }
    public function allowSmilie() : ColumnField
    {
        return new ColumnField('allowSmilie', 'PostBak', 'post_bak', 'allowsmilie', $this->getAliasName());
    }
    public function showSignature() : ColumnField
    {
        return new ColumnField('showSignature', 'PostBak', 'post_bak', 'showsignature', $this->getAliasName());
    }
    public function ipAddress() : ColumnField
    {
        return new ColumnField('ipAddress', 'PostBak', 'post_bak', 'ipaddress', $this->getAliasName());
    }
    public function iconId() : ColumnField
    {
        return new ColumnField('iconId', 'PostBak', 'post_bak', 'iconid', $this->getAliasName());
    }
    public function visible() : ColumnField
    {
        return new ColumnField('visible', 'PostBak', 'post_bak', 'visible', $this->getAliasName());
    }
    public function attach() : ColumnField
    {
        return new ColumnField('attach', 'PostBak', 'post_bak', 'attach', $this->getAliasName());
    }
    public function importThreadId() : ColumnField
    {
        return new ColumnField('importThreadId', 'PostBak', 'post_bak', 'importthreadid', $this->getAliasName());
    }
    public function importpostId() : ColumnField
    {
        return new ColumnField('importpostId', 'PostBak', 'post_bak', 'importpostid', $this->getAliasName());
    }
    public function infraction() : ColumnField
    {
        return new ColumnField('infraction', 'PostBak', 'post_bak', 'infraction', $this->getAliasName());
    }
    public function reportThreadId() : ColumnField
    {
        return new ColumnField('reportThreadId', 'PostBak', 'post_bak', 'reportthreadid', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'post_bak';
    }
    
    public function __listColumns() : array
    {
        return ['postid', 'threadid', 'parentid', 'username', 'userid', 'title', 'dateline', 'pagetext', 'allowsmilie', 'showsignature', 'ipaddress', 'iconid', 'visible', 'attach', 'importthreadid', 'importpostid', 'infraction', 'reportthreadid'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['postid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'postid' => 'integer', 
			'threadid' => 'integer', 
			'parentid' => 'integer', 
			'username' => 'string', 
			'userid' => 'integer', 
			'title' => 'string', 
			'dateline' => 'integer', 
			'pagetext' => 'string', 
			'allowsmilie' => 'integer', 
			'showsignature' => 'integer', 
			'ipaddress' => 'string', 
			'iconid' => 'integer', 
			'visible' => 'integer', 
			'attach' => 'integer', 
			'importthreadid' => 'integer', 
			'importpostid' => 'integer', 
			'infraction' => 'integer', 
			'reportthreadid' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'postid' => 'postId', 
			'threadid' => 'threadId', 
			'parentid' => 'parentId', 
			'username' => 'userName', 
			'userid' => 'userId', 
			'title' => 'title', 
			'dateline' => 'dateLine', 
			'pagetext' => 'pageText', 
			'allowsmilie' => 'allowSmilie', 
			'showsignature' => 'showSignature', 
			'ipaddress' => 'ipAddress', 
			'iconid' => 'iconId', 
			'visible' => 'visible', 
			'attach' => 'attach', 
			'importthreadid' => 'importThreadId', 
			'importpostid' => 'importpostId', 
			'infraction' => 'infraction', 
			'reportthreadid' => 'reportThreadId'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->postId(),
			$this->threadId(),
			$this->parentId(),
			$this->userName(),
			$this->userId(),
			$this->title(),
			$this->dateLine(),
			$this->pageText(),
			$this->allowSmilie(),
			$this->showSignature(),
			$this->ipAddress(),
			$this->iconId(),
			$this->visible(),
			$this->attach(),
			$this->importThreadId(),
			$this->importpostId(),
			$this->infraction(),
			$this->reportThreadId()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PostBakRecord
    {
        return new PostBakRecord();
    }
}