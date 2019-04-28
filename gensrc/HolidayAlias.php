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

class HolidayAlias extends TableAlias {
   
    public function holidayId() : ColumnField
    {
        return new ColumnField('holiday', 'holidayid', $this->getAliasName());
    }
    public function recurring() : ColumnField
    {
        return new ColumnField('holiday', 'recurring', $this->getAliasName());
    }
    public function recurOption() : ColumnField
    {
        return new ColumnField('holiday', 'recuroption', $this->getAliasName());
    }
    public function allowSmilies() : ColumnField
    {
        return new ColumnField('holiday', 'allowsmilies', $this->getAliasName());
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->holidayId(),
			$this->recurring(),
			$this->recurOption(),
			$this->allowSmilies()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : HolidayRecord
    {
        return new HolidayRecord();
    }
}