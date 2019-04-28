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

class SpamLog implements Table {

    const table = 'spamlog';
   
    public static function as(string $aliasName): SpamLogAlias
    {
        return new SpamLogAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::postId()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : SpamLogRecord
    {
        return new SpamLogRecord();
    }
    
    public static function postId() : ColumnField
    {
        return new ColumnField('spamlog', 'postid');
    }

    public function getTableName(): string
    {
        return 'spamlog';
    }
    
    public function __listColumns() : array
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
			'postid' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'postid' => 'postId'
		];
    }

}