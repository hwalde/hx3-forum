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

class ThreadViewsAlias extends TableAlias {
   
    public function threadId() : ColumnField
    {
        return new ColumnField('threadviews', 'threadid', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'threadviews';
    }
    
    public function __listColumns() : array
    {
        return ['threadid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'threadid' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'threadid' => 'threadId'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->threadId()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : ThreadViewsRecord
    {
        return new ThreadViewsRecord();
    }
}