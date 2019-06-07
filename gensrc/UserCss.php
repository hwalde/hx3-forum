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

class UserCss implements Table {

    const table = 'usercss';
   
    public static function as(string $aliasName): UserCssAlias
    {
        return new UserCssAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::userId(),
			self::selector(),
			self::property(),
			self::value()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : UserCssRecord
    {
        return new UserCssRecord();
    }
    
    public static function userId() : ColumnField
    {
        return new ColumnField('userId', 'UserCss', 'usercss', 'userid');
    }
    public static function selector() : ColumnField
    {
        return new ColumnField('selector', 'UserCss', 'usercss', 'selector');
    }
    public static function property() : ColumnField
    {
        return new ColumnField('property', 'UserCss', 'usercss', 'property');
    }
    public static function value() : ColumnField
    {
        return new ColumnField('value', 'UserCss', 'usercss', 'value');
    }

    public function getTableName(): string
    {
        return 'usercss';
    }
    
    public function __listColumns() : array
    {
        return ['userid', 'selector', 'property', 'value'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['userid', 'selector', 'property'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'userid' => 'integer', 
			'selector' => 'string', 
			'property' => 'string', 
			'value' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'userid' => 'userId', 
			'selector' => 'selector', 
			'property' => 'property', 
			'value' => 'value'
		];
    }
}