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

class PtIssueSubscribe implements Table {

    const table = 'pt_issuesubscribe';
   
    public static function as(string $aliasName): PtIssueSubscribeAlias
    {
        return new PtIssueSubscribeAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::userId(),
			self::issueId(),
			self::subscribeType()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PtIssueSubscribeRecord
    {
        return new PtIssueSubscribeRecord();
    }
    
    public static function userId() : ColumnField
    {
        return new ColumnField('userId', 'PtIssueSubscribe', 'pt_issuesubscribe', 'userid');
    }
    public static function issueId() : ColumnField
    {
        return new ColumnField('issueId', 'PtIssueSubscribe', 'pt_issuesubscribe', 'issueid');
    }
    public static function subscribeType() : ColumnField
    {
        return new ColumnField('subscribeType', 'PtIssueSubscribe', 'pt_issuesubscribe', 'subscribetype');
    }

    public function getTableName(): string
    {
        return 'pt_issuesubscribe';
    }
    
    public function __listColumns() : array
    {
        return ['userid', 'issueid', 'subscribetype'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['userid', 'issueid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'userid' => 'integer', 
			'issueid' => 'integer', 
			'subscribetype' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'userid' => 'userId', 
			'issueid' => 'issueId', 
			'subscribetype' => 'subscribeType'
		];
    }
}