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

class PostLogAlias extends TableAlias {
   
    public function postId() : ColumnField
    {
        return new ColumnField('postId', 'PostLog', 'postlog', 'postid', $this->getAliasName());
    }
    public function userAgent() : ColumnField
    {
        return new ColumnField('userAgent', 'PostLog', 'postlog', 'useragent', $this->getAliasName());
    }
    public function ip() : ColumnField
    {
        return new ColumnField('ip', 'PostLog', 'postlog', 'ip', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'PostLog', 'postlog', 'dateline', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'postlog';
    }
    
    public function __listColumns() : array
    {
        return ['postid', 'useragent', 'ip', 'dateline'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['postid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'postid' => 'integer', 
			'useragent' => 'string', 
			'ip' => 'integer', 
			'dateline' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'postid' => 'postId', 
			'useragent' => 'userAgent', 
			'ip' => 'ip', 
			'dateline' => 'dateLine'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->postId(),
			$this->userAgent(),
			$this->ip(),
			$this->dateLine()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PostLogRecord
    {
        return new PostLogRecord();
    }
}