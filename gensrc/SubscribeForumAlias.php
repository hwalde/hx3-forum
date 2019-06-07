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

class SubscribeForumAlias extends TableAlias {
   
    public function subscribeForumId() : ColumnField
    {
        return new ColumnField('subscribeForumId', 'SubscribeForum', 'subscribeforum', 'subscribeforumid', $this->getAliasName());
    }
    public function userId() : ColumnField
    {
        return new ColumnField('userId', 'SubscribeForum', 'subscribeforum', 'userid', $this->getAliasName());
    }
    public function forumId() : ColumnField
    {
        return new ColumnField('forumId', 'SubscribeForum', 'subscribeforum', 'forumid', $this->getAliasName());
    }
    public function emailUpdate() : ColumnField
    {
        return new ColumnField('emailUpdate', 'SubscribeForum', 'subscribeforum', 'emailupdate', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'subscribeforum';
    }
    
    public function __listColumns() : array
    {
        return ['subscribeforumid', 'userid', 'forumid', 'emailupdate'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['subscribeforumid'];
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->subscribeForumId(),
			$this->userId(),
			$this->forumId(),
			$this->emailUpdate()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : SubscribeForumRecord
    {
        return new SubscribeForumRecord();
    }
}