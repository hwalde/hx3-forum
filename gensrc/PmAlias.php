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

class PmAlias extends TableAlias {
   
    public function pmId() : ColumnField
    {
        return new ColumnField('pmId', 'Pm', 'pm', 'pmid', $this->getAliasName());
    }
    public function pmTextId() : ColumnField
    {
        return new ColumnField('pmTextId', 'Pm', 'pm', 'pmtextid', $this->getAliasName());
    }
    public function userId() : ColumnField
    {
        return new ColumnField('userId', 'Pm', 'pm', 'userid', $this->getAliasName());
    }
    public function folderId() : ColumnField
    {
        return new ColumnField('folderId', 'Pm', 'pm', 'folderid', $this->getAliasName());
    }
    public function messageRead() : ColumnField
    {
        return new ColumnField('messageRead', 'Pm', 'pm', 'messageread', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'pm';
    }
    
    public function __listColumns() : array
    {
        return ['pmid', 'pmtextid', 'userid', 'folderid', 'messageread'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['pmid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'pmid' => 'integer', 
			'pmtextid' => 'integer', 
			'userid' => 'integer', 
			'folderid' => 'integer', 
			'messageread' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'pmid' => 'pmId', 
			'pmtextid' => 'pmTextId', 
			'userid' => 'userId', 
			'folderid' => 'folderId', 
			'messageread' => 'messageRead'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->pmId(),
			$this->pmTextId(),
			$this->userId(),
			$this->folderId(),
			$this->messageRead()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PmRecord
    {
        return new PmRecord();
    }
}