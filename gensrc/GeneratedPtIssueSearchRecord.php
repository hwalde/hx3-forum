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

class GeneratedPtIssueSearchRecord implements Record {
    
    /** @var $issueSearchId int */
    protected $issueSearchId;
    
    /** @var $userId int */
    protected $userId;
    
    /** @var $ipAddress string */
    protected $ipAddress;
    
    /** @var $criteria string */
    protected $criteria;
    
    /** @var $sortBy string */
    protected $sortBy;
    
    /** @var $sortOrder string */
    protected $sortOrder;
    
    /** @var $groupBy string */
    protected $groupBy;
    
    /** @var $searchTime mixed */
    protected $searchTime;
    
    /** @var $resultCount int */
    protected $resultCount;
    
    /** @var $dateLine int */
    protected $dateLine;
    
    /** @var $completed int */
    protected $completed;
    
    /** @var $issueReportId int */
    protected $issueReportId;
    
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
    
    public function hasUserId(): bool
    {
        return isset($this->userId);
    }    

    /**
     * @return int
     */
    public function getUserId() : int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId(int $userId)
    {
        $this->userId = $userId;
    }
    
    public function hasIpAddress(): bool
    {
        return isset($this->ipAddress);
    }    

    /**
     * @return string
     */
    public function getIpAddress() : string
    {
        return $this->ipAddress;
    }

    /**
     * @param string $ipAddress
     */
    public function setIpAddress(string $ipAddress)
    {
        $this->ipAddress = $ipAddress;
    }
    
    public function hasCriteria(): bool
    {
        return isset($this->criteria);
    }    

    /**
     * @return string
     */
    public function getCriteria() : string
    {
        return $this->criteria;
    }

    /**
     * @param string $criteria
     */
    public function setCriteria(string $criteria)
    {
        $this->criteria = $criteria;
    }
    
    public function hasSortBy(): bool
    {
        return isset($this->sortBy);
    }    

    /**
     * @return string
     */
    public function getSortBy() : string
    {
        return $this->sortBy;
    }

    /**
     * @param string $sortBy
     */
    public function setSortBy(string $sortBy)
    {
        $this->sortBy = $sortBy;
    }
    
    public function hasSortOrder(): bool
    {
        return isset($this->sortOrder);
    }    

    /**
     * @return string
     */
    public function getSortOrder() : string
    {
        return $this->sortOrder;
    }

    /**
     * @param string $sortOrder
     */
    public function setSortOrder(string $sortOrder)
    {
        $this->sortOrder = $sortOrder;
    }
    
    public function hasGroupBy(): bool
    {
        return isset($this->groupBy);
    }    

    /**
     * @return string
     */
    public function getGroupBy() : string
    {
        return $this->groupBy;
    }

    /**
     * @param string $groupBy
     */
    public function setGroupBy(string $groupBy)
    {
        $this->groupBy = $groupBy;
    }
    
    public function hasSearchTime(): bool
    {
        return isset($this->searchTime);
    }    

    /**
     * @return mixed
     */
    public function getSearchTime()
    {
        return $this->searchTime;
    }

    /**
     * @param mixed $searchTime
     */
    public function setSearchTime($searchTime)
    {
        $this->searchTime = $searchTime;
    }
    
    public function hasResultCount(): bool
    {
        return isset($this->resultCount);
    }    

    /**
     * @return int
     */
    public function getResultCount() : int
    {
        return $this->resultCount;
    }

    /**
     * @param int $resultCount
     */
    public function setResultCount(int $resultCount)
    {
        $this->resultCount = $resultCount;
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
    
    public function hasCompleted(): bool
    {
        return isset($this->completed);
    }    

    /**
     * @return int
     */
    public function getCompleted() : int
    {
        return $this->completed;
    }

    /**
     * @param int $completed
     */
    public function setCompleted(int $completed)
    {
        $this->completed = $completed;
    }
    
    public function hasIssueReportId(): bool
    {
        return isset($this->issueReportId);
    }    

    /**
     * @return int
     */
    public function getIssueReportId() : int
    {
        return $this->issueReportId;
    }

    /**
     * @param int $issueReportId
     */
    public function setIssueReportId(int $issueReportId)
    {
        $this->issueReportId = $issueReportId;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PtIssueSearch
    {
        return new PtIssueSearch();
    }
}