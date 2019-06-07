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

class Moderation implements Table {

    const table = 'moderation';
   
    public static function as(string $aliasName): ModerationAlias
    {
        return new ModerationAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::primaryId(),
			self::type(),
			self::dateLine()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : ModerationRecord
    {
        return new ModerationRecord();
    }
    
    public static function primaryId() : ColumnField
    {
        return new ColumnField('primaryId', 'Moderation', 'moderation', 'primaryid');
    }
    public static function type() : ColumnField
    {
        return new ColumnField('type', 'Moderation', 'moderation', 'type');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'Moderation', 'moderation', 'dateline');
    }

    public function getTableName(): string
    {
        return 'moderation';
    }
    
    public function __listColumns() : array
    {
        return ['primaryid', 'type', 'dateline'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['primaryid', 'type'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'primaryid' => 'integer', 
			'type' => 'string', 
			'dateline' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'primaryid' => 'primaryId', 
			'type' => 'type', 
			'dateline' => 'dateLine'
		];
    }
}