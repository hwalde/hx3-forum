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

class GeneratedForumRecord implements Record {
    
    /** @var $forumId RecordValue */
    protected $forumId;
    
    /** @var $styleId RecordValue */
    protected $styleId;
    
    /** @var $title RecordValue */
    protected $title;
    
    /** @var $description RecordValue */
    protected $description;
    
    /** @var $options RecordValue */
    protected $options;
    
    /** @var $displayOrder RecordValue */
    protected $displayOrder;
    
    /** @var $replyCount RecordValue */
    protected $replyCount;
    
    /** @var $lastPost RecordValue */
    protected $lastPost;
    
    /** @var $lastPoster RecordValue */
    protected $lastPoster;
    
    /** @var $lastThread RecordValue */
    protected $lastThread;
    
    /** @var $lastThreadId RecordValue */
    protected $lastThreadId;
    
    /** @var $lastIconId RecordValue */
    protected $lastIconId;
    
    /** @var $threadCount RecordValue */
    protected $threadCount;
    
    /** @var $daysPrune RecordValue */
    protected $daysPrune;
    
    /** @var $newPostEmail RecordValue */
    protected $newPostEmail;
    
    /** @var $newThreadEmail RecordValue */
    protected $newThreadEmail;
    
    /** @var $parentId RecordValue */
    protected $parentId;
    
    /** @var $parentList RecordValue */
    protected $parentList;
    
    /** @var $password RecordValue */
    protected $password;
    
    /** @var $link RecordValue */
    protected $link;
    
    /** @var $childList RecordValue */
    protected $childList;
    
    /** @var $importForumId RecordValue */
    protected $importForumId;
    
    /** @var $importCategoryId RecordValue */
    protected $importCategoryId;
    
    /** @var $titleClean RecordValue */
    protected $titleClean;
    
    /** @var $descriptionClean RecordValue */
    protected $descriptionClean;
    
    /** @var $lastPostId RecordValue */
    protected $lastPostId;
    
    /** @var $showPrivate RecordValue */
    protected $showPrivate;
    
    /** @var $defaultSortField RecordValue */
    protected $defaultSortField;
    
    /** @var $defaultSortOrder RecordValue */
    protected $defaultSortOrder;
    
    /** @var $vbSeoModeratePingbacks RecordValue */
    protected $vbSeoModeratePingbacks;
    
    /** @var $vbSeoModerateTrackbacks RecordValue */
    protected $vbSeoModerateTrackbacks;
    
    /** @var $vbSeoModerateRefbacks RecordValue */
    protected $vbSeoModerateRefbacks;
    
    /** @var $lastPrefixId RecordValue */
    protected $lastPrefixId;
    
    /** @var $imagePrefix RecordValue */
    protected $imagePrefix;

    public function __construct() {
		$this->forumId = new RecordValue();
		$this->styleId = new RecordValue();
		$this->title = new RecordValue();
		$this->description = new RecordValue();
		$this->options = new RecordValue();
		$this->displayOrder = new RecordValue();
		$this->replyCount = new RecordValue();
		$this->lastPost = new RecordValue();
		$this->lastPoster = new RecordValue();
		$this->lastThread = new RecordValue();
		$this->lastThreadId = new RecordValue();
		$this->lastIconId = new RecordValue();
		$this->threadCount = new RecordValue();
		$this->daysPrune = new RecordValue();
		$this->newPostEmail = new RecordValue();
		$this->newThreadEmail = new RecordValue();
		$this->parentId = new RecordValue();
		$this->parentList = new RecordValue();
		$this->password = new RecordValue();
		$this->link = new RecordValue();
		$this->childList = new RecordValue();
		$this->importForumId = new RecordValue();
		$this->importCategoryId = new RecordValue();
		$this->titleClean = new RecordValue();
		$this->descriptionClean = new RecordValue();
		$this->lastPostId = new RecordValue();
		$this->showPrivate = new RecordValue();
		$this->defaultSortField = new RecordValue();
		$this->defaultSortOrder = new RecordValue();
		$this->vbSeoModeratePingbacks = new RecordValue();
		$this->vbSeoModerateTrackbacks = new RecordValue();
		$this->vbSeoModerateRefbacks = new RecordValue();
		$this->lastPrefixId = new RecordValue();
		$this->imagePrefix = new RecordValue();
    }
    
