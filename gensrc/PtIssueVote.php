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

class PtIssueVote implements Table {

    const table = 'pt_issuevote';
   
    public static function as(string $aliasName): PtIssueVoteAlias
    {
        return new PtIssueVoteAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::issueVoteId(),
			self::userId(),
			self::ipAddress(),
			self::issueId(),
			self::dateLine(),
			self::vote()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PtIssueVoteRecord
    {
        return new PtIssueVoteRecord();
    }
    
    public static function issueVoteId() : ColumnField
    {
        return new ColumnField('pt_issuevote', 'issuevoteid');
    }
    public static function userId() : ColumnField
    {
        return new ColumnField('pt_issuevote', 'userid');
    }
    public static function ipAddress() : ColumnField
    {
        return new ColumnField('pt_issuevote', 'ipaddress');
    }
    public static function issueId() : ColumnField
    {
        return new ColumnField('pt_issuevote', 'issueid');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('pt_issuevote', 'dateline');
    }
    public static function vote() : ColumnField
    {
        return new ColumnField('pt_issuevote', 'vote');
    }

    public function getTableName(): string
    {
        return 'pt_issuevote';
    }
    
    public function __listColumns() : array
    {
        return ['issuevoteid', 'userid', 'ipaddress', 'issueid', 'dateline', 'vote'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'issuevoteid' => 'integer', 
			'userid' => 'integer', 
			'ipaddress' => 'string', 
			'issueid' => 'integer', 
			'dateline' => 'integer', 
			'vote' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'issuevoteid' => 'issueVoteId', 
			'userid' => 'userId', 
			'ipaddress' => 'ipAddress', 
			'issueid' => 'issueId', 
			'dateline' => 'dateLine', 
			'vote' => 'vote'
		];
    }

}