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

use POOQ\Record;

class GeneratedPostIndexRecord implements Record {
    
    /** @var $wordId int */
    private $wordId;
    
    /** @var $postId int */
    private $postId;
    
    /** @var $inTitle int */
    private $inTitle;
    
    /** @var $score int */
    private $score;
    
    public function hasWordId(): bool
    {
        return isset($this->wordId);
    }    

    /**
     * @return int
     */
    public function getWordId() : int
    {
        return $this->wordId;
    }

    /**
     * @param int $wordId
     */
    public function setWordId(int $wordId)
    {
        $this->wordId = $wordId;
    }
    
    public function hasPostId(): bool
    {
        return isset($this->postId);
    }    

    /**
     * @return int
     */
    public function getPostId() : int
    {
        return $this->postId;
    }

    /**
     * @param int $postId
     */
    public function setPostId(int $postId)
    {
        $this->postId = $postId;
    }
    
    public function hasInTitle(): bool
    {
        return isset($this->inTitle);
    }    

    /**
     * @return int
     */
    public function getInTitle() : int
    {
        return $this->inTitle;
    }

    /**
     * @param int $inTitle
     */
    public function setInTitle(int $inTitle)
    {
        $this->inTitle = $inTitle;
    }
    
    public function hasScore(): bool
    {
        return isset($this->score);
    }    

    /**
     * @return int
     */
    public function getScore() : int
    {
        return $this->score;
    }

    /**
     * @param int $score
     */
    public function setScore(int $score)
    {
        $this->score = $score;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PostIndex
    {
        return new PostIndex();
    }
}