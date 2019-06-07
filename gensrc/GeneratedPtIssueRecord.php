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

class GeneratedPtIssueRecord implements Record {
    
    /** @var $issueId int */
    protected $issueId;
    
    /** @var $projectId int */
    protected $projectId;
    
    /** @var $issueStatusId int */
    protected $issueStatusId;
    
    /** @var $issueTypeId string */
    protected $issueTypeId;
    
    /** @var $title string */
    protected $title;
    
    /** @var $summary string */
    protected $summary;
    
    /** @var $submitUserId int */
    protected $submitUserId;
    
    /** @var $submitUserName string */
    protected $submitUserName;
    
    /** @var $submitDate int */
    protected $submitDate;
    
    /** @var $appliesVersionId int */
    protected $appliesVersionId;
    
    /** @var $isAddressed int */
    protected $isAddressed;
    
    /** @var $addressedVersionId int */
    protected $addressedVersionId;
    
    /** @var $priority int */
    protected $priority;
    
    /** @var $visible string */
    protected $visible;
    
    /** @var $lastPost int */
    protected $lastPost;
    
    /** @var $lastActivity int */
    protected $lastActivity;
    
    /** @var $lastPostUserId int */
    protected $lastPostUserId;
    
    /** @var $lastPostUserName string */
    protected $lastPostUserName;
    
    /** @var $firstNoteId int */
    protected $firstNoteId;
    
    /** @var $lastNoteId int */
    protected $lastNoteId;
    
    /** @var $attachCount int */
    protected $attachCount;
    
    /** @var $pendingPetitions int */
    protected $pendingPetitions;
    
    /** @var $replyCount int */
    protected $replyCount;
    
    /** @var $votePositive int */
    protected $votePositive;
    
    /** @var $voteNegative int */
    protected $voteNegative;
    
    /** @var $projectCategoryId int */
    protected $projectCategoryId;
    
    /** @var $assignedUsers int */
    protected $assignedUsers;
    
    public function hasIssueId(): bool
    {
        return isset($this->issueId);
    }    

    /**
     * @return int
     */
    public function getIssueId() : int
    {
        return $this->issueId;
    }

