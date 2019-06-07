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

class ReputationLevel implements Table {

    const table = 'reputationlevel';
   
    public static function as(string $aliasName): ReputationLevelAlias
    {
        return new ReputationLevelAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::reputationLevelId(),
			self::minimumReputation()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : ReputationLevelRecord
    {
        return new ReputationLevelRecord();
    }
    
    public static function reputationLevelId() : ColumnField
    {
        return new ColumnField('reputationLevelId', 'ReputationLevel', 'reputationlevel', 'reputationlevelid');
    }
    public static function minimumReputation() : ColumnField
    {
        return new ColumnField('minimumReputation', 'ReputationLevel', 'reputationlevel', 'minimumreputation');
    }

    public function getTableName(): string
    {
        return 'reputationlevel';
    }
    
    public function __listColumns() : array
    {
        return ['reputationlevelid', 'minimumreputation'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['reputationlevelid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'reputationlevelid' => 'integer', 
			'minimumreputation' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'reputationlevelid' => 'reputationLevelId', 
			'minimumreputation' => 'minimumReputation'
		];
    }
}