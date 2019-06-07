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

class GeneratedPtIssueReportSubscribeRecord implements Record {
    
    /** @var $userId int */
    protected $userId;
    
    /** @var $issueReportId int */
    protected $issueReportId;
    
    /** @var $issueSearchId int */
    protected $issueSearchId;
    
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

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PtIssueReportSubscribe
    {
        return new PtIssueReportSubscribe();
    }
}