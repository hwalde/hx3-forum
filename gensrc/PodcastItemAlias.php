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

class PodcastItemAlias extends TableAlias {
   
    public function postId() : ColumnField
    {
        return new ColumnField('postId', 'PodcastItem', 'podcastitem', 'postid', $this->getAliasName());
    }
    public function url() : ColumnField
    {
        return new ColumnField('url', 'PodcastItem', 'podcastitem', 'url', $this->getAliasName());
    }
    public function length() : ColumnField
    {
        return new ColumnField('length', 'PodcastItem', 'podcastitem', 'length', $this->getAliasName());
    }
    public function explicit() : ColumnField
    {
        return new ColumnField('explicit', 'PodcastItem', 'podcastitem', 'explicit', $this->getAliasName());
    }
    public function keywords() : ColumnField
    {
        return new ColumnField('keywords', 'PodcastItem', 'podcastitem', 'keywords', $this->getAliasName());
    }
    public function subTitle() : ColumnField
    {
        return new ColumnField('subTitle', 'PodcastItem', 'podcastitem', 'subtitle', $this->getAliasName());
    }
    public function author() : ColumnField
    {
        return new ColumnField('author', 'PodcastItem', 'podcastitem', 'author', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'podcastitem';
    }
    
    public function __listColumns() : array
    {
        return ['postid', 'url', 'length', 'explicit', 'keywords', 'subtitle', 'author'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['postid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'postid' => 'integer', 
			'url' => 'string', 
			'length' => 'integer', 
			'explicit' => 'integer', 
			'keywords' => 'string', 
			'subtitle' => 'string', 
			'author' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'postid' => 'postId', 
			'url' => 'url', 
			'length' => 'length', 
			'explicit' => 'explicit', 
			'keywords' => 'keywords', 
			'subtitle' => 'subTitle', 
			'author' => 'author'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->postId(),
			$this->url(),
			$this->length(),
			$this->explicit(),
			$this->keywords(),
			$this->subTitle(),
			$this->author()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PodcastItemRecord
    {
        return new PodcastItemRecord();
    }
}