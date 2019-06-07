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

class AccessAlias extends TableAlias {
   
    public function userId() : ColumnField
    {
        return new ColumnField('userId', 'Access', 'access', 'userid', $this->getAliasName());
    }
    public function forumId() : ColumnField
    {
        return new ColumnField('forumId', 'Access', 'access', 'forumid', $this->getAliasName());
    }
    public function accessMask() : ColumnField
    {
        return new ColumnField('accessMask', 'Access', 'access', 'accessmask', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'access';
    }
    
    public function __listColumns() : array
    {
        return ['userid', 'forumid', 'accessmask'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['userid', 'forumid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'userid' => 'integer', 
			'forumid' => 'integer', 
			'accessmask' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'userid' => 'userId', 
			'forumid' => 'forumId', 
			'accessmask' => 'accessMask'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->userId(),
			$this->forumId(),
			$this->accessMask()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : AccessRecord
    {
        return new AccessRecord();
    }
}