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

class Reputation implements Table {

    const table = 'reputation';
   
    public static function as(string $aliasName): ReputationAlias
    {
        return new ReputationAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::reputationId(),
			self::postId(),
			self::userId(),
			self::reputation(),
			self::whoAdded(),
			self::reason(),
			self::dateLine()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : ReputationRecord
    {
        return new ReputationRecord();
    }
    
    public static function reputationId() : ColumnField
    {
        return new ColumnField('reputationId', 'Reputation', 'reputation', 'reputationid');
    }
    public static function postId() : ColumnField
    {
        return new ColumnField('postId', 'Reputation', 'reputation', 'postid');
    }
    public static function userId() : ColumnField
    {
        return new ColumnField('userId', 'Reputation', 'reputation', 'userid');
    }
    public static function reputation() : ColumnField
    {
        return new ColumnField('reputation', 'Reputation', 'reputation', 'reputation');
    }
    public static function whoAdded() : ColumnField
    {
        return new ColumnField('whoAdded', 'Reputation', 'reputation', 'whoadded');
    }
    public static function reason() : ColumnField
    {
        return new ColumnField('reason', 'Reputation', 'reputation', 'reason');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'Reputation', 'reputation', 'dateline');
    }

    public function getTableName(): string
    {
        return 'reputation';
    }
    
    public function __listColumns() : array
    {
        return ['reputationid', 'postid', 'userid', 'reputation', 'whoadded', 'reason', 'dateline'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['reputationid'];
    }
    
    public function __listNullableColumns() : array
    {
        return ['reason'];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'reputationid' => 'integer', 
			'postid' => 'integer', 
			'userid' => 'integer', 
			'reputation' => 'integer', 
			'whoadded' => 'integer', 
			'reason' => 'string', 
			'dateline' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'reputationid' => 'reputationId', 
			'postid' => 'postId', 
			'userid' => 'userId', 
			'reputation' => 'reputation', 
			'whoadded' => 'whoAdded', 
			'reason' => 'reason', 
			'dateline' => 'dateLine'
		];
    }
}