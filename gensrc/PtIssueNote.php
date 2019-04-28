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

class PtIssueNote implements Table {

    const table = 'pt_issuenote';
   
    public static function as(string $aliasName): PtIssueNoteAlias
    {
        return new PtIssueNoteAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::issueNoteId(),
			self::issueId(),
			self::dateLine(),
			self::pageText(),
			self::userId(),
			self::userName(),
			self::type(),
			self::isPending(),
			self::visible(),
			self::lastEditDate(),
			self::isFirstNote(),
			self::ipAddress()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PtIssueNoteRecord
    {
        return new PtIssueNoteRecord();
    }
    
    public static function issueNoteId() : ColumnField
    {
        return new ColumnField('pt_issuenote', 'issuenoteid');
    }
    public static function issueId() : ColumnField
    {
        return new ColumnField('pt_issuenote', 'issueid');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('pt_issuenote', 'dateline');
    }
    public static function pageText() : ColumnField
    {
        return new ColumnField('pt_issuenote', 'pagetext');
    }
    public static function userId() : ColumnField
    {
        return new ColumnField('pt_issuenote', 'userid');
    }
    public static function userName() : ColumnField
    {
        return new ColumnField('pt_issuenote', 'username');
    }
    public static function type() : ColumnField
    {
        return new ColumnField('pt_issuenote', 'type');
    }
    public static function isPending() : ColumnField
    {
        return new ColumnField('pt_issuenote', 'ispending');
    }
    public static function visible() : ColumnField
    {
        return new ColumnField('pt_issuenote', 'visible');
    }
    public static function lastEditDate() : ColumnField
    {
        return new ColumnField('pt_issuenote', 'lasteditdate');
    }
    public static function isFirstNote() : ColumnField
    {
        return new ColumnField('pt_issuenote', 'isfirstnote');
    }
    public static function ipAddress() : ColumnField
    {
        return new ColumnField('pt_issuenote', 'ipaddress');
    }

    public function getTableName(): string
    {
        return 'pt_issuenote';
    }
    
    public function __listColumns() : array
    {
        return ['issuenoteid', 'issueid', 'dateline', 'pagetext', 'userid', 'username', 'type', 'ispending', 'visible', 'lasteditdate', 'isfirstnote', 'ipaddress'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'issuenoteid' => 'integer', 
			'issueid' => 'integer', 
			'dateline' => 'integer', 
			'pagetext' => 'string', 
			'userid' => 'integer', 
			'username' => 'string', 
			'type' => 'string', 
			'ispending' => 'integer', 
			'visible' => 'string', 
			'lasteditdate' => 'integer', 
			'isfirstnote' => 'integer', 
			'ipaddress' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'issuenoteid' => 'issueNoteId', 
			'issueid' => 'issueId', 
			'dateline' => 'dateLine', 
			'pagetext' => 'pageText', 
			'userid' => 'userId', 
			'username' => 'userName', 
			'type' => 'type', 
			'ispending' => 'isPending', 
			'visible' => 'visible', 
			'lasteditdate' => 'lastEditDate', 
			'isfirstnote' => 'isFirstNote', 
			'ipaddress' => 'ipAddress'
		];
    }

}