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

class ReputationLevelAlias extends TableAlias {
   
    public function reputationLevelId() : ColumnField
    {
        return new ColumnField('reputationLevelId', 'ReputationLevel', 'reputationlevel', 'reputationlevelid', $this->getAliasName());
    }
    public function minimumReputation() : ColumnField
    {
        return new ColumnField('minimumReputation', 'ReputationLevel', 'reputationlevel', 'minimumreputation', $this->getAliasName());
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->reputationLevelId(),
			$this->minimumReputation()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : ReputationLevelRecord
    {
        return new ReputationLevelRecord();
    }
}