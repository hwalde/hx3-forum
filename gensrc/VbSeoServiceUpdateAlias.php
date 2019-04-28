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

class VbSeoServiceUpdateAlias extends TableAlias {
   
    public function sThreadId() : ColumnField
    {
        return new ColumnField('vbseo_serviceupdate', 's_threadid', $this->getAliasName());
    }
    public function sUpdated() : ColumnField
    {
        return new ColumnField('vbseo_serviceupdate', 's_updated', $this->getAliasName());
    }
    public function sDateLine() : ColumnField
    {
        return new ColumnField('vbseo_serviceupdate', 's_dateline', $this->getAliasName());
    }
    public function sType() : ColumnField
    {
        return new ColumnField('vbseo_serviceupdate', 's_type', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'vbseo_serviceupdate';
    }
    
    public function __listColumns() : array
    {
        return ['s_threadid', 's_updated', 's_dateline', 's_type'];
    }
    
    public function __listNullableColumns() : array
    {
        return ['s_dateline'];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			's_threadid' => 'integer', 
			's_updated' => 'integer', 
			's_dateline' => 'integer', 
			's_type' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			's_threadid' => 'sThreadId', 
			's_updated' => 'sUpdated', 
			's_dateline' => 'sDateLine', 
			's_type' => 'sType'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->sThreadId(),
			$this->sUpdated(),
			$this->sDateLine(),
			$this->sType()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : VbSeoServiceUpdateRecord
    {
        return new VbSeoServiceUpdateRecord();
    }
}