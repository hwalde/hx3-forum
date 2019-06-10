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

use POOQ\RecordValue;
use POOQ\Record;

class GeneratedPostIndexRecord implements Record {
    
    /** @var $wordId RecordValue */
    protected $wordId;
    
    /** @var $postId RecordValue */
    protected $postId;
    
    /** @var $inTitle RecordValue */
    protected $inTitle;
    
    /** @var $score RecordValue */
    protected $score;

    public function __construct() {
		$this->wordId = new RecordValue();
		$this->postId = new RecordValue();
		$this->inTitle = new RecordValue();
		$this->score = new RecordValue();
    }
    
    public function hasWordId(): bool
    {
        return $this->wordId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getWordId() : int
    {
        return $this->wordId->getValue();
    }

    /**
     * @param int $wordId
     */
    public function setWordId(int $wordId)
    {
        $this->wordId->setChanged(true);
        $this->wordId->setValue($wordId);
    }
    
    public function hasPostId(): bool
    {
        return $this->postId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPostId() : int
    {
        return $this->postId->getValue();
    }

    /**
     * @param int $postId
     */
    public function setPostId(int $postId)
    {
        $this->postId->setChanged(true);
        $this->postId->setValue($postId);
    }
    
    public function hasInTitle(): bool
    {
        return $this->inTitle->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getInTitle() : int
    {
        return $this->inTitle->getValue();
    }

    /**
     * @param int $inTitle
     */
    public function setInTitle(int $inTitle)
    {
        $this->inTitle->setChanged(true);
        $this->inTitle->setValue($inTitle);
    }
    
    public function hasScore(): bool
    {
        return $this->score->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getScore() : int
    {
        return $this->score->getValue();
    }

    /**
     * @param int $score
     */
    public function setScore(int $score)
    {
        $this->score->setChanged(true);
        $this->score->setValue($score);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PostIndex
    {
        return new PostIndex();
    }
}