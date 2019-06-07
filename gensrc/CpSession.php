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

class CpSession implements Table {

    const table = 'cpsession';
   
    public static function as(string $aliasName): CpSessionAlias
    {
        return new CpSessionAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::userId(),
			self::hash(),
			self::dateLine()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : CpSessionRecord
    {
        return new CpSessionRecord();
    }
    
    public static function userId() : ColumnField
    {
        return new ColumnField('userId', 'CpSession', 'cpsession', 'userid');
    }
    public static function hash() : ColumnField
    {
        return new ColumnField('hash', 'CpSession', 'cpsession', 'hash');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'CpSession', 'cpsession', 'dateline');
    }

    public function getTableName(): string
    {
        return 'cpsession';
    }
    
    public function __listColumns() : array
    {
        return ['userid', 'hash', 'dateline'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['userid', 'hash'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'userid' => 'integer', 
			'hash' => 'string', 
			'dateline' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'userid' => 'userId', 
			'hash' => 'hash', 
			'dateline' => 'dateLine'
		];
    }
}