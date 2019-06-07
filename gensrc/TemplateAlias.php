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

class TemplateAlias extends TableAlias {
   
    public function templateId() : ColumnField
    {
        return new ColumnField('templateId', 'Template', 'template', 'templateid', $this->getAliasName());
    }
    public function styleId() : ColumnField
    {
        return new ColumnField('styleId', 'Template', 'template', 'styleid', $this->getAliasName());
    }
    public function title() : ColumnField
    {
        return new ColumnField('title', 'Template', 'template', 'title', $this->getAliasName());
    }
    public function template() : ColumnField
    {
        return new ColumnField('template', 'Template', 'template', 'template', $this->getAliasName());
    }
    public function templateUn() : ColumnField
    {
        return new ColumnField('templateUn', 'Template', 'template', 'template_un', $this->getAliasName());
    }
    public function templateType() : ColumnField
    {
        return new ColumnField('templateType', 'Template', 'template', 'templatetype', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'Template', 'template', 'dateline', $this->getAliasName());
    }
    public function userName() : ColumnField
    {
        return new ColumnField('userName', 'Template', 'template', 'username', $this->getAliasName());
    }
    public function version() : ColumnField
    {
        return new ColumnField('version', 'Template', 'template', 'version', $this->getAliasName());
    }
    public function product() : ColumnField
    {
        return new ColumnField('product', 'Template', 'template', 'product', $this->getAliasName());
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->templateId(),
			$this->styleId(),
			$this->title(),
			$this->template(),
			$this->templateUn(),
			$this->templateType(),
			$this->dateLine(),
			$this->userName(),
			$this->version(),
			$this->product()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : TemplateRecord
    {
        return new TemplateRecord();
    }
}