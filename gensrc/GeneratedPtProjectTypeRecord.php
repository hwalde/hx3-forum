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

class GeneratedPtProjectTypeRecord implements Record {
    
    /** @var $projectId int */
    private $projectId;
    
    /** @var $issueTypeId string */
    private $issueTypeId;
    
    /** @var $startStatusId int */
    private $startStatusId;
    
    /** @var $issueCount int */
    private $issueCount;
    
    /** @var $lastActivity int */
    private $lastActivity;
    
    public function hasProjectId(): bool
    {
        return isset($this->projectId);
    }    

    /**
     * @return int
     */
    public function getProjectId() : int
    {
        return $this->projectId;
    }

    /**
     * @param int $projectId
     */
    public function setProjectId(int $projectId)
    {
        $this->projectId = $projectId;
    }
    
    public function hasIssueTypeId(): bool
    {
        return isset($this->issueTypeId);
    }    

    /**
     * @return string
     */
    public function getIssueTypeId() : string
    {
        return $this->issueTypeId;
    }

    /**
     * @param string $issueTypeId
     */
    public function setIssueTypeId(string $issueTypeId)
    {
        $this->issueTypeId = $issueTypeId;
    }
    
    public function hasStartStatusId(): bool
    {
        return isset($this->startStatusId);
    }    

    /**
     * @return int
     */
    public function getStartStatusId() : int
    {
        return $this->startStatusId;
    }

    /**
     * @param int $startStatusId
     */
    public function setStartStatusId(int $startStatusId)
    {
        $this->startStatusId = $startStatusId;
    }
    
    public function hasIssueCount(): bool
    {
        return isset($this->issueCount);
    }    

    /**
     * @return int
     */
    public function getIssueCount() : int
    {
        return $this->issueCount;
    }

    /**
     * @param int $issueCount
     */
    public function setIssueCount(int $issueCount)
    {
        $this->issueCount = $issueCount;
    }
    
    public function hasLastActivity(): bool
    {
        return isset($this->lastActivity);
    }    

    /**
     * @return int
     */
    public function getLastActivity() : int
    {
        return $this->lastActivity;
    }

    /**
     * @param int $lastActivity
     */
    public function setLastActivity(int $lastActivity)
    {
        $this->lastActivity = $lastActivity;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PtProjectType
    {
        return new PtProjectType();
    }
}