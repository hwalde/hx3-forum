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

class InfractionBanAlias extends TableAlias {
   
    public function infractionBanId() : ColumnField
    {
        return new ColumnField('infractionban', 'infractionbanid', $this->getAliasName());
    }
    public function userGroupId() : ColumnField
    {
        return new ColumnField('infractionban', 'usergroupid', $this->getAliasName());
    }
    public function banuserGroupId() : ColumnField
    {
        return new ColumnField('infractionban', 'banusergroupid', $this->getAliasName());
    }
    public function amount() : ColumnField
    {
        return new ColumnField('infractionban', 'amount', $this->getAliasName());
    }
    public function period() : ColumnField
    {
        return new ColumnField('infractionban', 'period', $this->getAliasName());
    }
    public function method() : ColumnField
    {
        return new ColumnField('infractionban', 'method', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'infractionban';
    }
    
    public function __listColumns() : array
    {
        return ['infractionbanid', 'usergroupid', 'banusergroupid', 'amount', 'period', 'method'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'infractionbanid' => 'integer', 
			'usergroupid' => 'integer', 
			'banusergroupid' => 'integer', 
			'amount' => 'integer', 
			'period' => 'string', 
			'method' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'infractionbanid' => 'infractionBanId', 
			'usergroupid' => 'userGroupId', 
			'banusergroupid' => 'banuserGroupId', 
			'amount' => 'amount', 
			'period' => 'period', 
			'method' => 'method'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->infractionBanId(),
			$this->userGroupId(),
			$this->banuserGroupId(),
			$this->amount(),
			$this->period(),
			$this->method()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : InfractionBanRecord
    {
        return new InfractionBanRecord();
    }
}