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
use businesslogic\forum\ForumRecord;

class Forum implements Table {

    const table = 'forum';
   
    public static function as(string $aliasName): ForumAlias
    {
        return new ForumAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::forumId(),
			self::styleId(),
			self::title(),
			self::description(),
			self::options(),
			self::displayOrder(),
			self::replyCount(),
			self::lastPost(),
			self::lastPoster(),
			self::lastThread(),
			self::lastThreadId(),
			self::lastIconId(),
			self::threadCount(),
			self::daysPrune(),
			self::newPostEmail(),
			self::newThreadEmail(),
			self::parentId(),
			self::parentList(),
			self::password(),
			self::link(),
			self::childList(),
			self::importForumId(),
			self::importCategoryId(),
			self::titleClean(),
			self::descriptionClean(),
			self::lastPostId(),
			self::showPrivate(),
			self::defaultSortField(),
			self::defaultSortOrder(),
			self::vbSeoModeratePingbacks(),
			self::vbSeoModerateTrackbacks(),
			self::vbSeoModerateRefbacks(),
			self::lastPrefixId(),
			self::imagePrefix()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : ForumRecord
    {
        return new ForumRecord();
    }
    
    public static function forumId() : ColumnField
    {
        return new ColumnField('forumId', 'Forum', 'forum', 'forumid');
    }
    public static function styleId() : ColumnField
    {
        return new ColumnField('styleId', 'Forum', 'forum', 'styleid');
    }
    public static function title() : ColumnField
    {
        return new ColumnField('title', 'Forum', 'forum', 'title');
    }
    public static function description() : ColumnField
    {
        return new ColumnField('description', 'Forum', 'forum', 'description');
    }
    public static function options() : ColumnField
    {
        return new ColumnField('options', 'Forum', 'forum', 'options');
    }
    public static function displayOrder() : ColumnField
    {
        return new ColumnField('displayOrder', 'Forum', 'forum', 'displayorder');
    }
    public static function replyCount() : ColumnField
    {
        return new ColumnField('replyCount', 'Forum', 'forum', 'replycount');
    }
    public static function lastPost() : ColumnField
    {
        return new ColumnField('lastPost', 'Forum', 'forum', 'lastpost');
    }
    public static function lastPoster() : ColumnField
    {
        return new ColumnField('lastPoster', 'Forum', 'forum', 'lastposter');
    }
    public static function lastThread() : ColumnField
    {
        return new ColumnField('lastThread', 'Forum', 'forum', 'lastthread');
    }
    public static function lastThreadId() : ColumnField
    {
        return new ColumnField('lastThreadId', 'Forum', 'forum', 'lastthreadid');
    }
    public static function lastIconId() : ColumnField
    {
        return new ColumnField('lastIconId', 'Forum', 'forum', 'lasticonid');
    }
    public static function threadCount() : ColumnField
    {
        return new ColumnField('threadCount', 'Forum', 'forum', 'threadcount');
    }
    public static function daysPrune() : ColumnField
    {
        return new ColumnField('daysPrune', 'Forum', 'forum', 'daysprune');
    }
    public static function newPostEmail() : ColumnField
    {
        return new ColumnField('newPostEmail', 'Forum', 'forum', 'newpostemail');
    }
    public static function newThreadEmail() : ColumnField
    {
        return new ColumnField('newThreadEmail', 'Forum', 'forum', 'newthreademail');
    }
    public static function parentId() : ColumnField
    {
        return new ColumnField('parentId', 'Forum', 'forum', 'parentid');
    }
    public static function parentList() : ColumnField
    {
        return new ColumnField('parentList', 'Forum', 'forum', 'parentlist');
    }
    public static function password() : ColumnField
    {
        return new ColumnField('password', 'Forum', 'forum', 'password');
    }
    public static function link() : ColumnField
    {
        return new ColumnField('link', 'Forum', 'forum', 'link');
    }
    public static function childList() : ColumnField
    {
        return new ColumnField('childList', 'Forum', 'forum', 'childlist');
    }
    public static function importForumId() : ColumnField
    {
        return new ColumnField('importForumId', 'Forum', 'forum', 'importforumid');
    }
    public static function importCategoryId() : ColumnField
    {
        return new ColumnField('importCategoryId', 'Forum', 'forum', 'importcategoryid');
    }
    public static function titleClean() : ColumnField
    {
        return new ColumnField('titleClean', 'Forum', 'forum', 'title_clean');
    }
    public static function descriptionClean() : ColumnField
    {
        return new ColumnField('descriptionClean', 'Forum', 'forum', 'description_clean');
    }
    public static function lastPostId() : ColumnField
    {
        return new ColumnField('lastPostId', 'Forum', 'forum', 'lastpostid');
    }
    public static function showPrivate() : ColumnField
    {
        return new ColumnField('showPrivate', 'Forum', 'forum', 'showprivate');
    }
    public static function defaultSortField() : ColumnField
    {
        return new ColumnField('defaultSortField', 'Forum', 'forum', 'defaultsortfield');
    }
    public static function defaultSortOrder() : ColumnField
    {
        return new ColumnField('defaultSortOrder', 'Forum', 'forum', 'defaultsortorder');
    }
    public static function vbSeoModeratePingbacks() : ColumnField
    {
        return new ColumnField('vbSeoModeratePingbacks', 'Forum', 'forum', 'vbseo_moderatepingbacks');
    }
    public static function vbSeoModerateTrackbacks() : ColumnField
    {
        return new ColumnField('vbSeoModerateTrackbacks', 'Forum', 'forum', 'vbseo_moderatetrackbacks');
    }
    public static function vbSeoModerateRefbacks() : ColumnField
    {
        return new ColumnField('vbSeoModerateRefbacks', 'Forum', 'forum', 'vbseo_moderaterefbacks');
    }
    public static function lastPrefixId() : ColumnField
    {
        return new ColumnField('lastPrefixId', 'Forum', 'forum', 'lastprefixid');
    }
    public static function imagePrefix() : ColumnField
    {
        return new ColumnField('imagePrefix', 'Forum', 'forum', 'imageprefix');
    }

    public function getTableName(): string
    {
        return 'forum';
    }
    
    public function __listColumns() : array
    {
        return ['forumid', 'styleid', 'title', 'description', 'options', 'displayorder', 'replycount', 'lastpost', 'lastposter', 'lastthread', 'lastthreadid', 'lasticonid', 'threadcount', 'daysprune', 'newpostemail', 'newthreademail', 'parentid', 'parentlist', 'password', 'link', 'childlist', 'importforumid', 'importcategoryid', 'title_clean', 'description_clean', 'lastpostid', 'showprivate', 'defaultsortfield', 'defaultsortorder', 'vbseo_moderatepingbacks', 'vbseo_moderatetrackbacks', 'vbseo_moderaterefbacks', 'lastprefixid', 'imageprefix'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['forumid'];
    }
    
    public function __listNullableColumns() : array
    {
        return ['newpostemail', 'newthreademail', 'childlist'];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'forumid' => 'integer', 
			'styleid' => 'integer', 
			'title' => 'string', 
			'description' => 'string', 
			'options' => 'integer', 
			'displayorder' => 'integer', 
			'replycount' => 'integer', 
			'lastpost' => 'integer', 
			'lastposter' => 'string', 
			'lastthread' => 'string', 
			'lastthreadid' => 'integer', 
			'lasticonid' => 'integer', 
			'threadcount' => 'integer', 
			'daysprune' => 'integer', 
			'newpostemail' => 'string', 
			'newthreademail' => 'string', 
			'parentid' => 'integer', 
			'parentlist' => 'string', 
			'password' => 'string', 
			'link' => 'string', 
			'childlist' => 'string', 
			'importforumid' => 'integer', 
			'importcategoryid' => 'integer', 
			'title_clean' => 'string', 
			'description_clean' => 'string', 
			'lastpostid' => 'integer', 
			'showprivate' => 'integer', 
			'defaultsortfield' => 'string', 
			'defaultsortorder' => 'string', 
			'vbseo_moderatepingbacks' => 'integer', 
			'vbseo_moderatetrackbacks' => 'integer', 
			'vbseo_moderaterefbacks' => 'integer', 
			'lastprefixid' => 'string', 
			'imageprefix' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'forumid' => 'forumId', 
			'styleid' => 'styleId', 
			'title' => 'title', 
			'description' => 'description', 
			'options' => 'options', 
			'displayorder' => 'displayOrder', 
			'replycount' => 'replyCount', 
			'lastpost' => 'lastPost', 
			'lastposter' => 'lastPoster', 
			'lastthread' => 'lastThread', 
			'lastthreadid' => 'lastThreadId', 
			'lasticonid' => 'lastIconId', 
			'threadcount' => 'threadCount', 
			'daysprune' => 'daysPrune', 
			'newpostemail' => 'newPostEmail', 
			'newthreademail' => 'newThreadEmail', 
			'parentid' => 'parentId', 
			'parentlist' => 'parentList', 
			'password' => 'password', 
			'link' => 'link', 
			'childlist' => 'childList', 
			'importforumid' => 'importForumId', 
			'importcategoryid' => 'importCategoryId', 
			'title_clean' => 'titleClean', 
			'description_clean' => 'descriptionClean', 
			'lastpostid' => 'lastPostId', 
			'showprivate' => 'showPrivate', 
			'defaultsortfield' => 'defaultSortField', 
			'defaultsortorder' => 'defaultSortOrder', 
			'vbseo_moderatepingbacks' => 'vbSeoModeratePingbacks', 
			'vbseo_moderatetrackbacks' => 'vbSeoModerateTrackbacks', 
			'vbseo_moderaterefbacks' => 'vbSeoModerateRefbacks', 
			'lastprefixid' => 'lastPrefixId', 
			'imageprefix' => 'imagePrefix'
		];
    }
}