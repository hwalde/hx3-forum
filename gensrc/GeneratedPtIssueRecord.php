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

class GeneratedPtIssueRecord implements Record {
    
    /** @var $issueId RecordValue */
    protected $issueId;
    
    /** @var $projectId RecordValue */
    protected $projectId;
    
    /** @var $issueStatusId RecordValue */
    protected $issueStatusId;
    
    /** @var $issueTypeId RecordValue */
    protected $issueTypeId;
    
    /** @var $title RecordValue */
    protected $title;
    
    /** @var $summary RecordValue */
    protected $summary;
    
    /** @var $submitUserId RecordValue */
    protected $submitUserId;
    
    /** @var $submitUserName RecordValue */
    protected $submitUserName;
    
    /** @var $submitDate RecordValue */
    protected $submitDate;
    
    /** @var $appliesVersionId RecordValue */
    protected $appliesVersionId;
    
    /** @var $isAddressed RecordValue */
    protected $isAddressed;
    
    /** @var $addressedVersionId RecordValue */
    protected $addressedVersionId;
    
    /** @var $priority RecordValue */
    protected $priority;
    
    /** @var $visible RecordValue */
    protected $visible;
    
    /** @var $lastPost RecordValue */
    protected $lastPost;
    
    /** @var $lastActivity RecordValue */
    protected $lastActivity;
    
    /** @var $lastPostUserId RecordValue */
    protected $lastPostUserId;
    
    /** @var $lastPostUserName RecordValue */
    protected $lastPostUserName;
    
    /** @var $firstNoteId RecordValue */
    protected $firstNoteId;
    
    /** @var $lastNoteId RecordValue */
    protected $lastNoteId;
    
    /** @var $attachCount RecordValue */
    protected $attachCount;
    
    /** @var $pendingPetitions RecordValue */
    protected $pendingPetitions;
    
    /** @var $replyCount RecordValue */
    protected $replyCount;
    
    /** @var $votePositive RecordValue */
    protected $votePositive;
    
    /** @var $voteNegative RecordValue */
    protected $voteNegative;
    
    /** @var $projectCategoryId RecordValue */
    protected $projectCategoryId;
    
    /** @var $assignedUsers RecordValue */
    protected $assignedUsers;

    public function __construct() {
		$this->issueId = new RecordValue();
		$this->projectId = new RecordValue();
		$this->issueStatusId = new RecordValue();
		$this->issueTypeId = new RecordValue();
		$this->title = new RecordValue();
		$this->summary = new RecordValue();
		$this->submitUserId = new RecordValue();
		$this->submitUserName = new RecordValue();
		$this->submitDate = new RecordValue();
		$this->appliesVersionId = new RecordValue();
		$this->isAddressed = new RecordValue();
		$this->addressedVersionId = new RecordValue();
		$this->priority = new RecordValue();
		$this->visible = new RecordValue();
		$this->lastPost = new RecordValue();
		$this->lastActivity = new RecordValue();
		$this->lastPostUserId = new RecordValue();
		$this->lastPostUserName = new RecordValue();
		$this->firstNoteId = new RecordValue();
		$this->lastNoteId = new RecordValue();
		$this->attachCount = new RecordValue();
		$this->pendingPetitions = new RecordValue();
		$this->replyCount = new RecordValue();
		$this->votePositive = new RecordValue();
		$this->voteNegative = new RecordValue();
		$this->projectCategoryId = new RecordValue();
		$this->assignedUsers = new RecordValue();
    }
    
