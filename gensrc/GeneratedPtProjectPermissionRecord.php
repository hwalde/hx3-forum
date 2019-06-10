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

class GeneratedPtProjectPermissionRecord implements Record {
    
    /** @var $userGroupId RecordValue */
    protected $userGroupId;
    
    /** @var $projectId RecordValue */
    protected $projectId;
    
    /** @var $issueTypeId RecordValue */
    protected $issueTypeId;
    
    /** @var $generalPermissions RecordValue */
    protected $generalPermissions;
    
    /** @var $postPermissions RecordValue */
    protected $postPermissions;
    
    /** @var $attachPermissions RecordValue */
    protected $attachPermissions;

    public function __construct() {
		$this->userGroupId = new RecordValue();
		$this->projectId = new RecordValue();
		$this->issueTypeId = new RecordValue();
		$this->generalPermissions = new RecordValue();
		$this->postPermissions = new RecordValue();
		$this->attachPermissions = new RecordValue();
    }
    
    public function hasUserGroupId(): bool
    {
        return $this->userGroupId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getUserGroupId() : int
    {
        return $this->userGroupId->getValue();
    }

    /**
     * @param int $userGroupId
     */
    public function setUserGroupId(int $userGroupId)
    {
        $this->userGroupId->setChanged(true);
        $this->userGroupId->setValue($userGroupId);
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
    
    public function hasGeneralPermissions(): bool
    {
        return $this->generalPermissions->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getGeneralPermissions() : int
    {
        return $this->generalPermissions->getValue();
    }

    /**
     * @param int $generalPermissions
     */
    public function setGeneralPermissions(int $generalPermissions)
    {
        $this->generalPermissions->setChanged(true);
        $this->generalPermissions->setValue($generalPermissions);
    }
    
    public function hasPostPermissions(): bool
    {
        return $this->postPermissions->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPostPermissions() : int
    {
        return $this->postPermissions->getValue();
    }

    /**
     * @param int $postPermissions
     */
    public function setPostPermissions(int $postPermissions)
    {
        $this->postPermissions->setChanged(true);
        $this->postPermissions->setValue($postPermissions);
    }
    
    public function hasAttachPermissions(): bool
    {
        return $this->attachPermissions->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAttachPermissions() : int
    {
        return $this->attachPermissions->getValue();
    }

    /**
     * @param int $attachPermissions
     */
    public function setAttachPermissions(int $attachPermissions)
    {
        $this->attachPermissions->setChanged(true);
        $this->attachPermissions->setValue($attachPermissions);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PtProjectPermission
    {
        return new PtProjectPermission();
    }
}