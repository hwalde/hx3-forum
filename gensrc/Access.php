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

class Access implements Table {

    const table = 'access';
   
    public static function as(string $aliasName): AccessAlias
    {
        return new AccessAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::userId(),
			self::forumId(),
			self::accessMask()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : AccessRecord
    {
        return new AccessRecord();
    }
    
    public static function userId() : ColumnField
    {
        return new ColumnField('access', 'userid');
    }
    public static function forumId() : ColumnField
    {
        return new ColumnField('access', 'forumid');
    }
    public static function accessMask() : ColumnField
    {
        return new ColumnField('access', 'accessmask');
    }

    public function getTableName(): string
    {
        return 'access';
    }
    
    public function __listColumns() : array
    {
        return ['userid', 'forumid', 'accessmask'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'userid' => 'integer', 
			'forumid' => 'integer', 
			'accessmask' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'userid' => 'userId', 
			'forumid' => 'forumId', 
			'accessmask' => 'accessMask'
		];
    }

}