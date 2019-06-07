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

class VisitorMessageHash implements Table {

    const table = 'visitormessage_hash';
   
    public static function as(string $aliasName): VisitorMessageHashAlias
    {
        return new VisitorMessageHashAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::postUserId(),
			self::userId(),
			self::dupeHash(),
			self::dateLine()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : VisitorMessageHashRecord
    {
        return new VisitorMessageHashRecord();
    }
    
    public static function postUserId() : ColumnField
    {
        return new ColumnField('postUserId', 'VisitorMessageHash', 'visitormessage_hash', 'postuserid');
    }
    public static function userId() : ColumnField
    {
        return new ColumnField('userId', 'VisitorMessageHash', 'visitormessage_hash', 'userid');
    }
    public static function dupeHash() : ColumnField
    {
        return new ColumnField('dupeHash', 'VisitorMessageHash', 'visitormessage_hash', 'dupehash');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'VisitorMessageHash', 'visitormessage_hash', 'dateline');
    }

    public function getTableName(): string
    {
        return 'visitormessage_hash';
    }
    
    public function __listColumns() : array
    {
        return ['postuserid', 'userid', 'dupehash', 'dateline'];
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
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'postuserid' => 'integer', 
			'userid' => 'integer', 
			'dupehash' => 'string', 
			'dateline' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'postuserid' => 'postUserId', 
			'userid' => 'userId', 
			'dupehash' => 'dupeHash', 
			'dateline' => 'dateLine'
		];
    }
}