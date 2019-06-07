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

class SubscribeThreadAlias extends TableAlias {
   
    public function subscribeThreadId() : ColumnField
    {
        return new ColumnField('subscribeThreadId', 'SubscribeThread', 'subscribethread', 'subscribethreadid', $this->getAliasName());
    }
    public function userId() : ColumnField
    {
        return new ColumnField('userId', 'SubscribeThread', 'subscribethread', 'userid', $this->getAliasName());
    }
    public function threadId() : ColumnField
    {
        return new ColumnField('threadId', 'SubscribeThread', 'subscribethread', 'threadid', $this->getAliasName());
    }
    public function emailUpdate() : ColumnField
    {
        return new ColumnField('emailUpdate', 'SubscribeThread', 'subscribethread', 'emailupdate', $this->getAliasName());
    }
    public function folderId() : ColumnField
    {
        return new ColumnField('folderId', 'SubscribeThread', 'subscribethread', 'folderid', $this->getAliasName());
    }
    public function canView() : ColumnField
    {
        return new ColumnField('canView', 'SubscribeThread', 'subscribethread', 'canview', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'subscribethread';
    }
    
    public function __listColumns() : array
    {
        return ['subscribethreadid', 'userid', 'threadid', 'emailupdate', 'folderid', 'canview'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['subscribethreadid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'subscribethreadid' => 'integer', 
			'userid' => 'integer', 
			'threadid' => 'integer', 
			'emailupdate' => 'integer', 
			'folderid' => 'integer', 
			'canview' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'subscribethreadid' => 'subscribeThreadId', 
			'userid' => 'userId', 
			'threadid' => 'threadId', 
			'emailupdate' => 'emailUpdate', 
			'folderid' => 'folderId', 
			'canview' => 'canView'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->subscribeThreadId(),
			$this->userId(),
			$this->threadId(),
			$this->emailUpdate(),
			$this->folderId(),
			$this->canView()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : SubscribeThreadRecord
    {
        return new SubscribeThreadRecord();
    }
}