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

class ProfileFieldAlias extends TableAlias {
   
    public function profileFieldId() : ColumnField
    {
        return new ColumnField('profilefield', 'profilefieldid', $this->getAliasName());
    }
    public function required() : ColumnField
    {
        return new ColumnField('profilefield', 'required', $this->getAliasName());
    }
    public function hidden() : ColumnField
    {
        return new ColumnField('profilefield', 'hidden', $this->getAliasName());
    }
    public function maxLength() : ColumnField
    {
        return new ColumnField('profilefield', 'maxlength', $this->getAliasName());
    }
    public function size() : ColumnField
    {
        return new ColumnField('profilefield', 'size', $this->getAliasName());
    }
    public function displayOrder() : ColumnField
    {
        return new ColumnField('profilefield', 'displayorder', $this->getAliasName());
    }
    public function editable() : ColumnField
    {
        return new ColumnField('profilefield', 'editable', $this->getAliasName());
    }
    public function type() : ColumnField
    {
        return new ColumnField('profilefield', 'type', $this->getAliasName());
    }
    public function data() : ColumnField
    {
        return new ColumnField('profilefield', 'data', $this->getAliasName());
    }
    public function height() : ColumnField
    {
        return new ColumnField('profilefield', 'height', $this->getAliasName());
    }
    public function def() : ColumnField
    {
        return new ColumnField('profilefield', 'def', $this->getAliasName());
    }
    public function optional() : ColumnField
    {
        return new ColumnField('profilefield', 'optional', $this->getAliasName());
    }
    public function searchable() : ColumnField
    {
        return new ColumnField('profilefield', 'searchable', $this->getAliasName());
    }
    public function memberList() : ColumnField
    {
        return new ColumnField('profilefield', 'memberlist', $this->getAliasName());
    }
    public function regex() : ColumnField
    {
        return new ColumnField('profilefield', 'regex', $this->getAliasName());
    }
    public function form() : ColumnField
    {
        return new ColumnField('profilefield', 'form', $this->getAliasName());
    }
    public function html() : ColumnField
    {
        return new ColumnField('profilefield', 'html', $this->getAliasName());
    }
    public function perLine() : ColumnField
    {
        return new ColumnField('profilefield', 'perline', $this->getAliasName());
    }
    public function profileFieldCategoryId() : ColumnField
    {
        return new ColumnField('profilefield', 'profilefieldcategoryid', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'profilefield';
    }
    
    public function __listColumns() : array
    {
        return ['profilefieldid', 'required', 'hidden', 'maxlength', 'size', 'displayorder', 'editable', 'type', 'data', 'height', 'def', 'optional', 'searchable', 'memberlist', 'regex', 'form', 'html', 'perline', 'profilefieldcategoryid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'profilefieldid' => 'integer', 
			'required' => 'integer', 
			'hidden' => 'integer', 
			'maxlength' => 'integer', 
			'size' => 'integer', 
			'displayorder' => 'integer', 
			'editable' => 'integer', 
			'type' => 'string', 
			'data' => 'string', 
			'height' => 'integer', 
			'def' => 'integer', 
			'optional' => 'integer', 
			'searchable' => 'integer', 
			'memberlist' => 'integer', 
			'regex' => 'string', 
			'form' => 'integer', 
			'html' => 'integer', 
			'perline' => 'integer', 
			'profilefieldcategoryid' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'profilefieldid' => 'profileFieldId', 
			'required' => 'required', 
			'hidden' => 'hidden', 
			'maxlength' => 'maxLength', 
			'size' => 'size', 
			'displayorder' => 'displayOrder', 
			'editable' => 'editable', 
			'type' => 'type', 
			'data' => 'data', 
			'height' => 'height', 
			'def' => 'def', 
			'optional' => 'optional', 
			'searchable' => 'searchable', 
			'memberlist' => 'memberList', 
			'regex' => 'regex', 
			'form' => 'form', 
			'html' => 'html', 
			'perline' => 'perLine', 
			'profilefieldcategoryid' => 'profileFieldCategoryId'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->profileFieldId(),
			$this->required(),
			$this->hidden(),
			$this->maxLength(),
			$this->size(),
			$this->displayOrder(),
			$this->editable(),
			$this->type(),
			$this->data(),
			$this->height(),
			$this->def(),
			$this->optional(),
			$this->searchable(),
			$this->memberList(),
			$this->regex(),
			$this->form(),
			$this->html(),
			$this->perLine(),
			$this->profileFieldCategoryId()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : ProfileFieldRecord
    {
        return new ProfileFieldRecord();
    }
}