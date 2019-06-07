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

class PtIssueDeletionLog implements Table {

    const table = 'pt_issuedeletionlog';
   
    public static function as(string $aliasName): PtIssueDeletionLogAlias
    {
        return new PtIssueDeletionLogAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::primaryId(),
			self::type(),
			self::userId(),
			self::userName(),
			self::reason(),
			self::dateLine()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PtIssueDeletionLogRecord
    {
        return new PtIssueDeletionLogRecord();
    }
    
    public static function primaryId() : ColumnField
    {
        return new ColumnField('primaryId', 'PtIssueDeletionLog', 'pt_issuedeletionlog', 'primaryid');
    }
    public static function type() : ColumnField
    {
        return new ColumnField('type', 'PtIssueDeletionLog', 'pt_issuedeletionlog', 'type');
    }
    public static function userId() : ColumnField
    {
        return new ColumnField('userId', 'PtIssueDeletionLog', 'pt_issuedeletionlog', 'userid');
    }
    public static function userName() : ColumnField
    {
        return new ColumnField('userName', 'PtIssueDeletionLog', 'pt_issuedeletionlog', 'username');
    }
    public static function reason() : ColumnField
    {
        return new ColumnField('reason', 'PtIssueDeletionLog', 'pt_issuedeletionlog', 'reason');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'PtIssueDeletionLog', 'pt_issuedeletionlog', 'dateline');
    }

    public function getTableName(): string
    {
        return 'pt_issuedeletionlog';
    }
    
    public function __listColumns() : array
    {
        return ['primaryid', 'type', 'userid', 'username', 'reason', 'dateline'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['primaryid', 'type'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'primaryid' => 'integer', 
			'type' => 'string', 
			'userid' => 'integer', 
			'username' => 'string', 
			'reason' => 'string', 
			'dateline' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'primaryid' => 'primaryId', 
			'type' => 'type', 
			'userid' => 'userId', 
			'username' => 'userName', 
			'reason' => 'reason', 
			'dateline' => 'dateLine'
		];
    }
}