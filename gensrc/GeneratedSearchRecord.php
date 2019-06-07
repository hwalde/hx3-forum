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

class GeneratedSearchRecord implements Record {
    
    /** @var $searchId int */
    protected $searchId;
    
    /** @var $userId int */
    protected $userId;
    
    /** @var $ipAddress string */
    protected $ipAddress;
    
    /** @var $personal int */
    protected $personal;
    
    /** @var $query string */
    protected $query;
    
    /** @var $searchUser string */
    protected $searchUser;
    
    /** @var $forumChoice string */
    protected $forumChoice;
    
    /** @var $sortBy string */
    protected $sortBy;
    
    /** @var $sortOrder string */
    protected $sortOrder;
    
    /** @var $searchTime mixed */
    protected $searchTime;
    
    /** @var $showPosts int */
    protected $showPosts;
    
    /** @var $orderedIds string */
    protected $orderedIds;
    
    /** @var $dateLine int */
    protected $dateLine;
    
    /** @var $searchTerms string */
    protected $searchTerms;
    
    /** @var $displayTerms string */
    protected $displayTerms;
    
    /** @var $searchHash string */
    protected $searchHash;
    
    /** @var $titleOnly int */
    protected $titleOnly;
    
    /** @var $announceIds string|null */
    protected $announceIds;
    
    /** @var $completed int */
    protected $completed;
    
    /** @var $prefixChoice string|null */
    protected $prefixChoice;
    
    public function hasSearchId(): bool
    {
        return isset($this->searchId);
    }    

    /**
     * @return int
     */
    public function getSearchId() : int
    {
        return $this->searchId;
    }

    /**
     * @param int $searchId
     */
    public function setSearchId(int $searchId)
    {
        $this->searchId = $searchId;
    }
    
    public function hasUserId(): bool
    {
        return isset($this->userId);
    }    

    /**
     * @return int
     */
    public function getUserId() : int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId(int $userId)
    {
        $this->userId = $userId;
    }
    
    public function hasIpAddress(): bool
    {
        return isset($this->ipAddress);
    }    

    /**
     * @return string
     */
    public function getIpAddress() : string
    {
        return $this->ipAddress;
    }

    /**
     * @param string $ipAddress
     */
    public function setIpAddress(string $ipAddress)
    {
        $this->ipAddress = $ipAddress;
    }
    
    public function hasPersonal(): bool
    {
        return isset($this->personal);
    }    

    /**
     * @return int
     */
    public function getPersonal() : int
    {
        return $this->personal;
    }

    /**
     * @param int $personal
     */
    public function setPersonal(int $personal)
    {
        $this->personal = $personal;
    }
    
    public function hasQuery(): bool
    {
        return isset($this->query);
    }    

    /**
     * @return string
     */
    public function getQuery() : string
    {
        return $this->query;
    }

    /**
     * @param string $query
     */
    public function setQuery(string $query)
    {
        $this->query = $query;
    }
    
    public function hasSearchUser(): bool
    {
        return isset($this->searchUser);
    }    

    /**
     * @return string
     */
    public function getSearchUser() : string
    {
        return $this->searchUser;
    }

    /**
     * @param string $searchUser
     */
    public function setSearchUser(string $searchUser)
    {
        $this->searchUser = $searchUser;
    }
    
    public function hasForumChoice(): bool
    {
        return isset($this->forumChoice);
    }    

    /**
     * @return string
     */
    public function getForumChoice() : string
    {
        return $this->forumChoice;
    }

    /**
     * @param string $forumChoice
     */
    public function setForumChoice(string $forumChoice)
    {
        $this->forumChoice = $forumChoice;
    }
    
    public function hasSortBy(): bool
    {
        return isset($this->sortBy);
    }    

    /**
     * @return string
     */
    public function getSortBy() : string
    {
        return $this->sortBy;
    }

    /**
     * @param string $sortBy
     */
    public function setSortBy(string $sortBy)
    {
        $this->sortBy = $sortBy;
    }
    
    public function hasSortOrder(): bool
    {
        return isset($this->sortOrder);
    }    

    /**
     * @return string
     */
    public function getSortOrder() : string
    {
        return $this->sortOrder;
    }

