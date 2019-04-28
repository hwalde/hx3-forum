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

class UpgradeLog implements Table {

    const table = 'upgradelog';
   
    public static function as(string $aliasName): UpgradeLogAlias
    {
        return new UpgradeLogAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::upgradeLogId(),
			self::script(),
			self::stepTitle(),
			self::step(),
			self::startAt(),
			self::perPage(),
			self::dateLine()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : UpgradeLogRecord
    {
        return new UpgradeLogRecord();
    }
    
    public static function upgradeLogId() : ColumnField
    {
        return new ColumnField('upgradelog', 'upgradelogid');
    }
    public static function script() : ColumnField
    {
        return new ColumnField('upgradelog', 'script');
    }
    public static function stepTitle() : ColumnField
    {
        return new ColumnField('upgradelog', 'steptitle');
    }
    public static function step() : ColumnField
    {
        return new ColumnField('upgradelog', 'step');
    }
    public static function startAt() : ColumnField
    {
        return new ColumnField('upgradelog', 'startat');
    }
    public static function perPage() : ColumnField
    {
        return new ColumnField('upgradelog', 'perpage');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('upgradelog', 'dateline');
    }

    public function getTableName(): string
    {
        return 'upgradelog';
    }
    
    public function __listColumns() : array
    {
        return ['upgradelogid', 'script', 'steptitle', 'step', 'startat', 'perpage', 'dateline'];
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

}