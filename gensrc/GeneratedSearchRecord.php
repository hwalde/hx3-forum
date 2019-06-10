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

class GeneratedSearchRecord implements Record {
    
    /** @var $searchId RecordValue */
    protected $searchId;
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $ipAddress RecordValue */
    protected $ipAddress;
    
    /** @var $personal RecordValue */
    protected $personal;
    
    /** @var $query RecordValue */
    protected $query;
    
    /** @var $searchUser RecordValue */
    protected $searchUser;
    
    /** @var $forumChoice RecordValue */
    protected $forumChoice;
    
    /** @var $sortBy RecordValue */
    protected $sortBy;
    
    /** @var $sortOrder RecordValue */
    protected $sortOrder;
    
    /** @var $searchTime RecordValue */
    protected $searchTime;
    
    /** @var $showPosts RecordValue */
    protected $showPosts;
    
    /** @var $orderedIds RecordValue */
    protected $orderedIds;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;
    
    /** @var $searchTerms RecordValue */
    protected $searchTerms;
    
    /** @var $displayTerms RecordValue */
    protected $displayTerms;
    
    /** @var $searchHash RecordValue */
    protected $searchHash;
    
    /** @var $titleOnly RecordValue */
    protected $titleOnly;
    
    /** @var $announceIds RecordValue */
    protected $announceIds;
    
    /** @var $completed RecordValue */
    protected $completed;
    
    /** @var $prefixChoice RecordValue */
    protected $prefixChoice;

    public function __construct() {
		$this->searchId = new RecordValue();
		$this->userId = new RecordValue();
		$this->ipAddress = new RecordValue();
		$this->personal = new RecordValue();
		$this->query = new RecordValue();
		$this->searchUser = new RecordValue();
		$this->forumChoice = new RecordValue();
		$this->sortBy = new RecordValue();
		$this->sortOrder = new RecordValue();
		$this->searchTime = new RecordValue();
		$this->showPosts = new RecordValue();
		$this->orderedIds = new RecordValue();
		$this->dateLine = new RecordValue();
		$this->searchTerms = new RecordValue();
		$this->displayTerms = new RecordValue();
		$this->searchHash = new RecordValue();
		$this->titleOnly = new RecordValue();
		$this->announceIds = new RecordValue();
		$this->completed = new RecordValue();
		$this->prefixChoice = new RecordValue();
    }
    
