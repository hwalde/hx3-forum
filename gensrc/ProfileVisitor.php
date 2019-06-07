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

class ProfileVisitor implements Table {

    const table = 'profilevisitor';
   
    public static function as(string $aliasName): ProfileVisitorAlias
    {
        return new ProfileVisitorAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::userId(),
			self::visitorId(),
			self::dateLine(),
			self::visible()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : ProfileVisitorRecord
    {
        return new ProfileVisitorRecord();
    }
    
    public static function userId() : ColumnField
    {
        return new ColumnField('userId', 'ProfileVisitor', 'profilevisitor', 'userid');
    }
    public static function visitorId() : ColumnField
    {
        return new ColumnField('visitorId', 'ProfileVisitor', 'profilevisitor', 'visitorid');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'ProfileVisitor', 'profilevisitor', 'dateline');
    }
    public static function visible() : ColumnField
    {
        return new ColumnField('visible', 'ProfileVisitor', 'profilevisitor', 'visible');
    }

    public function getTableName(): string
    {
        return 'profilevisitor';
    }
    
    public function __listColumns() : array
    {
        return ['userid', 'visitorid', 'dateline', 'visible'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['userid', 'visitorid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'userid' => 'integer', 
			'visitorid' => 'integer', 
			'dateline' => 'integer', 
			'visible' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'userid' => 'userId', 
			'visitorid' => 'visitorId', 
			'dateline' => 'dateLine', 
			'visible' => 'visible'
		];
    }
}