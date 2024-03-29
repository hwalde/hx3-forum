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

class PmTextAlias extends TableAlias {
   
    public function pmTextId() : ColumnField
    {
        return new ColumnField('pmTextId', 'PmText', 'pmtext', 'pmtextid', $this->getAliasName());
    }
    public function fromUserId() : ColumnField
    {
        return new ColumnField('fromUserId', 'PmText', 'pmtext', 'fromuserid', $this->getAliasName());
    }
    public function fromUserName() : ColumnField
    {
        return new ColumnField('fromUserName', 'PmText', 'pmtext', 'fromusername', $this->getAliasName());
    }
    public function title() : ColumnField
    {
        return new ColumnField('title', 'PmText', 'pmtext', 'title', $this->getAliasName());
    }
    public function message() : ColumnField
    {
        return new ColumnField('message', 'PmText', 'pmtext', 'message', $this->getAliasName());
    }
    public function toUserArray() : ColumnField
    {
        return new ColumnField('toUserArray', 'PmText', 'pmtext', 'touserarray', $this->getAliasName());
    }
    public function iconId() : ColumnField
    {
        return new ColumnField('iconId', 'PmText', 'pmtext', 'iconid', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'PmText', 'pmtext', 'dateline', $this->getAliasName());
    }
    public function showSignature() : ColumnField
    {
        return new ColumnField('showSignature', 'PmText', 'pmtext', 'showsignature', $this->getAliasName());
    }
    public function allowSmilie() : ColumnField
    {
        return new ColumnField('allowSmilie', 'PmText', 'pmtext', 'allowsmilie', $this->getAliasName());
    }
    public function importPmId() : ColumnField
    {
        return new ColumnField('importPmId', 'PmText', 'pmtext', 'importpmid', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'pmtext';
    }
    
    public function __listColumns() : array
    {
        return ['pmtextid', 'fromuserid', 'fromusername', 'title', 'message', 'touserarray', 'iconid', 'dateline', 'showsignature', 'allowsmilie', 'importpmid'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['pmtextid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'pmtextid' => 'integer', 
			'fromuserid' => 'integer', 
			'fromusername' => 'string', 
			'title' => 'string', 
			'message' => 'string', 
			'touserarray' => 'string', 
			'iconid' => 'integer', 
			'dateline' => 'integer', 
			'showsignature' => 'integer', 
			'allowsmilie' => 'integer', 
			'importpmid' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'pmtextid' => 'pmTextId', 
			'fromuserid' => 'fromUserId', 
			'fromusername' => 'fromUserName', 
			'title' => 'title', 
			'message' => 'message', 
			'touserarray' => 'toUserArray', 
			'iconid' => 'iconId', 
			'dateline' => 'dateLine', 
			'showsignature' => 'showSignature', 
			'allowsmilie' => 'allowSmilie', 
			'importpmid' => 'importPmId'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->pmTextId(),
			$this->fromUserId(),
			$this->fromUserName(),
			$this->title(),
			$this->message(),
			$this->toUserArray(),
			$this->iconId(),
			$this->dateLine(),
			$this->showSignature(),
			$this->allowSmilie(),
			$this->importPmId()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PmTextRecord
    {
        return new PmTextRecord();
    }
}