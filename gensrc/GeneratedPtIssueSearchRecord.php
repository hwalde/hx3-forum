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

class GeneratedPtIssueSearchRecord implements Record {
    
    /** @var $issueSearchId RecordValue */
    protected $issueSearchId;
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $ipAddress RecordValue */
    protected $ipAddress;
    
    /** @var $criteria RecordValue */
    protected $criteria;
    
    /** @var $sortBy RecordValue */
    protected $sortBy;
    
    /** @var $sortOrder RecordValue */
    protected $sortOrder;
    
    /** @var $groupBy RecordValue */
    protected $groupBy;
    
    /** @var $searchTime RecordValue */
    protected $searchTime;
    
    /** @var $resultCount RecordValue */
    protected $resultCount;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;
    
    /** @var $completed RecordValue */
    protected $completed;
    
    /** @var $issueReportId RecordValue */
    protected $issueReportId;

    public function __construct() {
		$this->issueSearchId = new RecordValue();
		$this->userId = new RecordValue();
		$this->ipAddress = new RecordValue();
		$this->criteria = new RecordValue();
		$this->sortBy = new RecordValue();
		$this->sortOrder = new RecordValue();
		$this->groupBy = new RecordValue();
		$this->searchTime = new RecordValue();
		$this->resultCount = new RecordValue();
		$this->dateLine = new RecordValue();
		$this->completed = new RecordValue();
		$this->issueReportId = new RecordValue();
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
    
    public function hasUserId(): bool
    {
        return $this->userId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getUserId() : int
    {
        return $this->userId->getValue();
    }

    /**
     * @param int $userId
     */
    public function setUserId(int $userId)
    {
        $this->userId->setChanged(true);
        $this->userId->setValue($userId);
    }
    
    public function hasIpAddress(): bool
    {
        return $this->ipAddress->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getIpAddress() : string
    {
        return $this->ipAddress->getValue();
    }

    /**
     * @param string $ipAddress
     */
    public function setIpAddress(string $ipAddress)
    {
        $this->ipAddress->setChanged(true);
        $this->ipAddress->setValue($ipAddress);
    }
    
    public function hasCriteria(): bool
    {
        return $this->criteria->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getCriteria() : string
    {
        return $this->criteria->getValue();
    }

    /**
     * @param string $criteria
     */
    public function setCriteria(string $criteria)
    {
        $this->criteria->setChanged(true);
        $this->criteria->setValue($criteria);
    }
    
    public function hasSortBy(): bool
    {
        return $this->sortBy->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getSortBy() : string
    {
        return $this->sortBy->getValue();
    }

    /**
     * @param string $sortBy
     */
    public function setSortBy(string $sortBy)
    {
        $this->sortBy->setChanged(true);
        $this->sortBy->setValue($sortBy);
    }
    
    public function hasSortOrder(): bool
    {
        return $this->sortOrder->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getSortOrder() : string
    {
        return $this->sortOrder->getValue();
    }

    /**
     * @param string $sortOrder
     */
    public function setSortOrder(string $sortOrder)
    {
        $this->sortOrder->setChanged(true);
        $this->sortOrder->setValue($sortOrder);
    }
    
    public function hasGroupBy(): bool
    {
        return $this->groupBy->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getGroupBy() : string
    {
        return $this->groupBy->getValue();
    }

    /**
     * @param string $groupBy
     */
    public function setGroupBy(string $groupBy)
    {
        $this->groupBy->setChanged(true);
        $this->groupBy->setValue($groupBy);
    }
    
    public function hasSearchTime(): bool
    {
        return $this->searchTime->hasBeenSet();
    }    

    /**
     * @return mixed
     */
    public function getSearchTime()
    {
        return $this->searchTime->getValue();
    }

    /**
     * @param mixed $searchTime
     */
    public function setSearchTime($searchTime)
    {
        $this->searchTime->setChanged(true);
        $this->searchTime->setValue($searchTime);
    }
    
    public function hasResultCount(): bool
    {
        return $this->resultCount->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getResultCount() : int
    {
        return $this->resultCount->getValue();
    }

    /**
     * @param int $resultCount
     */
    public function setResultCount(int $resultCount)
    {
        $this->resultCount->setChanged(true);
        $this->resultCount->setValue($resultCount);
    }
    
    public function hasDateLine(): bool
    {
        return $this->dateLine->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getDateLine() : int
    {
        return $this->dateLine->getValue();
    }

    /**
     * @param int $dateLine
     */
    public function setDateLine(int $dateLine)
    {
        $this->dateLine->setChanged(true);
        $this->dateLine->setValue($dateLine);
    }
    
    public function hasCompleted(): bool
    {
        return $this->completed->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getCompleted() : int
    {
        return $this->completed->getValue();
    }

    /**
     * @param int $completed
     */
    public function setCompleted(int $completed)
    {
        $this->completed->setChanged(true);
        $this->completed->setValue($completed);
    }
    
    public function hasIssueReportId(): bool
    {
        return $this->issueReportId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getIssueReportId() : int
    {
        return $this->issueReportId->getValue();
    }

    /**
     * @param int $issueReportId
     */
    public function setIssueReportId(int $issueReportId)
    {
        $this->issueReportId->setChanged(true);
        $this->issueReportId->setValue($issueReportId);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PtIssueSearch
    {
        return new PtIssueSearch();
    }
}