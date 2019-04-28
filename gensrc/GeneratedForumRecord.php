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

class GeneratedForumRecord implements Record {
    
    /** @var $forumId int */
    private $forumId;
    
    /** @var $styleId int */
    private $styleId;
    
    /** @var $title string */
    private $title;
    
    /** @var $description string */
    private $description;
    
    /** @var $options int */
    private $options;
    
    /** @var $displayOrder int */
    private $displayOrder;
    
    /** @var $replyCount int */
    private $replyCount;
    
    /** @var $lastPost int */
    private $lastPost;
    
    /** @var $lastPoster string */
    private $lastPoster;
    
    /** @var $lastThread string */
    private $lastThread;
    
    /** @var $lastThreadId int */
    private $lastThreadId;
    
    /** @var $lastIconId int */
    private $lastIconId;
    
    /** @var $threadCount int */
    private $threadCount;
    
    /** @var $daysPrune int */
    private $daysPrune;
    
    /** @var $newPostEmail string|null */
    private $newPostEmail;
    
    /** @var $newThreadEmail string|null */
    private $newThreadEmail;
    
    /** @var $parentId int */
    private $parentId;
    
    /** @var $parentList string */
    private $parentList;
    
    /** @var $password string */
    private $password;
    
    /** @var $link string */
    private $link;
    
    /** @var $childList string|null */
    private $childList;
    
    /** @var $importForumId int */
    private $importForumId;
    
    /** @var $importCategoryId int */
    private $importCategoryId;
    
    /** @var $titleClean string */
    private $titleClean;
    
    /** @var $descriptionClean string */
    private $descriptionClean;
    
    /** @var $lastPostId int */
    private $lastPostId;
    
    /** @var $showPrivate int */
    private $showPrivate;
    
    /** @var $defaultSortField string */
    private $defaultSortField;
    
    /** @var $defaultSortOrder string */
    private $defaultSortOrder;
    
    /** @var $vbSeoModeratePingbacks int */
    private $vbSeoModeratePingbacks;
    
    /** @var $vbSeoModerateTrackbacks int */
    private $vbSeoModerateTrackbacks;
    
    /** @var $vbSeoModerateRefbacks int */
    private $vbSeoModerateRefbacks;
    
    /** @var $lastPrefixId string */
    private $lastPrefixId;
    
    /** @var $imagePrefix string */
    private $imagePrefix;
    
    public function hasForumId(): bool
    {
        return isset($this->forumId);
    }    

    /**
     * @return int
     */
    public function getForumId() : int
    {
        return $this->forumId;
    }

    /**
     * @param int $forumId
     */
    public function setForumId(int $forumId)
    {
        $this->forumId = $forumId;
    }
    
    public function hasStyleId(): bool
    {
        return isset($this->styleId);
    }    

    /**
     * @return int
     */
    public function getStyleId() : int
    {
        return $this->styleId;
    }

