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

class UserField implements Table {

    const table = 'userfield';
   
    public static function as(string $aliasName): UserFieldAlias
    {
        return new UserFieldAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::userId(),
			self::temp(),
			self::field1(),
			self::field2(),
			self::field3(),
			self::field4(),
			self::field5()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : UserFieldRecord
    {
        return new UserFieldRecord();
    }
    
    public static function userId() : ColumnField
    {
        return new ColumnField('userId', 'UserField', 'userfield', 'userid');
    }
    public static function temp() : ColumnField
    {
        return new ColumnField('temp', 'UserField', 'userfield', 'temp');
    }
    public static function field1() : ColumnField
    {
        return new ColumnField('field1', 'UserField', 'userfield', 'field1');
    }
    public static function field2() : ColumnField
    {
        return new ColumnField('field2', 'UserField', 'userfield', 'field2');
    }
    public static function field3() : ColumnField
    {
        return new ColumnField('field3', 'UserField', 'userfield', 'field3');
    }
    public static function field4() : ColumnField
    {
        return new ColumnField('field4', 'UserField', 'userfield', 'field4');
    }
    public static function field5() : ColumnField
    {
        return new ColumnField('field5', 'UserField', 'userfield', 'field5');
    }

    public function getTableName(): string
    {
        return 'userfield';
    }
    
    public function __listColumns() : array
    {
        return ['userid', 'temp', 'field1', 'field2', 'field3', 'field4', 'field5'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['userid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'userid' => 'integer', 
			'temp' => 'string', 
			'field1' => 'string', 
			'field2' => 'string', 
			'field3' => 'string', 
			'field4' => 'string', 
			'field5' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'userid' => 'userId', 
			'temp' => 'temp', 
			'field1' => 'field1', 
			'field2' => 'field2', 
			'field3' => 'field3', 
			'field4' => 'field4', 
			'field5' => 'field5'
		];
    }
}