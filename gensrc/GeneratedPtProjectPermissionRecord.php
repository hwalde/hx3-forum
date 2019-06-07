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

class GeneratedPtProjectPermissionRecord implements Record {
    
    /** @var $userGroupId int */
    protected $userGroupId;
    
    /** @var $projectId int */
    protected $projectId;
    
    /** @var $issueTypeId string */
    protected $issueTypeId;
    
    /** @var $generalPermissions int */
    protected $generalPermissions;
    
    /** @var $postPermissions int */
    protected $postPermissions;
    
    /** @var $attachPermissions int */
    protected $attachPermissions;
    
    public function hasUserGroupId(): bool
    {
        return isset($this->userGroupId);
    }    

    /**
     * @return int
     */
    public function getUserGroupId() : int
    {
        return $this->userGroupId;
    }

    /**
     * @param int $userGroupId
     */
    public function setUserGroupId(int $userGroupId)
    {
        $this->userGroupId = $userGroupId;
    }
    
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
    
    public function hasGeneralPermissions(): bool
    {
        return isset($this->generalPermissions);
    }    

    /**
     * @return int
     */
    public function getGeneralPermissions() : int
    {
        return $this->generalPermissions;
    }

    /**
     * @param int $generalPermissions
     */
    public function setGeneralPermissions(int $generalPermissions)
    {
        $this->generalPermissions = $generalPermissions;
    }
    
    public function hasPostPermissions(): bool
    {
        return isset($this->postPermissions);
    }    

    /**
     * @return int
     */
    public function getPostPermissions() : int
    {
        return $this->postPermissions;
    }

    /**
     * @param int $postPermissions
     */
    public function setPostPermissions(int $postPermissions)
    {
        $this->postPermissions = $postPermissions;
    }
    
    public function hasAttachPermissions(): bool
    {
        return isset($this->attachPermissions);
    }    

    /**
     * @return int
     */
    public function getAttachPermissions() : int
    {
        return $this->attachPermissions;
    }

    /**
     * @param int $attachPermissions
     */
    public function setAttachPermissions(int $attachPermissions)
    {
        $this->attachPermissions = $attachPermissions;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PtProjectPermission
    {
        return new PtProjectPermission();
    }
}