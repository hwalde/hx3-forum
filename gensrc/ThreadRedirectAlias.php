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

class ThreadRedirectAlias extends TableAlias {
   
    public function threadId() : ColumnField
    {
        return new ColumnField('threadredirect', 'threadid', $this->getAliasName());
    }
    public function expires() : ColumnField
    {
        return new ColumnField('threadredirect', 'expires', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'threadredirect';
    }
    
    public function __listColumns() : array
    {
        return ['threadid', 'expires'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'threadid' => 'integer', 
			'expires' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'threadid' => 'threadId', 
			'expires' => 'expires'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->threadId(),
			$this->expires()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : ThreadRedirectRecord
    {
        return new ThreadRedirectRecord();
    }
}