    /**
     * @param int $issueId
     */
    public function setIssueId(int $issueId)
    {
        $this->issueId = $issueId;
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
    
    public function hasIssueStatusId(): bool
    {
        return isset($this->issueStatusId);
    }    

    /**
     * @return int
     */
    public function getIssueStatusId() : int
    {
        return $this->issueStatusId;
    }

    /**
     * @param int $issueStatusId
     */
    public function setIssueStatusId(int $issueStatusId)
    {
        $this->issueStatusId = $issueStatusId;
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
    
    public function hasSummary(): bool
    {
        return isset($this->summary);
    }    

    /**
     * @return string
     */
    public function getSummary() : string
    {
        return $this->summary;
    }

    /**
     * @param string $summary
     */
    public function setSummary(string $summary)
    {
        $this->summary = $summary;
    }
    
    public function hasSubmitUserId(): bool
    {
        return isset($this->submitUserId);
    }    

    /**
     * @return int
     */
    public function getSubmitUserId() : int
    {
        return $this->submitUserId;
    }

    /**
     * @param int $submitUserId
     */
    public function setSubmitUserId(int $submitUserId)
    {
        $this->submitUserId = $submitUserId;
    }
    
    public function hasSubmitUserName(): bool
    {
        return isset($this->submitUserName);
    }    

    /**
     * @return string
     */
    public function getSubmitUserName() : string
    {
        return $this->submitUserName;
    }

    /**
     * @param string $submitUserName
     */
    public function setSubmitUserName(string $submitUserName)
    {
        $this->submitUserName = $submitUserName;
    }
    
    public function hasSubmitDate(): bool
    {
        return isset($this->submitDate);
    }    

    /**
     * @return int
     */
    public function getSubmitDate() : int
    {
        return $this->submitDate;
    }

    /**
     * @param int $submitDate
     */
    public function setSubmitDate(int $submitDate)
    {
        $this->submitDate = $submitDate;
    }
    
    public function hasAppliesVersionId(): bool
    {
        return isset($this->appliesVersionId);
    }    

    /**
     * @return int
     */
    public function getAppliesVersionId() : int
    {
        return $this->appliesVersionId;
    }

    /**
     * @param int $appliesVersionId
     */
    public function setAppliesVersionId(int $appliesVersionId)
    {
        $this->appliesVersionId = $appliesVersionId;
    }
    
    public function hasIsAddressed(): bool
    {
        return isset($this->isAddressed);
    }    

    /**
     * @return int
     */
    public function getIsAddressed() : int
    {
        return $this->isAddressed;
    }

    /**
     * @param int $isAddressed
     */
    public function setIsAddressed(int $isAddressed)
    {
        $this->isAddressed = $isAddressed;
    }
    
    public function hasAddressedVersionId(): bool
    {
        return isset($this->addressedVersionId);
    }    

    /**
     * @return int
     */
    public function getAddressedVersionId() : int
    {
        return $this->addressedVersionId;
    }

    /**
     * @param int $addressedVersionId
     */
    public function setAddressedVersionId(int $addressedVersionId)
    {
        $this->addressedVersionId = $addressedVersionId;
    }
    
    public function hasPriority(): bool
    {
        return isset($this->priority);
    }    

    /**
     * @return int
     */
    public function getPriority() : int
    {
        return $this->priority;
    }

    /**
     * @param int $priority
     */
    public function setPriority(int $priority)
    {
        $this->priority = $priority;
    }
    
    public function hasVisible(): bool
    {
        return isset($this->visible);
    }    

    /**
     * @return string
     */
    public function getVisible() : string
    {
        return $this->visible;
    }

    /**
     * @param string $visible
     */
    public function setVisible(string $visible)
    {
        $this->visible = $visible;
    }
    
    public function hasLastPost(): bool
    {
        return isset($this->lastPost);
    }    

    /**
     * @return int
     */
    public function getLastPost() : int
    {
        return $this->lastPost;
    }

    /**
     * @param int $lastPost
     */
    public function setLastPost(int $lastPost)
    {
        $this->lastPost = $lastPost;
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
    
    public function hasLastPostUserId(): bool
    {
        return isset($this->lastPostUserId);
    }    

    /**
     * @return int
     */
    public function getLastPostUserId() : int
    {
        return $this->lastPostUserId;
    }

    /**
     * @param int $lastPostUserId
     */
    public function setLastPostUserId(int $lastPostUserId)
    {
        $this->lastPostUserId = $lastPostUserId;
    }
    
    public function hasLastPostUserName(): bool
    {
        return isset($this->lastPostUserName);
    }    

    /**
     * @return string
     */
    public function getLastPostUserName() : string
    {
        return $this->lastPostUserName;
    }

    /**
     * @param string $lastPostUserName
     */
    public function setLastPostUserName(string $lastPostUserName)
    {
        $this->lastPostUserName = $lastPostUserName;
    }
    
    public function hasFirstNoteId(): bool
    {
        return isset($this->firstNoteId);
    }    

    /**
     * @return int
     */
    public function getFirstNoteId() : int
    {
        return $this->firstNoteId;
    }

    /**
     * @param int $firstNoteId
     */
    public function setFirstNoteId(int $firstNoteId)
    {
        $this->firstNoteId = $firstNoteId;
    }
    
    public function hasLastNoteId(): bool
    {
        return isset($this->lastNoteId);
    }    

    /**
     * @return int
     */
    public function getLastNoteId() : int
    {
        return $this->lastNoteId;
    }

    /**
     * @param int $lastNoteId
     */
    public function setLastNoteId(int $lastNoteId)
    {
        $this->lastNoteId = $lastNoteId;
    }
    
    public function hasAttachCount(): bool
    {
        return isset($this->attachCount);
    }    

    /**
     * @return int
     */
    public function getAttachCount() : int
    {
        return $this->attachCount;
    }

    /**
     * @param int $attachCount
     */
    public function setAttachCount(int $attachCount)
    {
        $this->attachCount = $attachCount;
    }
    
    public function hasPendingPetitions(): bool
    {
        return isset($this->pendingPetitions);
    }    

    /**
     * @return int
     */
    public function getPendingPetitions() : int
    {
        return $this->pendingPetitions;
    }

    /**
     * @param int $pendingPetitions
     */
    public function setPendingPetitions(int $pendingPetitions)
    {
        $this->pendingPetitions = $pendingPetitions;
    }
    
    public function hasReplyCount(): bool
    {
        return isset($this->replyCount);
    }    

    /**
     * @return int
     */
    public function getReplyCount() : int
    {
        return $this->replyCount;
    }

    /**
     * @param int $replyCount
     */
    public function setReplyCount(int $replyCount)
    {
        $this->replyCount = $replyCount;
    }
    
    public function hasVotePositive(): bool
    {
        return isset($this->votePositive);
    }    

    /**
     * @return int
     */
    public function getVotePositive() : int
    {
        return $this->votePositive;
    }

    /**
     * @param int $votePositive
     */
    public function setVotePositive(int $votePositive)
    {
        $this->votePositive = $votePositive;
    }
    
    public function hasVoteNegative(): bool
    {
        return isset($this->voteNegative);
    }    

    /**
     * @return int
     */
    public function getVoteNegative() : int
    {
        return $this->voteNegative;
    }

    /**
     * @param int $voteNegative
     */
    public function setVoteNegative(int $voteNegative)
    {
        $this->voteNegative = $voteNegative;
    }
    
    public function hasProjectCategoryId(): bool
    {
        return isset($this->projectCategoryId);
    }    

    /**
     * @return int
     */
    public function getProjectCategoryId() : int
    {
        return $this->projectCategoryId;
    }

    /**
     * @param int $projectCategoryId
     */
    public function setProjectCategoryId(int $projectCategoryId)
    {
        $this->projectCategoryId = $projectCategoryId;
    }
    
    public function hasAssignedUsers(): bool
    {
        return isset($this->assignedUsers);
    }    

    /**
     * @return int
     */
    public function getAssignedUsers() : int
    {
        return $this->assignedUsers;
    }

    /**
     * @param int $assignedUsers
     */
    public function setAssignedUsers(int $assignedUsers)
    {
        $this->assignedUsers = $assignedUsers;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PtIssue
    {
        return new PtIssue();
    }
}