    /**
     * @param int $styleId
     */
    public function setStyleId(int $styleId)
    {
        $this->styleId = $styleId;
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
    
    public function hasOptions(): bool
    {
        return isset($this->options);
    }    

    /**
     * @return int
     */
    public function getOptions() : int
    {
        return $this->options;
    }

    /**
     * @param int $options
     */
    public function setOptions(int $options)
    {
        $this->options = $options;
    }
    
    public function hasDisplayOrder(): bool
    {
        return isset($this->displayOrder);
    }    

    /**
     * @return int
     */
    public function getDisplayOrder() : int
    {
        return $this->displayOrder;
    }

    /**
     * @param int $displayOrder
     */
    public function setDisplayOrder(int $displayOrder)
    {
        $this->displayOrder = $displayOrder;
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
    
    public function hasLastPoster(): bool
    {
        return isset($this->lastPoster);
    }    

    /**
     * @return string
     */
    public function getLastPoster() : string
    {
        return $this->lastPoster;
    }

    /**
     * @param string $lastPoster
     */
    public function setLastPoster(string $lastPoster)
    {
        $this->lastPoster = $lastPoster;
    }
    
    public function hasLastThread(): bool
    {
        return isset($this->lastThread);
    }    

    /**
     * @return string
     */
    public function getLastThread() : string
    {
        return $this->lastThread;
    }

    /**
     * @param string $lastThread
     */
    public function setLastThread(string $lastThread)
    {
        $this->lastThread = $lastThread;
    }
    
    public function hasLastThreadId(): bool
    {
        return isset($this->lastThreadId);
    }    

    /**
     * @return int
     */
    public function getLastThreadId() : int
    {
        return $this->lastThreadId;
    }

    /**
     * @param int $lastThreadId
     */
    public function setLastThreadId(int $lastThreadId)
    {
        $this->lastThreadId = $lastThreadId;
    }
    
    public function hasLastIconId(): bool
    {
        return isset($this->lastIconId);
    }    

    /**
     * @return int
     */
    public function getLastIconId() : int
    {
        return $this->lastIconId;
    }

    /**
     * @param int $lastIconId
     */
    public function setLastIconId(int $lastIconId)
    {
        $this->lastIconId = $lastIconId;
    }
    
    public function hasThreadCount(): bool
    {
        return isset($this->threadCount);
    }    

    /**
     * @return int
     */
    public function getThreadCount() : int
    {
        return $this->threadCount;
    }

    /**
     * @param int $threadCount
     */
    public function setThreadCount(int $threadCount)
    {
        $this->threadCount = $threadCount;
    }
    
    public function hasDaysPrune(): bool
    {
        return isset($this->daysPrune);
    }    

    /**
     * @return int
     */
    public function getDaysPrune() : int
    {
        return $this->daysPrune;
    }

    /**
     * @param int $daysPrune
     */
    public function setDaysPrune(int $daysPrune)
    {
        $this->daysPrune = $daysPrune;
    }
    
    public function hasNewPostEmail(): bool
    {
        return isset($this->newPostEmail);
    }    

    /**
     * @return string|null
     */
    public function getNewPostEmail() : ?string
    {
        return $this->newPostEmail;
    }

    /**
     * @param string|null $newPostEmail
     */
    public function setNewPostEmail(?string $newPostEmail)
    {
        $this->newPostEmail = $newPostEmail;
    }
    
    public function hasNewThreadEmail(): bool
    {
        return isset($this->newThreadEmail);
    }    

    /**
     * @return string|null
     */
    public function getNewThreadEmail() : ?string
    {
        return $this->newThreadEmail;
    }

    /**
     * @param string|null $newThreadEmail
     */
    public function setNewThreadEmail(?string $newThreadEmail)
    {
        $this->newThreadEmail = $newThreadEmail;
    }
    
    public function hasParentId(): bool
    {
        return isset($this->parentId);
    }    

    /**
     * @return int
     */
    public function getParentId() : int
    {
        return $this->parentId;
    }

    /**
     * @param int $parentId
     */
    public function setParentId(int $parentId)
    {
        $this->parentId = $parentId;
    }
    
    public function hasParentList(): bool
    {
        return isset($this->parentList);
    }    

    /**
     * @return string
     */
    public function getParentList() : string
    {
        return $this->parentList;
    }

    /**
     * @param string $parentList
     */
    public function setParentList(string $parentList)
    {
        $this->parentList = $parentList;
    }
    
    public function hasPassword(): bool
    {
        return isset($this->password);
    }    

    /**
     * @return string
     */
    public function getPassword() : string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password)
    {
        $this->password = $password;
    }
    
    public function hasLink(): bool
    {
        return isset($this->link);
    }    

    /**
     * @return string
     */
    public function getLink() : string
    {
        return $this->link;
    }

    /**
     * @param string $link
     */
    public function setLink(string $link)
    {
        $this->link = $link;
    }
    
    public function hasChildList(): bool
    {
        return isset($this->childList);
    }    

    /**
     * @return string|null
     */
    public function getChildList() : ?string
    {
        return $this->childList;
    }

    /**
     * @param string|null $childList
     */
    public function setChildList(?string $childList)
    {
        $this->childList = $childList;
    }
    
    public function hasImportForumId(): bool
    {
        return isset($this->importForumId);
    }    

    /**
     * @return int
     */
    public function getImportForumId() : int
    {
        return $this->importForumId;
    }

    /**
     * @param int $importForumId
     */
    public function setImportForumId(int $importForumId)
    {
        $this->importForumId = $importForumId;
    }
    
    public function hasImportCategoryId(): bool
    {
        return isset($this->importCategoryId);
    }    

    /**
     * @return int
     */
    public function getImportCategoryId() : int
    {
        return $this->importCategoryId;
    }

    /**
     * @param int $importCategoryId
     */
    public function setImportCategoryId(int $importCategoryId)
    {
        $this->importCategoryId = $importCategoryId;
    }
    
    public function hasTitleClean(): bool
    {
        return isset($this->titleClean);
    }    

    /**
     * @return string
     */
    public function getTitleClean() : string
    {
        return $this->titleClean;
    }

    /**
     * @param string $titleClean
     */
    public function setTitleClean(string $titleClean)
    {
        $this->titleClean = $titleClean;
    }
    
    public function hasDescriptionClean(): bool
    {
        return isset($this->descriptionClean);
    }    

    /**
     * @return string
     */
    public function getDescriptionClean() : string
    {
        return $this->descriptionClean;
    }

    /**
     * @param string $descriptionClean
     */
    public function setDescriptionClean(string $descriptionClean)
    {
        $this->descriptionClean = $descriptionClean;
    }
    
    public function hasLastPostId(): bool
    {
        return isset($this->lastPostId);
    }    

    /**
     * @return int
     */
    public function getLastPostId() : int
    {
        return $this->lastPostId;
    }

    /**
     * @param int $lastPostId
     */
    public function setLastPostId(int $lastPostId)
    {
        $this->lastPostId = $lastPostId;
    }
    
    public function hasShowPrivate(): bool
    {
        return isset($this->showPrivate);
    }    

    /**
     * @return int
     */
    public function getShowPrivate() : int
    {
        return $this->showPrivate;
    }

    /**
     * @param int $showPrivate
     */
    public function setShowPrivate(int $showPrivate)
    {
        $this->showPrivate = $showPrivate;
    }
    
    public function hasDefaultSortField(): bool
    {
        return isset($this->defaultSortField);
    }    

    /**
     * @return string
     */
    public function getDefaultSortField() : string
    {
        return $this->defaultSortField;
    }

    /**
     * @param string $defaultSortField
     */
    public function setDefaultSortField(string $defaultSortField)
    {
        $this->defaultSortField = $defaultSortField;
    }
    
    public function hasDefaultSortOrder(): bool
    {
        return isset($this->defaultSortOrder);
    }    

    /**
     * @return string
     */
    public function getDefaultSortOrder() : string
    {
        return $this->defaultSortOrder;
    }

    /**
     * @param string $defaultSortOrder
     */
    public function setDefaultSortOrder(string $defaultSortOrder)
    {
        $this->defaultSortOrder = $defaultSortOrder;
    }
    
    public function hasVbSeoModeratePingbacks(): bool
    {
        return isset($this->vbSeoModeratePingbacks);
    }    

    /**
     * @return int
     */
    public function getVbSeoModeratePingbacks() : int
    {
        return $this->vbSeoModeratePingbacks;
    }

    /**
     * @param int $vbSeoModeratePingbacks
     */
    public function setVbSeoModeratePingbacks(int $vbSeoModeratePingbacks)
    {
        $this->vbSeoModeratePingbacks = $vbSeoModeratePingbacks;
    }
    
    public function hasVbSeoModerateTrackbacks(): bool
    {
        return isset($this->vbSeoModerateTrackbacks);
    }    

    /**
     * @return int
     */
    public function getVbSeoModerateTrackbacks() : int
    {
        return $this->vbSeoModerateTrackbacks;
    }

    /**
     * @param int $vbSeoModerateTrackbacks
     */
    public function setVbSeoModerateTrackbacks(int $vbSeoModerateTrackbacks)
    {
        $this->vbSeoModerateTrackbacks = $vbSeoModerateTrackbacks;
    }
    
    public function hasVbSeoModerateRefbacks(): bool
    {
        return isset($this->vbSeoModerateRefbacks);
    }    

    /**
     * @return int
     */
    public function getVbSeoModerateRefbacks() : int
    {
        return $this->vbSeoModerateRefbacks;
    }

    /**
     * @param int $vbSeoModerateRefbacks
     */
    public function setVbSeoModerateRefbacks(int $vbSeoModerateRefbacks)
    {
        $this->vbSeoModerateRefbacks = $vbSeoModerateRefbacks;
    }
    
    public function hasLastPrefixId(): bool
    {
        return isset($this->lastPrefixId);
    }    

    /**
     * @return string
     */
    public function getLastPrefixId() : string
    {
        return $this->lastPrefixId;
    }

    /**
     * @param string $lastPrefixId
     */
    public function setLastPrefixId(string $lastPrefixId)
    {
        $this->lastPrefixId = $lastPrefixId;
    }
    
    public function hasImagePrefix(): bool
    {
        return isset($this->imagePrefix);
    }    

    /**
     * @return string
     */
    public function getImagePrefix() : string
    {
        return $this->imagePrefix;
    }

    /**
     * @param string $imagePrefix
     */
    public function setImagePrefix(string $imagePrefix)
    {
        $this->imagePrefix = $imagePrefix;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Forum
    {
        return new Forum();
    }
}