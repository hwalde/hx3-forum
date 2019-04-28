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

class GeneratedWordRecord implements Record {
    
    /** @var $wordId int */
    private $wordId;
    
    /** @var $title string */
    private $title;
    
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
    
    public function hasTitle(): bool
    {
        return isset($this->title);
    }    

    /**
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Word
    {
        return new Word();
    }
}