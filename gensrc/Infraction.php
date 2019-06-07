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

class Infraction implements Table {

    const table = 'infraction';
   
    public static function as(string $aliasName): InfractionAlias
    {
        return new InfractionAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::infractionId(),
			self::infractionLevelId(),
			self::postId(),
			self::userId(),
			self::whoAdded(),
			self::points(),
			self::dateLine(),
			self::note(),
			self::action(),
			self::actionDateline(),
			self::actionUserId(),
			self::actionReason(),
			self::expires(),
			self::threadId(),
			self::customReason()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : InfractionRecord
    {
        return new InfractionRecord();
    }
    
    public static function infractionId() : ColumnField
    {
        return new ColumnField('infractionId', 'Infraction', 'infraction', 'infractionid');
    }
    public static function infractionLevelId() : ColumnField
    {
        return new ColumnField('infractionLevelId', 'Infraction', 'infraction', 'infractionlevelid');
    }
    public static function postId() : ColumnField
    {
        return new ColumnField('postId', 'Infraction', 'infraction', 'postid');
    }
    public static function userId() : ColumnField
    {
        return new ColumnField('userId', 'Infraction', 'infraction', 'userid');
    }
    public static function whoAdded() : ColumnField
    {
        return new ColumnField('whoAdded', 'Infraction', 'infraction', 'whoadded');
    }
    public static function points() : ColumnField
    {
        return new ColumnField('points', 'Infraction', 'infraction', 'points');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'Infraction', 'infraction', 'dateline');
    }
    public static function note() : ColumnField
    {
        return new ColumnField('note', 'Infraction', 'infraction', 'note');
    }
    public static function action() : ColumnField
    {
        return new ColumnField('action', 'Infraction', 'infraction', 'action');
    }
    public static function actionDateline() : ColumnField
    {
        return new ColumnField('actionDateline', 'Infraction', 'infraction', 'actiondateline');
    }
    public static function actionUserId() : ColumnField
    {
        return new ColumnField('actionUserId', 'Infraction', 'infraction', 'actionuserid');
    }
    public static function actionReason() : ColumnField
    {
        return new ColumnField('actionReason', 'Infraction', 'infraction', 'actionreason');
    }
    public static function expires() : ColumnField
    {
        return new ColumnField('expires', 'Infraction', 'infraction', 'expires');
    }
    public static function threadId() : ColumnField
    {
        return new ColumnField('threadId', 'Infraction', 'infraction', 'threadid');
    }
    public static function customReason() : ColumnField
    {
        return new ColumnField('customReason', 'Infraction', 'infraction', 'customreason');
    }

    public function getTableName(): string
    {
        return 'infraction';
    }
    
    public function __listColumns() : array
    {
        return ['infractionid', 'infractionlevelid', 'postid', 'userid', 'whoadded', 'points', 'dateline', 'note', 'action', 'actiondateline', 'actionuserid', 'actionreason', 'expires', 'threadid', 'customreason'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['infractionid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'infractionid' => 'integer', 
			'infractionlevelid' => 'integer', 
			'postid' => 'integer', 
			'userid' => 'integer', 
			'whoadded' => 'integer', 
			'points' => 'integer', 
			'dateline' => 'integer', 
			'note' => 'string', 
			'action' => 'integer', 
			'actiondateline' => 'integer', 
			'actionuserid' => 'integer', 
			'actionreason' => 'string', 
			'expires' => 'integer', 
			'threadid' => 'integer', 
			'customreason' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'infractionid' => 'infractionId', 
			'infractionlevelid' => 'infractionLevelId', 
			'postid' => 'postId', 
			'userid' => 'userId', 
			'whoadded' => 'whoAdded', 
			'points' => 'points', 
			'dateline' => 'dateLine', 
			'note' => 'note', 
			'action' => 'action', 
			'actiondateline' => 'actionDateline', 
			'actionuserid' => 'actionUserId', 
			'actionreason' => 'actionReason', 
			'expires' => 'expires', 
			'threadid' => 'threadId', 
			'customreason' => 'customReason'
		];
    }
}