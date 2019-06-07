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

class PodcastAlias extends TableAlias {
   
    public function forumId() : ColumnField
    {
        return new ColumnField('forumId', 'Podcast', 'podcast', 'forumid', $this->getAliasName());
    }
    public function author() : ColumnField
    {
        return new ColumnField('author', 'Podcast', 'podcast', 'author', $this->getAliasName());
    }
    public function category() : ColumnField
    {
        return new ColumnField('category', 'Podcast', 'podcast', 'category', $this->getAliasName());
    }
    public function image() : ColumnField
    {
        return new ColumnField('image', 'Podcast', 'podcast', 'image', $this->getAliasName());
    }
    public function explicit() : ColumnField
    {
        return new ColumnField('explicit', 'Podcast', 'podcast', 'explicit', $this->getAliasName());
    }
    public function enabled() : ColumnField
    {
        return new ColumnField('enabled', 'Podcast', 'podcast', 'enabled', $this->getAliasName());
    }
    public function keywords() : ColumnField
    {
        return new ColumnField('keywords', 'Podcast', 'podcast', 'keywords', $this->getAliasName());
    }
    public function ownerEmail() : ColumnField
    {
        return new ColumnField('ownerEmail', 'Podcast', 'podcast', 'owneremail', $this->getAliasName());
    }
    public function ownerName() : ColumnField
    {
        return new ColumnField('ownerName', 'Podcast', 'podcast', 'ownername', $this->getAliasName());
    }
    public function subTitle() : ColumnField
    {
        return new ColumnField('subTitle', 'Podcast', 'podcast', 'subtitle', $this->getAliasName());
    }
    public function summary() : ColumnField
    {
        return new ColumnField('summary', 'Podcast', 'podcast', 'summary', $this->getAliasName());
    }
    public function categoryId() : ColumnField
    {
        return new ColumnField('categoryId', 'Podcast', 'podcast', 'categoryid', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'podcast';
    }
    
    public function __listColumns() : array
    {
        return ['forumid', 'author', 'category', 'image', 'explicit', 'enabled', 'keywords', 'owneremail', 'ownername', 'subtitle', 'summary', 'categoryid'];
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
        return ['summary'];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'forumid' => 'integer', 
			'author' => 'string', 
			'category' => 'string', 
			'image' => 'string', 
			'explicit' => 'integer', 
			'enabled' => 'integer', 
			'keywords' => 'string', 
			'owneremail' => 'string', 
			'ownername' => 'string', 
			'subtitle' => 'string', 
			'summary' => 'string', 
			'categoryid' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'forumid' => 'forumId', 
			'author' => 'author', 
			'category' => 'category', 
			'image' => 'image', 
			'explicit' => 'explicit', 
			'enabled' => 'enabled', 
			'keywords' => 'keywords', 
			'owneremail' => 'ownerEmail', 
			'ownername' => 'ownerName', 
			'subtitle' => 'subTitle', 
			'summary' => 'summary', 
			'categoryid' => 'categoryId'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->forumId(),
			$this->author(),
			$this->category(),
			$this->image(),
			$this->explicit(),
			$this->enabled(),
			$this->keywords(),
			$this->ownerEmail(),
			$this->ownerName(),
			$this->subTitle(),
			$this->summary(),
			$this->categoryId()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PodcastRecord
    {
        return new PodcastRecord();
    }
}