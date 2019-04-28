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

class TemplateHistory implements Table {

    const table = 'templatehistory';
   
    public static function as(string $aliasName): TemplateHistoryAlias
    {
        return new TemplateHistoryAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::templateHistoryId(),
			self::styleId(),
			self::title(),
			self::template(),
			self::dateLine(),
			self::userName(),
			self::version(),
			self::comment()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : TemplateHistoryRecord
    {
        return new TemplateHistoryRecord();
    }
    
    public static function templateHistoryId() : ColumnField
    {
        return new ColumnField('templatehistory', 'templatehistoryid');
    }
    public static function styleId() : ColumnField
    {
        return new ColumnField('templatehistory', 'styleid');
    }
    public static function title() : ColumnField
    {
        return new ColumnField('templatehistory', 'title');
    }
    public static function template() : ColumnField
    {
        return new ColumnField('templatehistory', 'template');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('templatehistory', 'dateline');
    }
    public static function userName() : ColumnField
    {
        return new ColumnField('templatehistory', 'username');
    }
    public static function version() : ColumnField
    {
        return new ColumnField('templatehistory', 'version');
    }
    public static function comment() : ColumnField
    {
        return new ColumnField('templatehistory', 'comment');
    }

    public function getTableName(): string
    {
        return 'templatehistory';
    }
    
    public function __listColumns() : array
    {
        return ['templatehistoryid', 'styleid', 'title', 'template', 'dateline', 'username', 'version', 'comment'];
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

}