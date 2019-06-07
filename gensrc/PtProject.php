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

class PtProject implements Table {

    const table = 'pt_project';
   
    public static function as(string $aliasName): PtProjectAlias
    {
        return new PtProjectAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::projectId(),
			self::displayOrder(),
			self::title(),
			self::titleClean(),
			self::summary(),
			self::summaryClean(),
			self::description(),
			self::options(),
			self::afterForumIds(),
			self::forumTitle()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PtProjectRecord
    {
        return new PtProjectRecord();
    }
    
    public static function projectId() : ColumnField
    {
        return new ColumnField('projectId', 'PtProject', 'pt_project', 'projectid');
    }
    public static function displayOrder() : ColumnField
    {
        return new ColumnField('displayOrder', 'PtProject', 'pt_project', 'displayorder');
    }
    public static function title() : ColumnField
    {
        return new ColumnField('title', 'PtProject', 'pt_project', 'title');
    }
    public static function titleClean() : ColumnField
    {
        return new ColumnField('titleClean', 'PtProject', 'pt_project', 'title_clean');
    }
    public static function summary() : ColumnField
    {
        return new ColumnField('summary', 'PtProject', 'pt_project', 'summary');
    }
    public static function summaryClean() : ColumnField
    {
        return new ColumnField('summaryClean', 'PtProject', 'pt_project', 'summary_clean');
    }
    public static function description() : ColumnField
    {
        return new ColumnField('description', 'PtProject', 'pt_project', 'description');
    }
    public static function options() : ColumnField
    {
        return new ColumnField('options', 'PtProject', 'pt_project', 'options');
    }
    public static function afterForumIds() : ColumnField
    {
        return new ColumnField('afterForumIds', 'PtProject', 'pt_project', 'afterforumids');
    }
    public static function forumTitle() : ColumnField
    {
        return new ColumnField('forumTitle', 'PtProject', 'pt_project', 'forumtitle');
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
}