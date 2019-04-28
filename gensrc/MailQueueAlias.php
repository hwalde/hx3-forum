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

class MailQueueAlias extends TableAlias {
   
    public function mailQueueId() : ColumnField
    {
        return new ColumnField('mailqueue', 'mailqueueid', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('mailqueue', 'dateline', $this->getAliasName());
    }
    public function toEmail() : ColumnField
    {
        return new ColumnField('mailqueue', 'toemail', $this->getAliasName());
    }
    public function subject() : ColumnField
    {
        return new ColumnField('mailqueue', 'subject', $this->getAliasName());
    }
    public function message() : ColumnField
    {
        return new ColumnField('mailqueue', 'message', $this->getAliasName());
    }
    public function header() : ColumnField
    {
        return new ColumnField('mailqueue', 'header', $this->getAliasName());
    }
    public function fromEmail() : ColumnField
    {
        return new ColumnField('mailqueue', 'fromemail', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'mailqueue';
    }
    
    public function __listColumns() : array
    {
        return ['mailqueueid', 'dateline', 'toemail', 'subject', 'message', 'header', 'fromemail'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'mailqueueid' => 'integer', 
			'dateline' => 'integer', 
			'toemail' => 'string', 
			'subject' => 'string', 
			'message' => 'string', 
			'header' => 'string', 
			'fromemail' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'mailqueueid' => 'mailQueueId', 
			'dateline' => 'dateLine', 
			'toemail' => 'toEmail', 
			'subject' => 'subject', 
			'message' => 'message', 
			'header' => 'header', 
			'fromemail' => 'fromEmail'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->mailQueueId(),
			$this->dateLine(),
			$this->toEmail(),
			$this->subject(),
			$this->message(),
			$this->header(),
			$this->fromEmail()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : MailQueueRecord
    {
        return new MailQueueRecord();
    }
}