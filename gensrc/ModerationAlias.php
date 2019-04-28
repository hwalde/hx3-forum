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

class ModerationAlias extends TableAlias {
   
    public function primaryId() : ColumnField
    {
        return new ColumnField('moderation', 'primaryid', $this->getAliasName());
    }
    public function type() : ColumnField
    {
        return new ColumnField('moderation', 'type', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('moderation', 'dateline', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'moderation';
    }
    
    public function __listColumns() : array
    {
        return ['primaryid', 'type', 'dateline'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'primaryid' => 'integer', 
			'type' => 'string', 
			'dateline' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'primaryid' => 'primaryId', 
			'type' => 'type', 
			'dateline' => 'dateLine'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->primaryId(),
			$this->type(),
			$this->dateLine()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : ModerationRecord
    {
        return new ModerationRecord();
    }
}