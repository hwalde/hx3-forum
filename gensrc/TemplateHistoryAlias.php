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

class TemplateHistoryAlias extends TableAlias {
   
    public function templateHistoryId() : ColumnField
    {
        return new ColumnField('templateHistoryId', 'TemplateHistory', 'templatehistory', 'templatehistoryid', $this->getAliasName());
    }
    public function styleId() : ColumnField
    {
        return new ColumnField('styleId', 'TemplateHistory', 'templatehistory', 'styleid', $this->getAliasName());
    }
    public function title() : ColumnField
    {
        return new ColumnField('title', 'TemplateHistory', 'templatehistory', 'title', $this->getAliasName());
    }
    public function template() : ColumnField
    {
        return new ColumnField('template', 'TemplateHistory', 'templatehistory', 'template', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'TemplateHistory', 'templatehistory', 'dateline', $this->getAliasName());
    }
    public function userName() : ColumnField
    {
        return new ColumnField('userName', 'TemplateHistory', 'templatehistory', 'username', $this->getAliasName());
    }
    public function version() : ColumnField
    {
        return new ColumnField('version', 'TemplateHistory', 'templatehistory', 'version', $this->getAliasName());
    }
    public function comment() : ColumnField
    {
        return new ColumnField('comment', 'TemplateHistory', 'templatehistory', 'comment', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'templatehistory';
    }
    
    public function __listColumns() : array
    {
        return ['templatehistoryid', 'styleid', 'title', 'template', 'dateline', 'username', 'version', 'comment'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['templatehistoryid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'templatehistoryid' => 'integer', 
			'styleid' => 'integer', 
			'title' => 'string', 
			'template' => 'string', 
			'dateline' => 'integer', 
			'username' => 'string', 
			'version' => 'string', 
			'comment' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'templatehistoryid' => 'templateHistoryId', 
			'styleid' => 'styleId', 
			'title' => 'title', 
			'template' => 'template', 
			'dateline' => 'dateLine', 
			'username' => 'userName', 
			'version' => 'version', 
			'comment' => 'comment'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->templateHistoryId(),
			$this->styleId(),
			$this->title(),
			$this->template(),
			$this->dateLine(),
			$this->userName(),
			$this->version(),
			$this->comment()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : TemplateHistoryRecord
    {
        return new TemplateHistoryRecord();
    }
}