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

class GeneratedPtIssueReportRecord implements Record {
    
    /** @var $issueReportId int */
    protected $issueReportId;
    
    /** @var $title string */
    protected $title;
    
    /** @var $description string */
    protected $description;
    
    /** @var $public int */
    protected $public;
    
    /** @var $userId int */
    protected $userId;
    
    /** @var $criteria string */
    protected $criteria;
    
    /** @var $sortBy string */
    protected $sortBy;
    
    /** @var $sortOrder string */
    protected $sortOrder;
    
    /** @var $groupBy string */
    protected $groupBy;
    
    /** @var $projectList string */
    protected $projectList;
    
    /** @var $issueTypeList string */
    protected $issueTypeList;
    
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
    
    public function hasDescription(): bool
    {
        return isset($this->description);
    }    

    /**
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }
    
    public function hasPublic(): bool
    {
        return isset($this->public);
    }    

    /**
     * @return int
     */
    public function getPublic() : int
    {
        return $this->public;
    }

    /**
     * @param int $public
     */
    public function setPublic(int $public)
    {
        $this->public = $public;
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
    
    public function hasProjectList(): bool
    {
        return isset($this->projectList);
    }    

    /**
     * @return string
     */
    public function getProjectList() : string
    {
        return $this->projectList;
    }

    /**
     * @param string $projectList
     */
    public function setProjectList(string $projectList)
    {
        $this->projectList = $projectList;
    }
    
    public function hasIssueTypeList(): bool
    {
        return isset($this->issueTypeList);
    }    

    /**
     * @return string
     */
    public function getIssueTypeList() : string
    {
        return $this->issueTypeList;
    }

    /**
     * @param string $issueTypeList
     */
    public function setIssueTypeList(string $issueTypeList)
    {
        $this->issueTypeList = $issueTypeList;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PtIssueReport
    {
        return new PtIssueReport();
    }
}