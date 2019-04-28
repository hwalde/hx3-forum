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

class StyleAlias extends TableAlias {
   
    public function styleId() : ColumnField
    {
        return new ColumnField('style', 'styleid', $this->getAliasName());
    }
    public function title() : ColumnField
    {
        return new ColumnField('style', 'title', $this->getAliasName());
    }
    public function parentId() : ColumnField
    {
        return new ColumnField('style', 'parentid', $this->getAliasName());
    }
    public function parentList() : ColumnField
    {
        return new ColumnField('style', 'parentlist', $this->getAliasName());
    }
    public function templateList() : ColumnField
    {
        return new ColumnField('style', 'templatelist', $this->getAliasName());
    }
    public function cssColors() : ColumnField
    {
        return new ColumnField('style', 'csscolors', $this->getAliasName());
    }
    public function css() : ColumnField
    {
        return new ColumnField('style', 'css', $this->getAliasName());
    }
    public function styleVars() : ColumnField
    {
        return new ColumnField('style', 'stylevars', $this->getAliasName());
    }
    public function replacements() : ColumnField
    {
        return new ColumnField('style', 'replacements', $this->getAliasName());
    }
    public function editorStyles() : ColumnField
    {
        return new ColumnField('style', 'editorstyles', $this->getAliasName());
    }
    public function userSelect() : ColumnField
    {
        return new ColumnField('style', 'userselect', $this->getAliasName());
    }
    public function displayOrder() : ColumnField
    {
        return new ColumnField('style', 'displayorder', $this->getAliasName());
    }
    public function importStyleId() : ColumnField
    {
        return new ColumnField('style', 'importstyleid', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'style';
    }
    
    public function __listColumns() : array
    {
        return ['styleid', 'title', 'parentid', 'parentlist', 'templatelist', 'csscolors', 'css', 'stylevars', 'replacements', 'editorstyles', 'userselect', 'displayorder', 'importstyleid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'styleid' => 'integer', 
			'title' => 'string', 
			'parentid' => 'integer', 
			'parentlist' => 'string', 
			'templatelist' => 'string', 
			'csscolors' => 'string', 
			'css' => 'string', 
			'stylevars' => 'string', 
			'replacements' => 'string', 
			'editorstyles' => 'string', 
			'userselect' => 'integer', 
			'displayorder' => 'integer', 
			'importstyleid' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'styleid' => 'styleId', 
			'title' => 'title', 
			'parentid' => 'parentId', 
			'parentlist' => 'parentList', 
			'templatelist' => 'templateList', 
			'csscolors' => 'cssColors', 
			'css' => 'css', 
			'stylevars' => 'styleVars', 
			'replacements' => 'replacements', 
			'editorstyles' => 'editorStyles', 
			'userselect' => 'userSelect', 
			'displayorder' => 'displayOrder', 
			'importstyleid' => 'importStyleId'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->styleId(),
			$this->title(),
			$this->parentId(),
			$this->parentList(),
			$this->templateList(),
			$this->cssColors(),
			$this->css(),
			$this->styleVars(),
			$this->replacements(),
			$this->editorStyles(),
			$this->userSelect(),
			$this->displayOrder(),
			$this->importStyleId()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : StyleRecord
    {
        return new StyleRecord();
    }
}