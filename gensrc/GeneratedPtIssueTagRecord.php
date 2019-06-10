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

class GeneratedPtIssueTagRecord implements Record {
    
    /** @var $issueId RecordValue */
    protected $issueId;
    
    /** @var $tagId RecordValue */
    protected $tagId;

    public function __construct() {
		$this->issueId = new RecordValue();
		$this->tagId = new RecordValue();
    }
    
    public function hasIssueId(): bool
    {
        return $this->issueId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getIssueId() : int
    {
        return $this->issueId->getValue();
    }

    /**
     * @param int $issueId
     */
    public function setIssueId(int $issueId)
    {
        $this->issueId->setChanged(true);
        $this->issueId->setValue($issueId);
    }
    
    public function hasTagId(): bool
    {
        return $this->tagId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getTagId() : int
    {
        return $this->tagId->getValue();
    }

    /**
     * @param int $tagId
     */
    public function setTagId(int $tagId)
    {
        $this->tagId->setChanged(true);
        $this->tagId->setValue($tagId);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PtIssueTag
    {
        return new PtIssueTag();
    }
}