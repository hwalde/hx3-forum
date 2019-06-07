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

class UpgradeLogAlias extends TableAlias {
   
    public function upgradeLogId() : ColumnField
    {
        return new ColumnField('upgradeLogId', 'UpgradeLog', 'upgradelog', 'upgradelogid', $this->getAliasName());
    }
    public function script() : ColumnField
    {
        return new ColumnField('script', 'UpgradeLog', 'upgradelog', 'script', $this->getAliasName());
    }
    public function stepTitle() : ColumnField
    {
        return new ColumnField('stepTitle', 'UpgradeLog', 'upgradelog', 'steptitle', $this->getAliasName());
    }
    public function step() : ColumnField
    {
        return new ColumnField('step', 'UpgradeLog', 'upgradelog', 'step', $this->getAliasName());
    }
    public function startAt() : ColumnField
    {
        return new ColumnField('startAt', 'UpgradeLog', 'upgradelog', 'startat', $this->getAliasName());
    }
    public function perPage() : ColumnField
    {
        return new ColumnField('perPage', 'UpgradeLog', 'upgradelog', 'perpage', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'UpgradeLog', 'upgradelog', 'dateline', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'upgradelog';
    }
    
    public function __listColumns() : array
    {
        return ['upgradelogid', 'script', 'steptitle', 'step', 'startat', 'perpage', 'dateline'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['upgradelogid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'upgradelogid' => 'integer', 
			'script' => 'string', 
			'steptitle' => 'string', 
			'step' => 'integer', 
			'startat' => 'integer', 
			'perpage' => 'integer', 
			'dateline' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'upgradelogid' => 'upgradeLogId', 
			'script' => 'script', 
			'steptitle' => 'stepTitle', 
			'step' => 'step', 
			'startat' => 'startAt', 
			'perpage' => 'perPage', 
			'dateline' => 'dateLine'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->upgradeLogId(),
			$this->script(),
			$this->stepTitle(),
			$this->step(),
			$this->startAt(),
			$this->perPage(),
			$this->dateLine()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : UpgradeLogRecord
    {
        return new UpgradeLogRecord();
    }
}