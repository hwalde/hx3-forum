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
use businesslogic\forum\ForumRecord;

class ForumAlias extends TableAlias {
   
    public function forumId() : ColumnField
    {
        return new ColumnField('forum', 'forumid', $this->getAliasName());
    }
    public function styleId() : ColumnField
    {
        return new ColumnField('forum', 'styleid', $this->getAliasName());
    }
    public function title() : ColumnField
    {
        return new ColumnField('forum', 'title', $this->getAliasName());
    }
    public function description() : ColumnField
    {
        return new ColumnField('forum', 'description', $this->getAliasName());
    }
    public function options() : ColumnField
    {
        return new ColumnField('forum', 'options', $this->getAliasName());
    }
    public function displayOrder() : ColumnField
    {
        return new ColumnField('forum', 'displayorder', $this->getAliasName());
    }
    public function replyCount() : ColumnField
    {
        return new ColumnField('forum', 'replycount', $this->getAliasName());
    }
    public function lastPost() : ColumnField
    {
        return new ColumnField('forum', 'lastpost', $this->getAliasName());
    }
    public function lastPoster() : ColumnField
    {
        return new ColumnField('forum', 'lastposter', $this->getAliasName());
    }
    public function lastThread() : ColumnField
    {
        return new ColumnField('forum', 'lastthread', $this->getAliasName());
    }
    public function lastThreadId() : ColumnField
    {
        return new ColumnField('forum', 'lastthreadid', $this->getAliasName());
    }
    public function lastIconId() : ColumnField
    {
        return new ColumnField('forum', 'lasticonid', $this->getAliasName());
    }
    public function threadCount() : ColumnField
    {
        return new ColumnField('forum', 'threadcount', $this->getAliasName());
    }
    public function daysPrune() : ColumnField
    {
        return new ColumnField('forum', 'daysprune', $this->getAliasName());
    }
    public function newPostEmail() : ColumnField
    {
        return new ColumnField('forum', 'newpostemail', $this->getAliasName());
    }
    public function newThreadEmail() : ColumnField
    {
        return new ColumnField('forum', 'newthreademail', $this->getAliasName());
    }
    public function parentId() : ColumnField
    {
        return new ColumnField('forum', 'parentid', $this->getAliasName());
    }
    public function parentList() : ColumnField
    {
        return new ColumnField('forum', 'parentlist', $this->getAliasName());
    }
    public function password() : ColumnField
    {
        return new ColumnField('forum', 'password', $this->getAliasName());
    }
    public function link() : ColumnField
    {
        return new ColumnField('forum', 'link', $this->getAliasName());
    }
    public function childList() : ColumnField
    {
        return new ColumnField('forum', 'childlist', $this->getAliasName());
    }
    public function importForumId() : ColumnField
    {
        return new ColumnField('forum', 'importforumid', $this->getAliasName());
    }
    public function importCategoryId() : ColumnField
    {
        return new ColumnField('forum', 'importcategoryid', $this->getAliasName());
    }
    public function titleClean() : ColumnField
    {
        return new ColumnField('forum', 'title_clean', $this->getAliasName());
    }
    public function descriptionClean() : ColumnField
    {
        return new ColumnField('forum', 'description_clean', $this->getAliasName());
    }
    public function lastPostId() : ColumnField
    {
        return new ColumnField('forum', 'lastpostid', $this->getAliasName());
    }
    public function showPrivate() : ColumnField
    {
        return new ColumnField('forum', 'showprivate', $this->getAliasName());
    }
    public function defaultSortField() : ColumnField
    {
        return new ColumnField('forum', 'defaultsortfield', $this->getAliasName());
    }
    public function defaultSortOrder() : ColumnField
    {
        return new ColumnField('forum', 'defaultsortorder', $this->getAliasName());
    }
    public function vbSeoModeratePingbacks() : ColumnField
    {
        return new ColumnField('forum', 'vbseo_moderatepingbacks', $this->getAliasName());
    }
    public function vbSeoModerateTrackbacks() : ColumnField
    {
        return new ColumnField('forum', 'vbseo_moderatetrackbacks', $this->getAliasName());
    }
    public function vbSeoModerateRefbacks() : ColumnField
    {
        return new ColumnField('forum', 'vbseo_moderaterefbacks', $this->getAliasName());
    }
    public function lastPrefixId() : ColumnField
    {
        return new ColumnField('forum', 'lastprefixid', $this->getAliasName());
    }
    public function imagePrefix() : ColumnField
    {
        return new ColumnField('forum', 'imageprefix', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'forum';
    }
    
    public function __listColumns() : array
    {
        return ['forumid', 'styleid', 'title', 'description', 'options', 'displayorder', 'replycount', 'lastpost', 'lastposter', 'lastthread', 'lastthreadid', 'lasticonid', 'threadcount', 'daysprune', 'newpostemail', 'newthreademail', 'parentid', 'parentlist', 'password', 'link', 'childlist', 'importforumid', 'importcategoryid', 'title_clean', 'description_clean', 'lastpostid', 'showprivate', 'defaultsortfield', 'defaultsortorder', 'vbseo_moderatepingbacks', 'vbseo_moderatetrackbacks', 'vbseo_moderaterefbacks', 'lastprefixid', 'imageprefix'];
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->forumId(),
			$this->styleId(),
			$this->title(),
			$this->description(),
			$this->options(),
			$this->displayOrder(),
			$this->replyCount(),
			$this->lastPost(),
			$this->lastPoster(),
			$this->lastThread(),
			$this->lastThreadId(),
			$this->lastIconId(),
			$this->threadCount(),
			$this->daysPrune(),
			$this->newPostEmail(),
			$this->newThreadEmail(),
			$this->parentId(),
			$this->parentList(),
			$this->password(),
			$this->link(),
			$this->childList(),
			$this->importForumId(),
			$this->importCategoryId(),
			$this->titleClean(),
			$this->descriptionClean(),
			$this->lastPostId(),
			$this->showPrivate(),
			$this->defaultSortField(),
			$this->defaultSortOrder(),
			$this->vbSeoModeratePingbacks(),
			$this->vbSeoModerateTrackbacks(),
			$this->vbSeoModerateRefbacks(),
			$this->lastPrefixId(),
			$this->imagePrefix()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : ForumRecord
    {
        return new ForumRecord();
    }
}