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

class MailQueue implements Table {

    const table = 'mailqueue';
   
    public static function as(string $aliasName): MailQueueAlias
    {
        return new MailQueueAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::mailQueueId(),
			self::dateLine(),
			self::toEmail(),
			self::subject(),
			self::message(),
			self::header(),
			self::fromEmail()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : MailQueueRecord
    {
        return new MailQueueRecord();
    }
    
    public static function mailQueueId() : ColumnField
    {
        return new ColumnField('mailQueueId', 'MailQueue', 'mailqueue', 'mailqueueid');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'MailQueue', 'mailqueue', 'dateline');
    }
    public static function toEmail() : ColumnField
    {
        return new ColumnField('toEmail', 'MailQueue', 'mailqueue', 'toemail');
    }
    public static function subject() : ColumnField
    {
        return new ColumnField('subject', 'MailQueue', 'mailqueue', 'subject');
    }
    public static function message() : ColumnField
    {
        return new ColumnField('message', 'MailQueue', 'mailqueue', 'message');
    }
    public static function header() : ColumnField
    {
        return new ColumnField('header', 'MailQueue', 'mailqueue', 'header');
    }
    public static function fromEmail() : ColumnField
    {
        return new ColumnField('fromEmail', 'MailQueue', 'mailqueue', 'fromemail');
    }

    public function getTableName(): string
    {
        return 'mailqueue';
    }
    
    public function __listColumns() : array
    {
        return ['mailqueueid', 'dateline', 'toemail', 'subject', 'message', 'header', 'fromemail'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['mailqueueid'];
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
}