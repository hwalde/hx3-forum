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

class HumanVerifyAlias extends TableAlias {
   
    public function hash() : ColumnField
    {
        return new ColumnField('hash', 'HumanVerify', 'humanverify', 'hash', $this->getAliasName());
    }
    public function answer() : ColumnField
    {
        return new ColumnField('answer', 'HumanVerify', 'humanverify', 'answer', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'HumanVerify', 'humanverify', 'dateline', $this->getAliasName());
    }
    public function viewed() : ColumnField
    {
        return new ColumnField('viewed', 'HumanVerify', 'humanverify', 'viewed', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'humanverify';
    }
    
    public function __listColumns() : array
    {
        return ['hash', 'answer', 'dateline', 'viewed'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return [];
    }
    
    public function __listNullableColumns() : array
    {
        return ['answer'];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'hash' => 'string', 
			'answer' => 'string', 
			'dateline' => 'integer', 
			'viewed' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'hash' => 'hash', 
			'answer' => 'answer', 
			'dateline' => 'dateLine', 
			'viewed' => 'viewed'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->hash(),
			$this->answer(),
			$this->dateLine(),
			$this->viewed()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : HumanVerifyRecord
    {
        return new HumanVerifyRecord();
    }
}