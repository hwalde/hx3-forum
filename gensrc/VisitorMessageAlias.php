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

class VisitorMessageAlias extends TableAlias {
   
    public function vmId() : ColumnField
    {
        return new ColumnField('visitormessage', 'vmid', $this->getAliasName());
    }
    public function userId() : ColumnField
    {
        return new ColumnField('visitormessage', 'userid', $this->getAliasName());
    }
    public function postUserId() : ColumnField
    {
        return new ColumnField('visitormessage', 'postuserid', $this->getAliasName());
    }
    public function postUserName() : ColumnField
    {
        return new ColumnField('visitormessage', 'postusername', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('visitormessage', 'dateline', $this->getAliasName());
    }
    public function state() : ColumnField
    {
        return new ColumnField('visitormessage', 'state', $this->getAliasName());
    }
    public function title() : ColumnField
    {
        return new ColumnField('visitormessage', 'title', $this->getAliasName());
    }
    public function pageText() : ColumnField
    {
        return new ColumnField('visitormessage', 'pagetext', $this->getAliasName());
    }
    public function ipAddress() : ColumnField
    {
        return new ColumnField('visitormessage', 'ipaddress', $this->getAliasName());
    }
    public function allowSmilie() : ColumnField
    {
        return new ColumnField('visitormessage', 'allowsmilie', $this->getAliasName());
    }
    public function reportThreadId() : ColumnField
    {
        return new ColumnField('visitormessage', 'reportthreadid', $this->getAliasName());
    }
    public function messageRead() : ColumnField
    {
        return new ColumnField('visitormessage', 'messageread', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'visitormessage';
    }
    
    public function __listColumns() : array
    {
        return ['vmid', 'userid', 'postuserid', 'postusername', 'dateline', 'state', 'title', 'pagetext', 'ipaddress', 'allowsmilie', 'reportthreadid', 'messageread'];
    }
    
    public function __listNullableColumns() : array
    {
        return ['pagetext'];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'vmid' => 'integer', 
			'userid' => 'integer', 
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
			'vmid' => 'vmId', 
			'userid' => 'userId', 
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
            $this->vmId(),
			$this->userId(),
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
    public function __getRecordClass() : VisitorMessageRecord
    {
        return new VisitorMessageRecord();
    }
}