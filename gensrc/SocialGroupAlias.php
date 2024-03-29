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

class SocialGroupAlias extends TableAlias {
   
    public function groupId() : ColumnField
    {
        return new ColumnField('groupId', 'SocialGroup', 'socialgroup', 'groupid', $this->getAliasName());
    }
    public function name() : ColumnField
    {
        return new ColumnField('name', 'SocialGroup', 'socialgroup', 'name', $this->getAliasName());
    }
    public function description() : ColumnField
    {
        return new ColumnField('description', 'SocialGroup', 'socialgroup', 'description', $this->getAliasName());
    }
    public function creatorUserId() : ColumnField
    {
        return new ColumnField('creatorUserId', 'SocialGroup', 'socialgroup', 'creatoruserid', $this->getAliasName());
    }
    public function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'SocialGroup', 'socialgroup', 'dateline', $this->getAliasName());
    }
    public function members() : ColumnField
    {
        return new ColumnField('members', 'SocialGroup', 'socialgroup', 'members', $this->getAliasName());
    }
    public function pictureCount() : ColumnField
    {
        return new ColumnField('pictureCount', 'SocialGroup', 'socialgroup', 'picturecount', $this->getAliasName());
    }
    public function lastPost() : ColumnField
    {
        return new ColumnField('lastPost', 'SocialGroup', 'socialgroup', 'lastpost', $this->getAliasName());
    }
    public function lastPoster() : ColumnField
    {
        return new ColumnField('lastPoster', 'SocialGroup', 'socialgroup', 'lastposter', $this->getAliasName());
    }
    public function lastPosterId() : ColumnField
    {
        return new ColumnField('lastPosterId', 'SocialGroup', 'socialgroup', 'lastposterid', $this->getAliasName());
    }
    public function lastGmId() : ColumnField
    {
        return new ColumnField('lastGmId', 'SocialGroup', 'socialgroup', 'lastgmid', $this->getAliasName());
    }
    public function visible() : ColumnField
    {
        return new ColumnField('visible', 'SocialGroup', 'socialgroup', 'visible', $this->getAliasName());
    }
    public function deleted() : ColumnField
    {
        return new ColumnField('deleted', 'SocialGroup', 'socialgroup', 'deleted', $this->getAliasName());
    }
    public function moderation() : ColumnField
    {
        return new ColumnField('moderation', 'SocialGroup', 'socialgroup', 'moderation', $this->getAliasName());
    }
    public function type() : ColumnField
    {
        return new ColumnField('type', 'SocialGroup', 'socialgroup', 'type', $this->getAliasName());
    }
    public function moderatedMembers() : ColumnField
    {
        return new ColumnField('moderatedMembers', 'SocialGroup', 'socialgroup', 'moderatedmembers', $this->getAliasName());
    }
    public function options() : ColumnField
    {
        return new ColumnField('options', 'SocialGroup', 'socialgroup', 'options', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'socialgroup';
    }
    
    public function __listColumns() : array
    {
        return ['groupid', 'name', 'description', 'creatoruserid', 'dateline', 'members', 'picturecount', 'lastpost', 'lastposter', 'lastposterid', 'lastgmid', 'visible', 'deleted', 'moderation', 'type', 'moderatedmembers', 'options'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['groupid'];
    }
    
    public function __listNullableColumns() : array
    {
        return ['description'];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'groupid' => 'integer', 
			'name' => 'string', 
			'description' => 'string', 
			'creatoruserid' => 'integer', 
			'dateline' => 'integer', 
			'members' => 'integer', 
			'picturecount' => 'integer', 
			'lastpost' => 'integer', 
			'lastposter' => 'string', 
			'lastposterid' => 'integer', 
			'lastgmid' => 'integer', 
			'visible' => 'integer', 
			'deleted' => 'integer', 
			'moderation' => 'integer', 
			'type' => 'string', 
			'moderatedmembers' => 'integer', 
			'options' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'groupid' => 'groupId', 
			'name' => 'name', 
			'description' => 'description', 
			'creatoruserid' => 'creatorUserId', 
			'dateline' => 'dateLine', 
			'members' => 'members', 
			'picturecount' => 'pictureCount', 
			'lastpost' => 'lastPost', 
			'lastposter' => 'lastPoster', 
			'lastposterid' => 'lastPosterId', 
			'lastgmid' => 'lastGmId', 
			'visible' => 'visible', 
			'deleted' => 'deleted', 
			'moderation' => 'moderation', 
			'type' => 'type', 
			'moderatedmembers' => 'moderatedMembers', 
			'options' => 'options'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->groupId(),
			$this->name(),
			$this->description(),
			$this->creatorUserId(),
			$this->dateLine(),
			$this->members(),
			$this->pictureCount(),
			$this->lastPost(),
			$this->lastPoster(),
			$this->lastPosterId(),
			$this->lastGmId(),
			$this->visible(),
			$this->deleted(),
			$this->moderation(),
			$this->type(),
			$this->moderatedMembers(),
			$this->options()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : SocialGroupRecord
    {
        return new SocialGroupRecord();
    }
}