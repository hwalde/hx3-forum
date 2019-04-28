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

class SubscribeForum implements Table {

    const table = 'subscribeforum';
   
    public static function as(string $aliasName): SubscribeForumAlias
    {
        return new SubscribeForumAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::subscribeForumId(),
			self::userId(),
			self::forumId(),
			self::emailUpdate()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : SubscribeForumRecord
    {
        return new SubscribeForumRecord();
    }
    
    public static function subscribeForumId() : ColumnField
    {
        return new ColumnField('subscribeforum', 'subscribeforumid');
    }
    public static function userId() : ColumnField
    {
        return new ColumnField('subscribeforum', 'userid');
    }
    public static function forumId() : ColumnField
    {
        return new ColumnField('subscribeforum', 'forumid');
    }
    public static function emailUpdate() : ColumnField
    {
        return new ColumnField('subscribeforum', 'emailupdate');
    }

    public function getTableName(): string
    {
        return 'subscribeforum';
    }
    
    public function __listColumns() : array
    {
        return ['subscribeforumid', 'userid', 'forumid', 'emailupdate'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'subscribeforumid' => 'integer', 
			'userid' => 'integer', 
			'forumid' => 'integer', 
			'emailupdate' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'subscribeforumid' => 'subscribeForumId', 
			'userid' => 'userId', 
			'forumid' => 'forumId', 
			'emailupdate' => 'emailUpdate'
		];
    }

}