    /**
     * @param string $sortOrder
     */
    public function setSortOrder(string $sortOrder)
    {
        $this->sortOrder = $sortOrder;
    }
    
    public function hasSearchTime(): bool
    {
        return isset($this->searchTime);
    }    

    /**
     * @return mixed
     */
    public function getSearchTime()
    {
        return $this->searchTime;
    }

    /**
     * @param mixed $searchTime
     */
    public function setSearchTime($searchTime)
    {
        $this->searchTime = $searchTime;
    }
    
    public function hasShowPosts(): bool
    {
        return isset($this->showPosts);
    }    

    /**
     * @return int
     */
    public function getShowPosts() : int
    {
        return $this->showPosts;
    }

    /**
     * @param int $showPosts
     */
    public function setShowPosts(int $showPosts)
    {
        $this->showPosts = $showPosts;
    }
    
    public function hasOrderedIds(): bool
    {
        return isset($this->orderedIds);
    }    

    /**
     * @return string
     */
    public function getOrderedIds() : string
    {
        return $this->orderedIds;
    }

    /**
     * @param string $orderedIds
     */
    public function setOrderedIds(string $orderedIds)
    {
        $this->orderedIds = $orderedIds;
    }
    
    public function hasDateLine(): bool
    {
        return isset($this->dateLine);
    }    

    /**
     * @return int
     */
    public function getDateLine() : int
    {
        return $this->dateLine;
    }

    /**
     * @param int $dateLine
     */
    public function setDateLine(int $dateLine)
    {
        $this->dateLine = $dateLine;
    }
    
    public function hasSearchTerms(): bool
    {
        return isset($this->searchTerms);
    }    

    /**
     * @return string
     */
    public function getSearchTerms() : string
    {
        return $this->searchTerms;
    }

    /**
     * @param string $searchTerms
     */
    public function setSearchTerms(string $searchTerms)
    {
        $this->searchTerms = $searchTerms;
    }
    
    public function hasDisplayTerms(): bool
    {
        return isset($this->displayTerms);
    }    

    /**
     * @return string
     */
    public function getDisplayTerms() : string
    {
        return $this->displayTerms;
    }

    /**
     * @param string $displayTerms
     */
    public function setDisplayTerms(string $displayTerms)
    {
        $this->displayTerms = $displayTerms;
    }
    
    public function hasSearchHash(): bool
    {
        return isset($this->searchHash);
    }    

    /**
     * @return string
     */
    public function getSearchHash() : string
    {
        return $this->searchHash;
    }

    /**
     * @param string $searchHash
     */
    public function setSearchHash(string $searchHash)
    {
        $this->searchHash = $searchHash;
    }
    
    public function hasTitleOnly(): bool
    {
        return isset($this->titleOnly);
    }    

    /**
     * @return int
     */
    public function getTitleOnly() : int
    {
        return $this->titleOnly;
    }

    /**
     * @param int $titleOnly
     */
    public function setTitleOnly(int $titleOnly)
    {
        $this->titleOnly = $titleOnly;
    }
    
    public function hasAnnounceIds(): bool
    {
        return isset($this->announceIds);
    }    

    /**
     * @return string|null
     */
    public function getAnnounceIds() : ?string
    {
        return $this->announceIds;
    }

    /**
     * @param string|null $announceIds
     */
    public function setAnnounceIds(?string $announceIds)
    {
        $this->announceIds = $announceIds;
    }
    
    public function hasCompleted(): bool
    {
        return isset($this->completed);
    }    

    /**
     * @return int
     */
    public function getCompleted() : int
    {
        return $this->completed;
    }

    /**
     * @param int $completed
     */
    public function setCompleted(int $completed)
    {
        $this->completed = $completed;
    }
    
    public function hasPrefixChoice(): bool
    {
        return isset($this->prefixChoice);
    }    

    /**
     * @return string|null
     */
    public function getPrefixChoice() : ?string
    {
        return $this->prefixChoice;
    }

    /**
     * @param string|null $prefixChoice
     */
    public function setPrefixChoice(?string $prefixChoice)
    {
        $this->prefixChoice = $prefixChoice;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Search
    {
        return new Search();
    }
}