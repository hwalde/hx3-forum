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

class GeneratedPtIssueSearchResultRecord implements Record {
    
    /** @var $issueSearchId RecordValue */
    protected $issueSearchId;
    
    /** @var $issueId RecordValue */
    protected $issueId;
    
    /** @var $offset RecordValue */
    protected $offset;
    
    /** @var $groupId RecordValue */
    protected $groupId;

    public function __construct() {
		$this->issueSearchId = new RecordValue();
		$this->issueId = new RecordValue();
		$this->offset = new RecordValue();
		$this->groupId = new RecordValue();
    }
    
    public function hasIssueSearchId(): bool
    {
        return $this->issueSearchId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getIssueSearchId() : int
    {
        return $this->issueSearchId->getValue();
    }

    /**
     * @param int $issueSearchId
     */
    public function setIssueSearchId(int $issueSearchId)
    {
        $this->issueSearchId->setChanged(true);
        $this->issueSearchId->setValue($issueSearchId);
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
    
    public function hasOffset(): bool
    {
        return $this->offset->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getOffset() : int
    {
        return $this->offset->getValue();
    }

    /**
     * @param int $offset
     */
    public function setOffset(int $offset)
    {
        $this->offset->setChanged(true);
        $this->offset->setValue($offset);
    }
    
    public function hasGroupId(): bool
    {
        return $this->groupId->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getGroupId() : string
    {
        return $this->groupId->getValue();
    }

    /**
     * @param string $groupId
     */
    public function setGroupId(string $groupId)
    {
        $this->groupId->setChanged(true);
        $this->groupId->setValue($groupId);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PtIssueSearchResult
    {
        return new PtIssueSearchResult();
    }
}