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

class GeneratedTagRecord implements Record {
    
    /** @var $tagId int */
    protected $tagId;
    
    /** @var $tagText string */
    protected $tagText;
    
    /** @var $dateLine int */
    protected $dateLine;
    
    public function hasTagId(): bool
    {
        return isset($this->tagId);
    }    

    /**
     * @return int
     */
    public function getTagId() : int
    {
        return $this->tagId;
    }

    /**
     * @param int $tagId
     */
    public function setTagId(int $tagId)
    {
        $this->tagId = $tagId;
    }
    
    public function hasTagText(): bool
    {
        return isset($this->tagText);
    }    

    /**
     * @return string
     */
    public function getTagText() : string
    {
        return $this->tagText;
    }

    /**
     * @param string $tagText
     */
    public function setTagText(string $tagText)
    {
        $this->tagText = $tagText;
    }
    
    public function hasDateLine(): bool
    {
        return isset($this->dateLine);
    }    

    /**
     * @return int
     */
    public function getDateLine() : int
    {
        return $this->dateLine;
    }

    /**
     * @param int $dateLine
     */
    public function setDateLine(int $dateLine)
    {
        $this->dateLine = $dateLine;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Tag
    {
        return new Tag();
    }
}