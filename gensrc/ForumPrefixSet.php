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

class ForumPrefixSet implements Table {

    const table = 'forumprefixset';
   
    public static function as(string $aliasName): ForumPrefixSetAlias
    {
        return new ForumPrefixSetAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::forumId(),
			self::prefixSetId()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : ForumPrefixSetRecord
    {
        return new ForumPrefixSetRecord();
    }
    
    public static function forumId() : ColumnField
    {
        return new ColumnField('forumprefixset', 'forumid');
    }
    public static function prefixSetId() : ColumnField
    {
        return new ColumnField('forumprefixset', 'prefixsetid');
    }

    public function getTableName(): string
    {
        return 'forumprefixset';
    }
    
    public function __listColumns() : array
    {
        return ['forumid', 'prefixsetid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'forumid' => 'integer', 
			'prefixsetid' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'forumid' => 'forumId', 
			'prefixsetid' => 'prefixSetId'
		];
    }

}