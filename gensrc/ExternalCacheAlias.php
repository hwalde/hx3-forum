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

class ExternalCacheAlias extends TableAlias {
   
    public function cacheHash() : ColumnField
    {
        return new ColumnField('externalcache', 'cachehash', $this->getAliasName());
    }
    public function text() : ColumnField
    {
        return new ColumnField('externalcache', 'text', $this->getAliasName());
    }
    public function headers() : ColumnField
    {
        return new ColumnField('externalcache', 'headers', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('externalcache', 'dateline', $this->getAliasName());
    }
    public function forumId() : ColumnField
    {
        return new ColumnField('externalcache', 'forumid', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'externalcache';
    }
    
    public function __listColumns() : array
    {
        return ['cachehash', 'text', 'headers', 'dateline', 'forumid'];
    }
    
    public function __listNullableColumns() : array
    {
        return ['text', 'headers'];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'cachehash' => 'string', 
			'text' => 'string', 
			'headers' => 'string', 
			'dateline' => 'integer', 
			'forumid' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'cachehash' => 'cacheHash', 
			'text' => 'text', 
			'headers' => 'headers', 
			'dateline' => 'dateLine', 
			'forumid' => 'forumId'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->cacheHash(),
			$this->text(),
			$this->headers(),
			$this->dateLine(),
			$this->forumId()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : ExternalCacheRecord
    {
        return new ExternalCacheRecord();
    }
}