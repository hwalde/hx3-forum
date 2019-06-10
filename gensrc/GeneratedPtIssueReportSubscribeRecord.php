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

class GeneratedPtIssueReportSubscribeRecord implements Record {
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $issueReportId RecordValue */
    protected $issueReportId;
    
    /** @var $issueSearchId RecordValue */
    protected $issueSearchId;

    public function __construct() {
		$this->userId = new RecordValue();
		$this->issueReportId = new RecordValue();
		$this->issueSearchId = new RecordValue();
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
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PtIssueReportSubscribe
    {
        return new PtIssueReportSubscribe();
    }
}