    public function hasIssueId(): bool
    {
        return $this->issueId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getIssueId() : int
    {
        return $this->issueId->getValue();
    }

    /**
     * @param int $issueId
     */
    public function setIssueId(int $issueId)
    {
        $this->issueId->setChanged(true);
        $this->issueId->setValue($issueId);
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
    
    public function hasIssueStatusId(): bool
    {
        return $this->issueStatusId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getIssueStatusId() : int
    {
        return $this->issueStatusId->getValue();
    }

    /**
     * @param int $issueStatusId
     */
    public function setIssueStatusId(int $issueStatusId)
    {
        $this->issueStatusId->setChanged(true);
        $this->issueStatusId->setValue($issueStatusId);
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
    
    public function hasSummary(): bool
    {
        return $this->summary->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getSummary() : string
    {
        return $this->summary->getValue();
    }

    /**
     * @param string $summary
     */
    public function setSummary(string $summary)
    {
        $this->summary->setChanged(true);
        $this->summary->setValue($summary);
    }
    
    public function hasSubmitUserId(): bool
    {
        return $this->submitUserId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getSubmitUserId() : int
    {
        return $this->submitUserId->getValue();
    }

    /**
     * @param int $submitUserId
     */
    public function setSubmitUserId(int $submitUserId)
    {
        $this->submitUserId->setChanged(true);
        $this->submitUserId->setValue($submitUserId);
    }
    
    public function hasSubmitUserName(): bool
    {
        return $this->submitUserName->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getSubmitUserName() : string
    {
        return $this->submitUserName->getValue();
    }

    /**
     * @param string $submitUserName
     */
    public function setSubmitUserName(string $submitUserName)
    {
        $this->submitUserName->setChanged(true);
        $this->submitUserName->setValue($submitUserName);
    }
    
    public function hasSubmitDate(): bool
    {
        return $this->submitDate->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getSubmitDate() : int
    {
        return $this->submitDate->getValue();
    }

    /**
     * @param int $submitDate
     */
    public function setSubmitDate(int $submitDate)
    {
        $this->submitDate->setChanged(true);
        $this->submitDate->setValue($submitDate);
    }
    
    public function hasAppliesVersionId(): bool
    {
        return $this->appliesVersionId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAppliesVersionId() : int
    {
        return $this->appliesVersionId->getValue();
    }

    /**
     * @param int $appliesVersionId
     */
    public function setAppliesVersionId(int $appliesVersionId)
    {
        $this->appliesVersionId->setChanged(true);
        $this->appliesVersionId->setValue($appliesVersionId);
    }
    
    public function hasIsAddressed(): bool
    {
        return $this->isAddressed->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getIsAddressed() : int
    {
        return $this->isAddressed->getValue();
    }

    /**
     * @param int $isAddressed
     */
    public function setIsAddressed(int $isAddressed)
    {
        $this->isAddressed->setChanged(true);
        $this->isAddressed->setValue($isAddressed);
    }
    
    public function hasAddressedVersionId(): bool
    {
        return $this->addressedVersionId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAddressedVersionId() : int
    {
        return $this->addressedVersionId->getValue();
    }

    /**
     * @param int $addressedVersionId
     */
    public function setAddressedVersionId(int $addressedVersionId)
    {
        $this->addressedVersionId->setChanged(true);
        $this->addressedVersionId->setValue($addressedVersionId);
    }
    
    public function hasPriority(): bool
    {
        return $this->priority->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPriority() : int
    {
        return $this->priority->getValue();
    }

    /**
     * @param int $priority
     */
    public function setPriority(int $priority)
    {
        $this->priority->setChanged(true);
        $this->priority->setValue($priority);
    }
    
    public function hasVisible(): bool
    {
        return $this->visible->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getVisible() : string
    {
        return $this->visible->getValue();
    }

    /**
     * @param string $visible
     */
    public function setVisible(string $visible)
    {
        $this->visible->setChanged(true);
        $this->visible->setValue($visible);
    }
    
    public function hasLastPost(): bool
    {
        return $this->lastPost->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getLastPost() : int
    {
        return $this->lastPost->getValue();
    }

    /**
     * @param int $lastPost
     */
    public function setLastPost(int $lastPost)
    {
        $this->lastPost->setChanged(true);
        $this->lastPost->setValue($lastPost);
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
    
    public function hasLastPostUserId(): bool
    {
        return $this->lastPostUserId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getLastPostUserId() : int
    {
        return $this->lastPostUserId->getValue();
    }

    /**
     * @param int $lastPostUserId
     */
    public function setLastPostUserId(int $lastPostUserId)
    {
        $this->lastPostUserId->setChanged(true);
        $this->lastPostUserId->setValue($lastPostUserId);
    }
    
    public function hasLastPostUserName(): bool
    {
        return $this->lastPostUserName->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getLastPostUserName() : string
    {
        return $this->lastPostUserName->getValue();
    }

    /**
     * @param string $lastPostUserName
     */
    public function setLastPostUserName(string $lastPostUserName)
    {
        $this->lastPostUserName->setChanged(true);
        $this->lastPostUserName->setValue($lastPostUserName);
    }
    
    public function hasFirstNoteId(): bool
    {
        return $this->firstNoteId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getFirstNoteId() : int
    {
        return $this->firstNoteId->getValue();
    }

    /**
     * @param int $firstNoteId
     */
    public function setFirstNoteId(int $firstNoteId)
    {
        $this->firstNoteId->setChanged(true);
        $this->firstNoteId->setValue($firstNoteId);
    }
    
    public function hasLastNoteId(): bool
    {
        return $this->lastNoteId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getLastNoteId() : int
    {
        return $this->lastNoteId->getValue();
    }

    /**
     * @param int $lastNoteId
     */
    public function setLastNoteId(int $lastNoteId)
    {
        $this->lastNoteId->setChanged(true);
        $this->lastNoteId->setValue($lastNoteId);
    }
    
    public function hasAttachCount(): bool
    {
        return $this->attachCount->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAttachCount() : int
    {
        return $this->attachCount->getValue();
    }

    /**
     * @param int $attachCount
     */
    public function setAttachCount(int $attachCount)
    {
        $this->attachCount->setChanged(true);
        $this->attachCount->setValue($attachCount);
    }
    
    public function hasPendingPetitions(): bool
    {
        return $this->pendingPetitions->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPendingPetitions() : int
    {
        return $this->pendingPetitions->getValue();
    }

    /**
     * @param int $pendingPetitions
     */
    public function setPendingPetitions(int $pendingPetitions)
    {
        $this->pendingPetitions->setChanged(true);
        $this->pendingPetitions->setValue($pendingPetitions);
    }
    
    public function hasReplyCount(): bool
    {
        return $this->replyCount->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getReplyCount() : int
    {
        return $this->replyCount->getValue();
    }

    /**
     * @param int $replyCount
     */
    public function setReplyCount(int $replyCount)
    {
        $this->replyCount->setChanged(true);
        $this->replyCount->setValue($replyCount);
    }
    
    public function hasVotePositive(): bool
    {
        return $this->votePositive->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getVotePositive() : int
    {
        return $this->votePositive->getValue();
    }

    /**
     * @param int $votePositive
     */
    public function setVotePositive(int $votePositive)
    {
        $this->votePositive->setChanged(true);
        $this->votePositive->setValue($votePositive);
    }
    
    public function hasVoteNegative(): bool
    {
        return $this->voteNegative->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getVoteNegative() : int
    {
        return $this->voteNegative->getValue();
    }

    /**
     * @param int $voteNegative
     */
    public function setVoteNegative(int $voteNegative)
    {
        $this->voteNegative->setChanged(true);
        $this->voteNegative->setValue($voteNegative);
    }
    
    public function hasProjectCategoryId(): bool
    {
        return $this->projectCategoryId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getProjectCategoryId() : int
    {
        return $this->projectCategoryId->getValue();
    }

    /**
     * @param int $projectCategoryId
     */
    public function setProjectCategoryId(int $projectCategoryId)
    {
        $this->projectCategoryId->setChanged(true);
        $this->projectCategoryId->setValue($projectCategoryId);
    }
    
    public function hasAssignedUsers(): bool
    {
        return $this->assignedUsers->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAssignedUsers() : int
    {
        return $this->assignedUsers->getValue();
    }

    /**
     * @param int $assignedUsers
     */
    public function setAssignedUsers(int $assignedUsers)
    {
        $this->assignedUsers->setChanged(true);
        $this->assignedUsers->setValue($assignedUsers);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PtIssue
    {
        return new PtIssue();
    }
}