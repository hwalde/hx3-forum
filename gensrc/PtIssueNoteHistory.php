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

class PtIssueNoteHistory implements Table {

    const table = 'pt_issuenotehistory';
   
    public static function as(string $aliasName): PtIssueNoteHistoryAlias
    {
        return new PtIssueNoteHistoryAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::issueNoteHistoryId(),
			self::issueNoteId(),
			self::reason(),
			self::pageText(),
			self::visible(),
			self::dateLine(),
			self::userId()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PtIssueNoteHistoryRecord
    {
        return new PtIssueNoteHistoryRecord();
    }
    
    public static function issueNoteHistoryId() : ColumnField
    {
        return new ColumnField('pt_issuenotehistory', 'issuenotehistoryid');
    }
    public static function issueNoteId() : ColumnField
    {
        return new ColumnField('pt_issuenotehistory', 'issuenoteid');
    }
    public static function reason() : ColumnField
    {
        return new ColumnField('pt_issuenotehistory', 'reason');
    }
    public static function pageText() : ColumnField
    {
        return new ColumnField('pt_issuenotehistory', 'pagetext');
    }
    public static function visible() : ColumnField
    {
        return new ColumnField('pt_issuenotehistory', 'visible');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('pt_issuenotehistory', 'dateline');
    }
    public static function userId() : ColumnField
    {
        return new ColumnField('pt_issuenotehistory', 'userid');
    }

    public function getTableName(): string
    {
        return 'pt_issuenotehistory';
    }
    
    public function __listColumns() : array
    {
        return ['issuenotehistoryid', 'issuenoteid', 'reason', 'pagetext', 'visible', 'dateline', 'userid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'issuenotehistoryid' => 'integer', 
			'issuenoteid' => 'integer', 
			'reason' => 'string', 
			'pagetext' => 'string', 
			'visible' => 'string', 
			'dateline' => 'integer', 
			'userid' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'issuenotehistoryid' => 'issueNoteHistoryId', 
			'issuenoteid' => 'issueNoteId', 
			'reason' => 'reason', 
			'pagetext' => 'pageText', 
			'visible' => 'visible', 
			'dateline' => 'dateLine', 
			'userid' => 'userId'
		];
    }

}