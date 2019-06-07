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

use POOQ\AbstractUpdateableRecord;
use POOQ\UpdateableRecord;

class GeneratedTagSearchRecord extends AbstractUpdateableRecord implements UpdateableRecord {
    
    /** @var $tagId int */
    protected $tagId;
    
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
    public function __getModel(): TagSearch
    {
        return new TagSearch();
    }
}