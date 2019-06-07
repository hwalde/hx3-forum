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

class SocialGroup implements Table {

    const table = 'socialgroup';
   
    public static function as(string $aliasName): SocialGroupAlias
    {
        return new SocialGroupAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::groupId(),
			self::name(),
			self::description(),
			self::creatorUserId(),
			self::dateLine(),
			self::members(),
			self::pictureCount(),
			self::lastPost(),
			self::lastPoster(),
			self::lastPosterId(),
			self::lastGmId(),
			self::visible(),
			self::deleted(),
			self::moderation(),
			self::type(),
			self::moderatedMembers(),
			self::options()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : SocialGroupRecord
    {
        return new SocialGroupRecord();
    }
    
    public static function groupId() : ColumnField
    {
        return new ColumnField('groupId', 'SocialGroup', 'socialgroup', 'groupid');
    }
    public static function name() : ColumnField
    {
        return new ColumnField('name', 'SocialGroup', 'socialgroup', 'name');
    }
    public static function description() : ColumnField
    {
        return new ColumnField('description', 'SocialGroup', 'socialgroup', 'description');
    }
    public static function creatorUserId() : ColumnField
    {
        return new ColumnField('creatorUserId', 'SocialGroup', 'socialgroup', 'creatoruserid');
    }
    public static function dateLine() : ColumnField
    {
        return new ColumnField('dateLine', 'SocialGroup', 'socialgroup', 'dateline');
    }
    public static function members() : ColumnField
    {
        return new ColumnField('members', 'SocialGroup', 'socialgroup', 'members');
    }
    public static function pictureCount() : ColumnField
    {
        return new ColumnField('pictureCount', 'SocialGroup', 'socialgroup', 'picturecount');
    }
    public static function lastPost() : ColumnField
    {
        return new ColumnField('lastPost', 'SocialGroup', 'socialgroup', 'lastpost');
    }
    public static function lastPoster() : ColumnField
    {
        return new ColumnField('lastPoster', 'SocialGroup', 'socialgroup', 'lastposter');
    }
    public static function lastPosterId() : ColumnField
    {
        return new ColumnField('lastPosterId', 'SocialGroup', 'socialgroup', 'lastposterid');
    }
    public static function lastGmId() : ColumnField
    {
        return new ColumnField('lastGmId', 'SocialGroup', 'socialgroup', 'lastgmid');
    }
    public static function visible() : ColumnField
    {
        return new ColumnField('visible', 'SocialGroup', 'socialgroup', 'visible');
    }
    public static function deleted() : ColumnField
    {
        return new ColumnField('deleted', 'SocialGroup', 'socialgroup', 'deleted');
    }
    public static function moderation() : ColumnField
    {
        return new ColumnField('moderation', 'SocialGroup', 'socialgroup', 'moderation');
    }
    public static function type() : ColumnField
    {
        return new ColumnField('type', 'SocialGroup', 'socialgroup', 'type');
    }
    public static function moderatedMembers() : ColumnField
    {
        return new ColumnField('moderatedMembers', 'SocialGroup', 'socialgroup', 'moderatedmembers');
    }
    public static function options() : ColumnField
    {
        return new ColumnField('options', 'SocialGroup', 'socialgroup', 'options');
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
}