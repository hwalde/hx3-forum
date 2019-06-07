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

class VisitorMessageHashAlias extends TableAlias {
   
    public function postUserId() : ColumnField
    {
        return new ColumnField('postUserId', 'VisitorMessageHash', 'visitormessage_hash', 'postuserid', $this->getAliasName());
    }
    public function userId() : ColumnField
    {
        return new ColumnField('userId', 'VisitorMessageHash', 'visitormessage_hash', 'userid', $this->getAliasName());
    }
    public function dupeHash() : ColumnField
    {
        return new ColumnField('dupeHash', 'VisitorMessageHash', 'visitormessage_hash', 'dupehash', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'VisitorMessageHash', 'visitormessage_hash', 'dateline', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'visitormessage_hash';
    }
    
    public function __listColumns() : array
    {
        return ['postuserid', 'userid', 'dupehash', 'dateline'];
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
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'postuserid' => 'integer', 
			'userid' => 'integer', 
			'dupehash' => 'string', 
			'dateline' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'postuserid' => 'postUserId', 
			'userid' => 'userId', 
			'dupehash' => 'dupeHash', 
			'dateline' => 'dateLine'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->postUserId(),
			$this->userId(),
			$this->dupeHash(),
			$this->dateLine()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : VisitorMessageHashRecord
    {
        return new VisitorMessageHashRecord();
    }
}