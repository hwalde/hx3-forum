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

class GeneratedPtIssueSearchResultRecord implements Record {
    
    /** @var $issueSearchId int */
    private $issueSearchId;
    
    /** @var $issueId int */
    private $issueId;
    
    /** @var $offset int */
    private $offset;
    
    /** @var $groupId string */
    private $groupId;
    
    public function hasIssueSearchId(): bool
    {
        return isset($this->issueSearchId);
    }    

    /**
     * @return int
     */
    public function getIssueSearchId() : int
    {
        return $this->issueSearchId;
    }

    /**
     * @param int $issueSearchId
     */
    public function setIssueSearchId(int $issueSearchId)
    {
        $this->issueSearchId = $issueSearchId;
    }
    
    public function hasIssueId(): bool
    {
        return isset($this->issueId);
    }    

    /**
     * @return int
     */
    public function getIssueId() : int
    {
        return $this->issueId;
    }

    /**
     * @param int $issueId
     */
    public function setIssueId(int $issueId)
    {
        $this->issueId = $issueId;
    }
    
    public function hasOffset(): bool
    {
        return isset($this->offset);
    }    

    /**
     * @return int
     */
    public function getOffset() : int
    {
        return $this->offset;
    }

    /**
     * @param int $offset
     */
    public function setOffset(int $offset)
    {
        $this->offset = $offset;
    }
    
    public function hasGroupId(): bool
    {
        return isset($this->groupId);
    }    

    /**
     * @return string
     */
    public function getGroupId() : string
    {
        return $this->groupId;
    }

    /**
     * @param string $groupId
     */
    public function setGroupId(string $groupId)
    {
        $this->groupId = $groupId;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PtIssueSearchResult
    {
        return new PtIssueSearchResult();
    }
}