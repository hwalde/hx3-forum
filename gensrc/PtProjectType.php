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

class PtProjectType implements Table {

    const table = 'pt_projecttype';
   
    public static function as(string $aliasName): PtProjectTypeAlias
    {
        return new PtProjectTypeAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::projectId(),
			self::issueTypeId(),
			self::startStatusId(),
			self::issueCount(),
			self::lastActivity()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PtProjectTypeRecord
    {
        return new PtProjectTypeRecord();
    }
    
    public static function projectId() : ColumnField
    {
        return new ColumnField('pt_projecttype', 'projectid');
    }
    public static function issueTypeId() : ColumnField
    {
        return new ColumnField('pt_projecttype', 'issuetypeid');
    }
    public static function startStatusId() : ColumnField
    {
        return new ColumnField('pt_projecttype', 'startstatusid');
    }
    public static function issueCount() : ColumnField
    {
        return new ColumnField('pt_projecttype', 'issuecount');
    }
    public static function lastActivity() : ColumnField
    {
        return new ColumnField('pt_projecttype', 'lastactivity');
    }

    public function getTableName(): string
    {
        return 'pt_projecttype';
    }
    
    public function __listColumns() : array
    {
        return ['projectid', 'issuetypeid', 'startstatusid', 'issuecount', 'lastactivity'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'projectid' => 'integer', 
			'issuetypeid' => 'string', 
			'startstatusid' => 'integer', 
			'issuecount' => 'integer', 
			'lastactivity' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'projectid' => 'projectId', 
			'issuetypeid' => 'issueTypeId', 
			'startstatusid' => 'startStatusId', 
			'issuecount' => 'issueCount', 
			'lastactivity' => 'lastActivity'
		];
    }

}