    public function hasForumId(): bool
    {
        return $this->forumId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getForumId() : int
    {
        return $this->forumId->getValue();
    }

    /**
     * @param int $forumId
     */
    public function setForumId(int $forumId)
    {
        $this->forumId->setChanged(true);
        $this->forumId->setValue($forumId);
    }
    
    public function hasStyleId(): bool
    {
        return $this->styleId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getStyleId() : int
    {
        return $this->styleId->getValue();
    }

    /**
     * @param int $styleId
     */
    public function setStyleId(int $styleId)
    {
        $this->styleId->setChanged(true);
        $this->styleId->setValue($styleId);
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
    
    public function hasOptions(): bool
    {
        return $this->options->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getOptions() : int
    {
        return $this->options->getValue();
    }

    /**
     * @param int $options
     */
    public function setOptions(int $options)
    {
        $this->options->setChanged(true);
        $this->options->setValue($options);
    }
    
    public function hasDisplayOrder(): bool
    {
        return $this->displayOrder->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getDisplayOrder() : int
    {
        return $this->displayOrder->getValue();
    }

    /**
     * @param int $displayOrder
     */
    public function setDisplayOrder(int $displayOrder)
    {
        $this->displayOrder->setChanged(true);
        $this->displayOrder->setValue($displayOrder);
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
    
    public function hasLastPoster(): bool
    {
        return $this->lastPoster->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getLastPoster() : string
    {
        return $this->lastPoster->getValue();
    }

    /**
     * @param string $lastPoster
     */
    public function setLastPoster(string $lastPoster)
    {
        $this->lastPoster->setChanged(true);
        $this->lastPoster->setValue($lastPoster);
    }
    
    public function hasLastThread(): bool
    {
        return $this->lastThread->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getLastThread() : string
    {
        return $this->lastThread->getValue();
    }

    /**
     * @param string $lastThread
     */
    public function setLastThread(string $lastThread)
    {
        $this->lastThread->setChanged(true);
        $this->lastThread->setValue($lastThread);
    }
    
    public function hasLastThreadId(): bool
    {
        return $this->lastThreadId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getLastThreadId() : int
    {
        return $this->lastThreadId->getValue();
    }

    /**
     * @param int $lastThreadId
     */
    public function setLastThreadId(int $lastThreadId)
    {
        $this->lastThreadId->setChanged(true);
        $this->lastThreadId->setValue($lastThreadId);
    }
    
    public function hasLastIconId(): bool
    {
        return $this->lastIconId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getLastIconId() : int
    {
        return $this->lastIconId->getValue();
    }

    /**
     * @param int $lastIconId
     */
    public function setLastIconId(int $lastIconId)
    {
        $this->lastIconId->setChanged(true);
        $this->lastIconId->setValue($lastIconId);
    }
    
    public function hasThreadCount(): bool
    {
        return $this->threadCount->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getThreadCount() : int
    {
        return $this->threadCount->getValue();
    }

    /**
     * @param int $threadCount
     */
    public function setThreadCount(int $threadCount)
    {
        $this->threadCount->setChanged(true);
        $this->threadCount->setValue($threadCount);
    }
    
    public function hasDaysPrune(): bool
    {
        return $this->daysPrune->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getDaysPrune() : int
    {
        return $this->daysPrune->getValue();
    }

    /**
     * @param int $daysPrune
     */
    public function setDaysPrune(int $daysPrune)
    {
        $this->daysPrune->setChanged(true);
        $this->daysPrune->setValue($daysPrune);
    }
    
    public function hasNewPostEmail(): bool
    {
        return $this->newPostEmail->hasBeenSet();
    }    

    /**
     * @return string|null
     */
    public function getNewPostEmail() : ?string
    {
        return $this->newPostEmail->getValue();
    }

    /**
     * @param string|null $newPostEmail
     */
    public function setNewPostEmail(?string $newPostEmail)
    {
        $this->newPostEmail->setChanged(true);
        $this->newPostEmail->setValue($newPostEmail);
    }
    
    public function hasNewThreadEmail(): bool
    {
        return $this->newThreadEmail->hasBeenSet();
    }    

    /**
     * @return string|null
     */
    public function getNewThreadEmail() : ?string
    {
        return $this->newThreadEmail->getValue();
    }

    /**
     * @param string|null $newThreadEmail
     */
    public function setNewThreadEmail(?string $newThreadEmail)
    {
        $this->newThreadEmail->setChanged(true);
        $this->newThreadEmail->setValue($newThreadEmail);
    }
    
    public function hasParentId(): bool
    {
        return $this->parentId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getParentId() : int
    {
        return $this->parentId->getValue();
    }

    /**
     * @param int $parentId
     */
    public function setParentId(int $parentId)
    {
        $this->parentId->setChanged(true);
        $this->parentId->setValue($parentId);
    }
    
    public function hasParentList(): bool
    {
        return $this->parentList->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getParentList() : string
    {
        return $this->parentList->getValue();
    }

    /**
     * @param string $parentList
     */
    public function setParentList(string $parentList)
    {
        $this->parentList->setChanged(true);
        $this->parentList->setValue($parentList);
    }
    
    public function hasPassword(): bool
    {
        return $this->password->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPassword() : string
    {
        return $this->password->getValue();
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password)
    {
        $this->password->setChanged(true);
        $this->password->setValue($password);
    }
    
    public function hasLink(): bool
    {
        return $this->link->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getLink() : string
    {
        return $this->link->getValue();
    }

    /**
     * @param string $link
     */
    public function setLink(string $link)
    {
        $this->link->setChanged(true);
        $this->link->setValue($link);
    }
    
    public function hasChildList(): bool
    {
        return $this->childList->hasBeenSet();
    }    

    /**
     * @return string|null
     */
    public function getChildList() : ?string
    {
        return $this->childList->getValue();
    }

    /**
     * @param string|null $childList
     */
    public function setChildList(?string $childList)
    {
        $this->childList->setChanged(true);
        $this->childList->setValue($childList);
    }
    
    public function hasImportForumId(): bool
    {
        return $this->importForumId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getImportForumId() : int
    {
        return $this->importForumId->getValue();
    }

    /**
     * @param int $importForumId
     */
    public function setImportForumId(int $importForumId)
    {
        $this->importForumId->setChanged(true);
        $this->importForumId->setValue($importForumId);
    }
    
    public function hasImportCategoryId(): bool
    {
        return $this->importCategoryId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getImportCategoryId() : int
    {
        return $this->importCategoryId->getValue();
    }

    /**
     * @param int $importCategoryId
     */
    public function setImportCategoryId(int $importCategoryId)
    {
        $this->importCategoryId->setChanged(true);
        $this->importCategoryId->setValue($importCategoryId);
    }
    
    public function hasTitleClean(): bool
    {
        return $this->titleClean->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getTitleClean() : string
    {
        return $this->titleClean->getValue();
    }

    /**
     * @param string $titleClean
     */
    public function setTitleClean(string $titleClean)
    {
        $this->titleClean->setChanged(true);
        $this->titleClean->setValue($titleClean);
    }
    
    public function hasDescriptionClean(): bool
    {
        return $this->descriptionClean->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getDescriptionClean() : string
    {
        return $this->descriptionClean->getValue();
    }

    /**
     * @param string $descriptionClean
     */
    public function setDescriptionClean(string $descriptionClean)
    {
        $this->descriptionClean->setChanged(true);
        $this->descriptionClean->setValue($descriptionClean);
    }
    
    public function hasLastPostId(): bool
    {
        return $this->lastPostId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getLastPostId() : int
    {
        return $this->lastPostId->getValue();
    }

    /**
     * @param int $lastPostId
     */
    public function setLastPostId(int $lastPostId)
    {
        $this->lastPostId->setChanged(true);
        $this->lastPostId->setValue($lastPostId);
    }
    
    public function hasShowPrivate(): bool
    {
        return $this->showPrivate->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getShowPrivate() : int
    {
        return $this->showPrivate->getValue();
    }

    /**
     * @param int $showPrivate
     */
    public function setShowPrivate(int $showPrivate)
    {
        $this->showPrivate->setChanged(true);
        $this->showPrivate->setValue($showPrivate);
    }
    
    public function hasDefaultSortField(): bool
    {
        return $this->defaultSortField->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getDefaultSortField() : string
    {
        return $this->defaultSortField->getValue();
    }

    /**
     * @param string $defaultSortField
     */
    public function setDefaultSortField(string $defaultSortField)
    {
        $this->defaultSortField->setChanged(true);
        $this->defaultSortField->setValue($defaultSortField);
    }
    
    public function hasDefaultSortOrder(): bool
    {
        return $this->defaultSortOrder->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getDefaultSortOrder() : string
    {
        return $this->defaultSortOrder->getValue();
    }

    /**
     * @param string $defaultSortOrder
     */
    public function setDefaultSortOrder(string $defaultSortOrder)
    {
        $this->defaultSortOrder->setChanged(true);
        $this->defaultSortOrder->setValue($defaultSortOrder);
    }
    
    public function hasVbSeoModeratePingbacks(): bool
    {
        return $this->vbSeoModeratePingbacks->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getVbSeoModeratePingbacks() : int
    {
        return $this->vbSeoModeratePingbacks->getValue();
    }

    /**
     * @param int $vbSeoModeratePingbacks
     */
    public function setVbSeoModeratePingbacks(int $vbSeoModeratePingbacks)
    {
        $this->vbSeoModeratePingbacks->setChanged(true);
        $this->vbSeoModeratePingbacks->setValue($vbSeoModeratePingbacks);
    }
    
    public function hasVbSeoModerateTrackbacks(): bool
    {
        return $this->vbSeoModerateTrackbacks->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getVbSeoModerateTrackbacks() : int
    {
        return $this->vbSeoModerateTrackbacks->getValue();
    }

    /**
     * @param int $vbSeoModerateTrackbacks
     */
    public function setVbSeoModerateTrackbacks(int $vbSeoModerateTrackbacks)
    {
        $this->vbSeoModerateTrackbacks->setChanged(true);
        $this->vbSeoModerateTrackbacks->setValue($vbSeoModerateTrackbacks);
    }
    
    public function hasVbSeoModerateRefbacks(): bool
    {
        return $this->vbSeoModerateRefbacks->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getVbSeoModerateRefbacks() : int
    {
        return $this->vbSeoModerateRefbacks->getValue();
    }

    /**
     * @param int $vbSeoModerateRefbacks
     */
    public function setVbSeoModerateRefbacks(int $vbSeoModerateRefbacks)
    {
        $this->vbSeoModerateRefbacks->setChanged(true);
        $this->vbSeoModerateRefbacks->setValue($vbSeoModerateRefbacks);
    }
    
    public function hasLastPrefixId(): bool
    {
        return $this->lastPrefixId->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getLastPrefixId() : string
    {
        return $this->lastPrefixId->getValue();
    }

    /**
     * @param string $lastPrefixId
     */
    public function setLastPrefixId(string $lastPrefixId)
    {
        $this->lastPrefixId->setChanged(true);
        $this->lastPrefixId->setValue($lastPrefixId);
    }
    
    public function hasImagePrefix(): bool
    {
        return $this->imagePrefix->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getImagePrefix() : string
    {
        return $this->imagePrefix->getValue();
    }

    /**
     * @param string $imagePrefix
     */
    public function setImagePrefix(string $imagePrefix)
    {
        $this->imagePrefix->setChanged(true);
        $this->imagePrefix->setValue($imagePrefix);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Forum
    {
        return new Forum();
    }
}