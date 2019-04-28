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

class InfractionAlias extends TableAlias {
   
    public function infractionId() : ColumnField
    {
        return new ColumnField('infraction', 'infractionid', $this->getAliasName());
    }
    public function infractionLevelId() : ColumnField
    {
        return new ColumnField('infraction', 'infractionlevelid', $this->getAliasName());
    }
    public function postId() : ColumnField
    {
        return new ColumnField('infraction', 'postid', $this->getAliasName());
    }
    public function userId() : ColumnField
    {
        return new ColumnField('infraction', 'userid', $this->getAliasName());
    }
    public function whoAdded() : ColumnField
    {
        return new ColumnField('infraction', 'whoadded', $this->getAliasName());
    }
    public function points() : ColumnField
    {
        return new ColumnField('infraction', 'points', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('infraction', 'dateline', $this->getAliasName());
    }
    public function note() : ColumnField
    {
        return new ColumnField('infraction', 'note', $this->getAliasName());
    }
    public function action() : ColumnField
    {
        return new ColumnField('infraction', 'action', $this->getAliasName());
    }
    public function actionDateline() : ColumnField
    {
        return new ColumnField('infraction', 'actiondateline', $this->getAliasName());
    }
    public function actionUserId() : ColumnField
    {
        return new ColumnField('infraction', 'actionuserid', $this->getAliasName());
    }
    public function actionReason() : ColumnField
    {
        return new ColumnField('infraction', 'actionreason', $this->getAliasName());
    }
    public function expires() : ColumnField
    {
        return new ColumnField('infraction', 'expires', $this->getAliasName());
    }
    public function threadId() : ColumnField
    {
        return new ColumnField('infraction', 'threadid', $this->getAliasName());
    }
    public function customReason() : ColumnField
    {
        return new ColumnField('infraction', 'customreason', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'infraction';
    }
    
    public function __listColumns() : array
    {
        return ['infractionid', 'infractionlevelid', 'postid', 'userid', 'whoadded', 'points', 'dateline', 'note', 'action', 'actiondateline', 'actionuserid', 'actionreason', 'expires', 'threadid', 'customreason'];
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->infractionId(),
			$this->infractionLevelId(),
			$this->postId(),
			$this->userId(),
			$this->whoAdded(),
			$this->points(),
			$this->dateLine(),
			$this->note(),
			$this->action(),
			$this->actionDateline(),
			$this->actionUserId(),
			$this->actionReason(),
			$this->expires(),
			$this->threadId(),
			$this->customReason()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : InfractionRecord
    {
        return new InfractionRecord();
    }
}