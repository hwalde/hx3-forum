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

class HumanVerify implements Table {

    const table = 'humanverify';
   
    public static function as(string $aliasName): HumanVerifyAlias
    {
        return new HumanVerifyAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::hash(),
			self::answer(),
			self::dateLine(),
			self::viewed()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : HumanVerifyRecord
    {
        return new HumanVerifyRecord();
    }
    
    public static function hash() : ColumnField
    {
        return new ColumnField('hash', 'HumanVerify', 'humanverify', 'hash');
    }
    public static function answer() : ColumnField
    {
        return new ColumnField('answer', 'HumanVerify', 'humanverify', 'answer');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'HumanVerify', 'humanverify', 'dateline');
    }
    public static function viewed() : ColumnField
    {
        return new ColumnField('viewed', 'HumanVerify', 'humanverify', 'viewed');
    }

    public function getTableName(): string
    {
        return 'humanverify';
    }
    
    public function __listColumns() : array
    {
        return ['hash', 'answer', 'dateline', 'viewed'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return [];
    }
    
    public function __listNullableColumns() : array
    {
        return ['answer'];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'hash' => 'string', 
			'answer' => 'string', 
			'dateline' => 'integer', 
			'viewed' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'hash' => 'hash', 
			'answer' => 'answer', 
			'dateline' => 'dateLine', 
			'viewed' => 'viewed'
		];
    }
}