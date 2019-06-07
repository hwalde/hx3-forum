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

class InfractionBan implements Table {

    const table = 'infractionban';
   
    public static function as(string $aliasName): InfractionBanAlias
    {
        return new InfractionBanAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::infractionBanId(),
			self::userGroupId(),
			self::banuserGroupId(),
			self::amount(),
			self::period(),
			self::method()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : InfractionBanRecord
    {
        return new InfractionBanRecord();
    }
    
    public static function infractionBanId() : ColumnField
    {
        return new ColumnField('infractionBanId', 'InfractionBan', 'infractionban', 'infractionbanid');
    }
    public static function userGroupId() : ColumnField
    {
        return new ColumnField('userGroupId', 'InfractionBan', 'infractionban', 'usergroupid');
    }
    public static function banuserGroupId() : ColumnField
    {
        return new ColumnField('banuserGroupId', 'InfractionBan', 'infractionban', 'banusergroupid');
    }
    public static function amount() : ColumnField
    {
        return new ColumnField('amount', 'InfractionBan', 'infractionban', 'amount');
    }
    public static function period() : ColumnField
    {
        return new ColumnField('period', 'InfractionBan', 'infractionban', 'period');
    }
    public static function method() : ColumnField
    {
        return new ColumnField('method', 'InfractionBan', 'infractionban', 'method');
    }

    public function getTableName(): string
    {
        return 'infractionban';
    }
    
    public function __listColumns() : array
    {
        return ['infractionbanid', 'usergroupid', 'banusergroupid', 'amount', 'period', 'method'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['infractionbanid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'infractionbanid' => 'integer', 
			'usergroupid' => 'integer', 
			'banusergroupid' => 'integer', 
			'amount' => 'integer', 
			'period' => 'string', 
			'method' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'infractionbanid' => 'infractionBanId', 
			'usergroupid' => 'userGroupId', 
			'banusergroupid' => 'banuserGroupId', 
			'amount' => 'amount', 
			'period' => 'period', 
			'method' => 'method'
		];
    }
}