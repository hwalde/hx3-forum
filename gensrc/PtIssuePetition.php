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

class PtIssuePetition implements Table {

    const table = 'pt_issuepetition';
   
    public static function as(string $aliasName): PtIssuePetitionAlias
    {
        return new PtIssuePetitionAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::issueNoteId(),
			self::petitionStatusId(),
			self::resolution(),
			self::resolveUserId(),
			self::resolveDate()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PtIssuePetitionRecord
    {
        return new PtIssuePetitionRecord();
    }
    
    public static function issueNoteId() : ColumnField
    {
        return new ColumnField('issueNoteId', 'PtIssuePetition', 'pt_issuepetition', 'issuenoteid');
    }
    public static function petitionStatusId() : ColumnField
    {
        return new ColumnField('petitionStatusId', 'PtIssuePetition', 'pt_issuepetition', 'petitionstatusid');
    }
    public static function resolution() : ColumnField
    {
        return new ColumnField('resolution', 'PtIssuePetition', 'pt_issuepetition', 'resolution');
    }
    public static function resolveUserId() : ColumnField
    {
        return new ColumnField('resolveUserId', 'PtIssuePetition', 'pt_issuepetition', 'resolveuserid');
    }
    public static function resolveDate() : ColumnField
    {
        return new ColumnField('resolveDate', 'PtIssuePetition', 'pt_issuepetition', 'resolvedate');
    }

    public function getTableName(): string
    {
        return 'pt_issuepetition';
    }
    
    public function __listColumns() : array
    {
        return ['issuenoteid', 'petitionstatusid', 'resolution', 'resolveuserid', 'resolvedate'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['issuenoteid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'issuenoteid' => 'integer', 
			'petitionstatusid' => 'integer', 
			'resolution' => 'string', 
			'resolveuserid' => 'integer', 
			'resolvedate' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'issuenoteid' => 'issueNoteId', 
			'petitionstatusid' => 'petitionStatusId', 
			'resolution' => 'resolution', 
			'resolveuserid' => 'resolveUserId', 
			'resolvedate' => 'resolveDate'
		];
    }
}