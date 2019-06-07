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

class ProfileVisitorAlias extends TableAlias {
   
    public function userId() : ColumnField
    {
        return new ColumnField('userId', 'ProfileVisitor', 'profilevisitor', 'userid', $this->getAliasName());
    }
    public function visitorId() : ColumnField
    {
        return new ColumnField('visitorId', 'ProfileVisitor', 'profilevisitor', 'visitorid', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'ProfileVisitor', 'profilevisitor', 'dateline', $this->getAliasName());
    }
    public function visible() : ColumnField
    {
        return new ColumnField('visible', 'ProfileVisitor', 'profilevisitor', 'visible', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'profilevisitor';
    }
    
    public function __listColumns() : array
    {
        return ['userid', 'visitorid', 'dateline', 'visible'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['userid', 'visitorid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'userid' => 'integer', 
			'visitorid' => 'integer', 
			'dateline' => 'integer', 
			'visible' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'userid' => 'userId', 
			'visitorid' => 'visitorId', 
			'dateline' => 'dateLine', 
			'visible' => 'visible'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->userId(),
			$this->visitorId(),
			$this->dateLine(),
			$this->visible()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : ProfileVisitorRecord
    {
        return new ProfileVisitorRecord();
    }
}