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

class ProfileField implements Table {

    const table = 'profilefield';
   
    public static function as(string $aliasName): ProfileFieldAlias
    {
        return new ProfileFieldAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::profileFieldId(),
			self::required(),
			self::hidden(),
			self::maxLength(),
			self::size(),
			self::displayOrder(),
			self::editable(),
			self::type(),
			self::data(),
			self::height(),
			self::def(),
			self::optional(),
			self::searchable(),
			self::memberList(),
			self::regex(),
			self::form(),
			self::html(),
			self::perLine(),
			self::profileFieldCategoryId()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : ProfileFieldRecord
    {
        return new ProfileFieldRecord();
    }
    
    public static function profileFieldId() : ColumnField
    {
        return new ColumnField('profilefield', 'profilefieldid');
    }
    public static function required() : ColumnField
    {
        return new ColumnField('profilefield', 'required');
    }
    public static function hidden() : ColumnField
    {
        return new ColumnField('profilefield', 'hidden');
    }
    public static function maxLength() : ColumnField
    {
        return new ColumnField('profilefield', 'maxlength');
    }
    public static function size() : ColumnField
    {
        return new ColumnField('profilefield', 'size');
    }
    public static function displayOrder() : ColumnField
    {
        return new ColumnField('profilefield', 'displayorder');
    }
    public static function editable() : ColumnField
    {
        return new ColumnField('profilefield', 'editable');
    }
    public static function type() : ColumnField
    {
        return new ColumnField('profilefield', 'type');
    }
    public static function data() : ColumnField
    {
        return new ColumnField('profilefield', 'data');
    }
    public static function height() : ColumnField
    {
        return new ColumnField('profilefield', 'height');
    }
    public static function def() : ColumnField
    {
        return new ColumnField('profilefield', 'def');
    }
    public static function optional() : ColumnField
    {
        return new ColumnField('profilefield', 'optional');
    }
    public static function searchable() : ColumnField
    {
        return new ColumnField('profilefield', 'searchable');
    }
    public static function memberList() : ColumnField
    {
        return new ColumnField('profilefield', 'memberlist');
    }
    public static function regex() : ColumnField
    {
        return new ColumnField('profilefield', 'regex');
    }
    public static function form() : ColumnField
    {
        return new ColumnField('profilefield', 'form');
    }
    public static function html() : ColumnField
    {
        return new ColumnField('profilefield', 'html');
    }
    public static function perLine() : ColumnField
    {
        return new ColumnField('profilefield', 'perline');
    }
    public static function profileFieldCategoryId() : ColumnField
    {
        return new ColumnField('profilefield', 'profilefieldcategoryid');
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

}