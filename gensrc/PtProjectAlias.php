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

class PtProjectAlias extends TableAlias {
   
    public function projectId() : ColumnField
    {
        return new ColumnField('projectId', 'PtProject', 'pt_project', 'projectid', $this->getAliasName());
    }
    public function displayOrder() : ColumnField
    {
        return new ColumnField('displayOrder', 'PtProject', 'pt_project', 'displayorder', $this->getAliasName());
    }
    public function title() : ColumnField
    {
        return new ColumnField('title', 'PtProject', 'pt_project', 'title', $this->getAliasName());
    }
    public function titleClean() : ColumnField
    {
        return new ColumnField('titleClean', 'PtProject', 'pt_project', 'title_clean', $this->getAliasName());
    }
    public function summary() : ColumnField
    {
        return new ColumnField('summary', 'PtProject', 'pt_project', 'summary', $this->getAliasName());
    }
    public function summaryClean() : ColumnField
    {
        return new ColumnField('summaryClean', 'PtProject', 'pt_project', 'summary_clean', $this->getAliasName());
    }
    public function description() : ColumnField
    {
        return new ColumnField('description', 'PtProject', 'pt_project', 'description', $this->getAliasName());
    }
    public function options() : ColumnField
    {
        return new ColumnField('options', 'PtProject', 'pt_project', 'options', $this->getAliasName());
    }
    public function afterForumIds() : ColumnField
    {
        return new ColumnField('afterForumIds', 'PtProject', 'pt_project', 'afterforumids', $this->getAliasName());
    }
    public function forumTitle() : ColumnField
    {
        return new ColumnField('forumTitle', 'PtProject', 'pt_project', 'forumtitle', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'pt_project';
    }
    
    public function __listColumns() : array
    {
        return ['projectid', 'displayorder', 'title', 'title_clean', 'summary', 'summary_clean', 'description', 'options', 'afterforumids', 'forumtitle'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['projectid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'projectid' => 'integer', 
			'displayorder' => 'integer', 
			'title' => 'string', 
			'title_clean' => 'string', 
			'summary' => 'string', 
			'summary_clean' => 'string', 
			'description' => 'string', 
			'options' => 'integer', 
			'afterforumids' => 'string', 
			'forumtitle' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'projectid' => 'projectId', 
			'displayorder' => 'displayOrder', 
			'title' => 'title', 
			'title_clean' => 'titleClean', 
			'summary' => 'summary', 
			'summary_clean' => 'summaryClean', 
			'description' => 'description', 
			'options' => 'options', 
			'afterforumids' => 'afterForumIds', 
			'forumtitle' => 'forumTitle'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->projectId(),
			$this->displayOrder(),
			$this->title(),
			$this->titleClean(),
			$this->summary(),
			$this->summaryClean(),
			$this->description(),
			$this->options(),
			$this->afterForumIds(),
			$this->forumTitle()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PtProjectRecord
    {
        return new PtProjectRecord();
    }
}