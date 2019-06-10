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

class GeneratedPtProjectTypeRecord implements Record {
    
    /** @var $projectId RecordValue */
    protected $projectId;
    
    /** @var $issueTypeId RecordValue */
    protected $issueTypeId;
    
    /** @var $startStatusId RecordValue */
    protected $startStatusId;
    
    /** @var $issueCount RecordValue */
    protected $issueCount;
    
    /** @var $lastActivity RecordValue */
    protected $lastActivity;

    public function __construct() {
		$this->projectId = new RecordValue();
		$this->issueTypeId = new RecordValue();
		$this->startStatusId = new RecordValue();
		$this->issueCount = new RecordValue();
		$this->lastActivity = new RecordValue();
    }
    
    public function hasProjectId(): bool
    {
        return $this->projectId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getProjectId() : int
    {
        return $this->projectId->getValue();
    }

    /**
     * @param int $projectId
     */
    public function setProjectId(int $projectId)
    {
        $this->projectId->setChanged(true);
        $this->projectId->setValue($projectId);
    }
    
    public function hasIssueTypeId(): bool
    {
        return $this->issueTypeId->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getIssueTypeId() : string
    {
        return $this->issueTypeId->getValue();
    }

    /**
     * @param string $issueTypeId
     */
    public function setIssueTypeId(string $issueTypeId)
    {
        $this->issueTypeId->setChanged(true);
        $this->issueTypeId->setValue($issueTypeId);
    }
    
    public function hasStartStatusId(): bool
    {
        return $this->startStatusId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getStartStatusId() : int
    {
        return $this->startStatusId->getValue();
    }

    /**
     * @param int $startStatusId
     */
    public function setStartStatusId(int $startStatusId)
    {
        $this->startStatusId->setChanged(true);
        $this->startStatusId->setValue($startStatusId);
    }
    
    public function hasIssueCount(): bool
    {
        return $this->issueCount->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getIssueCount() : int
    {
        return $this->issueCount->getValue();
    }

    /**
     * @param int $issueCount
     */
    public function setIssueCount(int $issueCount)
    {
        $this->issueCount->setChanged(true);
        $this->issueCount->setValue($issueCount);
    }
    
    public function hasLastActivity(): bool
    {
        return $this->lastActivity->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getLastActivity() : int
    {
        return $this->lastActivity->getValue();
    }

    /**
     * @param int $lastActivity
     */
    public function setLastActivity(int $lastActivity)
    {
        $this->lastActivity->setChanged(true);
        $this->lastActivity->setValue($lastActivity);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PtProjectType
    {
        return new PtProjectType();
    }
}