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

class PostIndexAlias extends TableAlias {
   
    public function wordId() : ColumnField
    {
        return new ColumnField('postindex', 'wordid', $this->getAliasName());
    }
    public function postId() : ColumnField
    {
        return new ColumnField('postindex', 'postid', $this->getAliasName());
    }
    public function inTitle() : ColumnField
    {
        return new ColumnField('postindex', 'intitle', $this->getAliasName());
    }
    public function score() : ColumnField
    {
        return new ColumnField('postindex', 'score', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'postindex';
    }
    
    public function __listColumns() : array
    {
        return ['wordid', 'postid', 'intitle', 'score'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'wordid' => 'integer', 
			'postid' => 'integer', 
			'intitle' => 'integer', 
			'score' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'wordid' => 'wordId', 
			'postid' => 'postId', 
			'intitle' => 'inTitle', 
			'score' => 'score'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->wordId(),
			$this->postId(),
			$this->inTitle(),
			$this->score()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : PostIndexRecord
    {
        return new PostIndexRecord();
    }
}