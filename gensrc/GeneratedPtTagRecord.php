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

class GeneratedPtTagRecord implements Record {
    
    /** @var $tagId int */
    private $tagId;
    
    /** @var $tagText string */
    private $tagText;
    
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

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PtTag
    {
        return new PtTag();
    }
}