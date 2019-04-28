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

class Holiday implements Table {

    const table = 'holiday';
   
    public static function as(string $aliasName): HolidayAlias
    {
        return new HolidayAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::holidayId(),
			self::recurring(),
			self::recurOption(),
			self::allowSmilies()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : HolidayRecord
    {
        return new HolidayRecord();
    }
    
    public static function holidayId() : ColumnField
    {
        return new ColumnField('holiday', 'holidayid');
    }
    public static function recurring() : ColumnField
    {
        return new ColumnField('holiday', 'recurring');
    }
    public static function recurOption() : ColumnField
    {
        return new ColumnField('holiday', 'recuroption');
    }
    public static function allowSmilies() : ColumnField
    {
        return new ColumnField('holiday', 'allowsmilies');
    }

    public function getTableName(): string
    {
        return 'holiday';
    }
    
    public function __listColumns() : array
    {
        return ['holidayid', 'recurring', 'recuroption', 'allowsmilies'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'holidayid' => 'integer', 
			'recurring' => 'integer', 
			'recuroption' => 'string', 
			'allowsmilies' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'holidayid' => 'holidayId', 
			'recurring' => 'recurring', 
			'recuroption' => 'recurOption', 
			'allowsmilies' => 'allowSmilies'
		];
    }

}