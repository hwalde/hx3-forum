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

class Template implements Table {

    const table = 'template';
   
    public static function as(string $aliasName): TemplateAlias
    {
        return new TemplateAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::templateId(),
			self::styleId(),
			self::title(),
			self::template(),
			self::templateUn(),
			self::templateType(),
			self::dateLine(),
			self::userName(),
			self::version(),
			self::product()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : TemplateRecord
    {
        return new TemplateRecord();
    }
    
    public static function templateId() : ColumnField
    {
        return new ColumnField('templateId', 'Template', 'template', 'templateid');
    }
    public static function styleId() : ColumnField
    {
        return new ColumnField('styleId', 'Template', 'template', 'styleid');
    }
    public static function title() : ColumnField
    {
        return new ColumnField('title', 'Template', 'template', 'title');
    }
    public static function template() : ColumnField
    {
        return new ColumnField('template', 'Template', 'template', 'template');
    }
    public static function templateUn() : ColumnField
    {
        return new ColumnField('templateUn', 'Template', 'template', 'template_un');
    }
    public static function templateType() : ColumnField
    {
        return new ColumnField('templateType', 'Template', 'template', 'templatetype');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'Template', 'template', 'dateline');
    }
    public static function userName() : ColumnField
    {
        return new ColumnField('userName', 'Template', 'template', 'username');
    }
    public static function version() : ColumnField
    {
        return new ColumnField('version', 'Template', 'template', 'version');
    }
    public static function product() : ColumnField
    {
        return new ColumnField('product', 'Template', 'template', 'product');
    }

    public function getTableName(): string
    {
        return 'template';
    }
    
    public function __listColumns() : array
    {
        return ['templateid', 'styleid', 'title', 'template', 'template_un', 'templatetype', 'dateline', 'username', 'version', 'product'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['templateid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'templateid' => 'integer', 
			'styleid' => 'integer', 
			'title' => 'string', 
			'template' => 'string', 
			'template_un' => 'string', 
			'templatetype' => 'string', 
			'dateline' => 'integer', 
			'username' => 'string', 
			'version' => 'string', 
			'product' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'templateid' => 'templateId', 
			'styleid' => 'styleId', 
			'title' => 'title', 
			'template' => 'template', 
			'template_un' => 'templateUn', 
			'templatetype' => 'templateType', 
			'dateline' => 'dateLine', 
			'username' => 'userName', 
			'version' => 'version', 
			'product' => 'product'
		];
    }
}