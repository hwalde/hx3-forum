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

class GeneratedPtIssueReportRecord implements Record {
    
    /** @var $issueReportId RecordValue */
    protected $issueReportId;
    
    /** @var $title RecordValue */
    protected $title;
    
    /** @var $description RecordValue */
    protected $description;
    
    /** @var $public RecordValue */
    protected $public;
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $criteria RecordValue */
    protected $criteria;
    
    /** @var $sortBy RecordValue */
    protected $sortBy;
    
    /** @var $sortOrder RecordValue */
    protected $sortOrder;
    
    /** @var $groupBy RecordValue */
    protected $groupBy;
    
    /** @var $projectList RecordValue */
    protected $projectList;
    
    /** @var $issueTypeList RecordValue */
    protected $issueTypeList;

    public function __construct() {
		$this->issueReportId = new RecordValue();
		$this->title = new RecordValue();
		$this->description = new RecordValue();
		$this->public = new RecordValue();
		$this->userId = new RecordValue();
		$this->criteria = new RecordValue();
		$this->sortBy = new RecordValue();
		$this->sortOrder = new RecordValue();
		$this->groupBy = new RecordValue();
		$this->projectList = new RecordValue();
		$this->issueTypeList = new RecordValue();
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
    
    public function hasTitle(): bool
    {
        return $this->title->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title->getValue();
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title->setChanged(true);
        $this->title->setValue($title);
    }
    
    public function hasDescription(): bool
    {
        return $this->description->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description->getValue();
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->description->setChanged(true);
        $this->description->setValue($description);
    }
    
    public function hasPublic(): bool
    {
        return $this->public->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPublic() : int
    {
        return $this->public->getValue();
    }

    /**
     * @param int $public
     */
    public function setPublic(int $public)
    {
        $this->public->setChanged(true);
        $this->public->setValue($public);
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
    
    public function hasProjectList(): bool
    {
        return $this->projectList->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getProjectList() : string
    {
        return $this->projectList->getValue();
    }

    /**
     * @param string $projectList
     */
    public function setProjectList(string $projectList)
    {
        $this->projectList->setChanged(true);
        $this->projectList->setValue($projectList);
    }
    
    public function hasIssueTypeList(): bool
    {
        return $this->issueTypeList->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getIssueTypeList() : string
    {
        return $this->issueTypeList->getValue();
    }

    /**
     * @param string $issueTypeList
     */
    public function setIssueTypeList(string $issueTypeList)
    {
        $this->issueTypeList->setChanged(true);
        $this->issueTypeList->setValue($issueTypeList);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PtIssueReport
    {
        return new PtIssueReport();
    }
}