    public function hasSearchId(): bool
    {
        return $this->searchId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getSearchId() : int
    {
        return $this->searchId->getValue();
    }

    /**
     * @param int $searchId
     */
    public function setSearchId(int $searchId)
    {
        $this->searchId->setChanged(true);
        $this->searchId->setValue($searchId);
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
    
    public function hasIpAddress(): bool
    {
        return $this->ipAddress->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getIpAddress() : string
    {
        return $this->ipAddress->getValue();
    }

    /**
     * @param string $ipAddress
     */
    public function setIpAddress(string $ipAddress)
    {
        $this->ipAddress->setChanged(true);
        $this->ipAddress->setValue($ipAddress);
    }
    
    public function hasPersonal(): bool
    {
        return $this->personal->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPersonal() : int
    {
        return $this->personal->getValue();
    }

    /**
     * @param int $personal
     */
    public function setPersonal(int $personal)
    {
        $this->personal->setChanged(true);
        $this->personal->setValue($personal);
    }
    
    public function hasQuery(): bool
    {
        return $this->query->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getQuery() : string
    {
        return $this->query->getValue();
    }

    /**
     * @param string $query
     */
    public function setQuery(string $query)
    {
        $this->query->setChanged(true);
        $this->query->setValue($query);
    }
    
    public function hasSearchUser(): bool
    {
        return $this->searchUser->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getSearchUser() : string
    {
        return $this->searchUser->getValue();
    }

    /**
     * @param string $searchUser
     */
    public function setSearchUser(string $searchUser)
    {
        $this->searchUser->setChanged(true);
        $this->searchUser->setValue($searchUser);
    }
    
    public function hasForumChoice(): bool
    {
        return $this->forumChoice->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getForumChoice() : string
    {
        return $this->forumChoice->getValue();
    }

    /**
     * @param string $forumChoice
     */
    public function setForumChoice(string $forumChoice)
    {
        $this->forumChoice->setChanged(true);
        $this->forumChoice->setValue($forumChoice);
    }
    
    public function hasSortBy(): bool
    {
        return $this->sortBy->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getSortBy() : string
    {
        return $this->sortBy->getValue();
    }

    /**
     * @param string $sortBy
     */
    public function setSortBy(string $sortBy)
    {
        $this->sortBy->setChanged(true);
        $this->sortBy->setValue($sortBy);
    }
    
    public function hasSortOrder(): bool
    {
        return $this->sortOrder->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getSortOrder() : string
    {
        return $this->sortOrder->getValue();
    }

    /**
     * @param string $sortOrder
     */
    public function setSortOrder(string $sortOrder)
    {
        $this->sortOrder->setChanged(true);
        $this->sortOrder->setValue($sortOrder);
    }
    
    public function hasSearchTime(): bool
    {
        return $this->searchTime->hasBeenSet();
    }    

    /**
     * @return mixed
     */
    public function getSearchTime()
    {
        return $this->searchTime->getValue();
    }

    /**
     * @param mixed $searchTime
     */
    public function setSearchTime($searchTime)
    {
        $this->searchTime->setChanged(true);
        $this->searchTime->setValue($searchTime);
    }
    
    public function hasShowPosts(): bool
    {
        return $this->showPosts->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getShowPosts() : int
    {
        return $this->showPosts->getValue();
    }

    /**
     * @param int $showPosts
     */
    public function setShowPosts(int $showPosts)
    {
        $this->showPosts->setChanged(true);
        $this->showPosts->setValue($showPosts);
    }
    
    public function hasOrderedIds(): bool
    {
        return $this->orderedIds->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getOrderedIds() : string
    {
        return $this->orderedIds->getValue();
    }

    /**
     * @param string $orderedIds
     */
    public function setOrderedIds(string $orderedIds)
    {
        $this->orderedIds->setChanged(true);
        $this->orderedIds->setValue($orderedIds);
    }
    
    public function hasDateLine(): bool
    {
        return $this->dateLine->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getDateLine() : int
    {
        return $this->dateLine->getValue();
    }

    /**
     * @param int $dateLine
     */
    public function setDateLine(int $dateLine)
    {
        $this->dateLine->setChanged(true);
        $this->dateLine->setValue($dateLine);
    }
    
    public function hasSearchTerms(): bool
    {
        return $this->searchTerms->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getSearchTerms() : string
    {
        return $this->searchTerms->getValue();
    }

    /**
     * @param string $searchTerms
     */
    public function setSearchTerms(string $searchTerms)
    {
        $this->searchTerms->setChanged(true);
        $this->searchTerms->setValue($searchTerms);
    }
    
    public function hasDisplayTerms(): bool
    {
        return $this->displayTerms->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getDisplayTerms() : string
    {
        return $this->displayTerms->getValue();
    }

    /**
     * @param string $displayTerms
     */
    public function setDisplayTerms(string $displayTerms)
    {
        $this->displayTerms->setChanged(true);
        $this->displayTerms->setValue($displayTerms);
    }
    
    public function hasSearchHash(): bool
    {
        return $this->searchHash->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getSearchHash() : string
    {
        return $this->searchHash->getValue();
    }

    /**
     * @param string $searchHash
     */
    public function setSearchHash(string $searchHash)
    {
        $this->searchHash->setChanged(true);
        $this->searchHash->setValue($searchHash);
    }
    
    public function hasTitleOnly(): bool
    {
        return $this->titleOnly->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getTitleOnly() : int
    {
        return $this->titleOnly->getValue();
    }

    /**
     * @param int $titleOnly
     */
    public function setTitleOnly(int $titleOnly)
    {
        $this->titleOnly->setChanged(true);
        $this->titleOnly->setValue($titleOnly);
    }
    
    public function hasAnnounceIds(): bool
    {
        return $this->announceIds->hasBeenSet();
    }    

    /**
     * @return string|null
     */
    public function getAnnounceIds() : ?string
    {
        return $this->announceIds->getValue();
    }

    /**
     * @param string|null $announceIds
     */
    public function setAnnounceIds(?string $announceIds)
    {
        $this->announceIds->setChanged(true);
        $this->announceIds->setValue($announceIds);
    }
    
    public function hasCompleted(): bool
    {
        return $this->completed->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getCompleted() : int
    {
        return $this->completed->getValue();
    }

    /**
     * @param int $completed
     */
    public function setCompleted(int $completed)
    {
        $this->completed->setChanged(true);
        $this->completed->setValue($completed);
    }
    
    public function hasPrefixChoice(): bool
    {
        return $this->prefixChoice->hasBeenSet();
    }    

    /**
     * @return string|null
     */
    public function getPrefixChoice() : ?string
    {
        return $this->prefixChoice->getValue();
    }

    /**
     * @param string|null $prefixChoice
     */
    public function setPrefixChoice(?string $prefixChoice)
    {
        $this->prefixChoice->setChanged(true);
        $this->prefixChoice->setValue($prefixChoice);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Search
    {
        return new Search();
    }
}