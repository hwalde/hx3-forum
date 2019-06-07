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

class GeneratedRssFeedRecord implements Record {
    
    /** @var $rssFeedId int */
    protected $rssFeedId;
    
    /** @var $title string */
    protected $title;
    
    /** @var $url string|null */
    protected $url;
    
    /** @var $port int */
    protected $port;
    
    /** @var $ttl int */
    protected $ttl;
    
    /** @var $maxResults int */
    protected $maxResults;
    
    /** @var $userId int */
    protected $userId;
    
    /** @var $forumId int */
    protected $forumId;
    
    /** @var $iconId int */
    protected $iconId;
    
    /** @var $titleTemplate string */
    protected $titleTemplate;
    
    /** @var $bodyTemplate string */
    protected $bodyTemplate;
    
    /** @var $searchWords string */
    protected $searchWords;
    
    /** @var $itemType string */
    protected $itemType;
    
    /** @var $threadActionDelay int */
    protected $threadActionDelay;
    
    /** @var $endAnnouncement int */
    protected $endAnnouncement;
    
    /** @var $options int */
    protected $options;
    
    /** @var $lastRun int */
    protected $lastRun;
    
    /** @var $prefixId string */
    protected $prefixId;
    
    public function hasRssFeedId(): bool
    {
        return isset($this->rssFeedId);
    }    

    /**
     * @return int
     */
    public function getRssFeedId() : int
    {
        return $this->rssFeedId;
    }

    /**
     * @param int $rssFeedId
     */
    public function setRssFeedId(int $rssFeedId)
    {
        $this->rssFeedId = $rssFeedId;
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
    
    public function hasUrl(): bool
    {
        return isset($this->url);
    }    

    /**
     * @return string|null
     */
    public function getUrl() : ?string
    {
        return $this->url;
    }

    /**
     * @param string|null $url
     */
    public function setUrl(?string $url)
    {
        $this->url = $url;
    }
    
    public function hasPort(): bool
    {
        return isset($this->port);
    }    

    /**
     * @return int
     */
    public function getPort() : int
    {
        return $this->port;
    }

    /**
     * @param int $port
     */
    public function setPort(int $port)
    {
        $this->port = $port;
    }
    
    public function hasTtl(): bool
    {
        return isset($this->ttl);
    }    

    /**
     * @return int
     */
    public function getTtl() : int
    {
        return $this->ttl;
    }

    /**
     * @param int $ttl
     */
    public function setTtl(int $ttl)
    {
        $this->ttl = $ttl;
    }
    
    public function hasMaxResults(): bool
    {
        return isset($this->maxResults);
    }    

    /**
     * @return int
     */
    public function getMaxResults() : int
    {
        return $this->maxResults;
    }

    /**
     * @param int $maxResults
     */
    public function setMaxResults(int $maxResults)
    {
        $this->maxResults = $maxResults;
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
    
    public function hasIconId(): bool
    {
        return isset($this->iconId);
    }    

    /**
     * @return int
     */
    public function getIconId() : int
    {
        return $this->iconId;
    }

    /**
     * @param int $iconId
     */
    public function setIconId(int $iconId)
    {
        $this->iconId = $iconId;
    }
    
    public function hasTitleTemplate(): bool
    {
        return isset($this->titleTemplate);
    }    

    /**
     * @return string
     */
    public function getTitleTemplate() : string
    {
        return $this->titleTemplate;
    }

    /**
     * @param string $titleTemplate
     */
    public function setTitleTemplate(string $titleTemplate)
    {
        $this->titleTemplate = $titleTemplate;
    }
    
    public function hasBodyTemplate(): bool
    {
        return isset($this->bodyTemplate);
    }    

    /**
     * @return string
     */
    public function getBodyTemplate() : string
    {
        return $this->bodyTemplate;
    }

    /**
     * @param string $bodyTemplate
     */
    public function setBodyTemplate(string $bodyTemplate)
    {
        $this->bodyTemplate = $bodyTemplate;
    }
    
    public function hasSearchWords(): bool
    {
        return isset($this->searchWords);
    }    

    /**
     * @return string
     */
    public function getSearchWords() : string
    {
        return $this->searchWords;
    }

    /**
     * @param string $searchWords
     */
    public function setSearchWords(string $searchWords)
    {
        $this->searchWords = $searchWords;
    }
    
    public function hasItemType(): bool
    {
        return isset($this->itemType);
    }    

    /**
     * @return string
     */
    public function getItemType() : string
    {
        return $this->itemType;
    }

    /**
     * @param string $itemType
     */
    public function setItemType(string $itemType)
    {
        $this->itemType = $itemType;
    }
    
    public function hasThreadActionDelay(): bool
    {
        return isset($this->threadActionDelay);
    }    

    /**
     * @return int
     */
    public function getThreadActionDelay() : int
    {
        return $this->threadActionDelay;
    }

    /**
     * @param int $threadActionDelay
     */
    public function setThreadActionDelay(int $threadActionDelay)
    {
        $this->threadActionDelay = $threadActionDelay;
    }
    
    public function hasEndAnnouncement(): bool
    {
        return isset($this->endAnnouncement);
    }    

    /**
     * @return int
     */
    public function getEndAnnouncement() : int
    {
        return $this->endAnnouncement;
    }

    /**
     * @param int $endAnnouncement
     */
    public function setEndAnnouncement(int $endAnnouncement)
    {
        $this->endAnnouncement = $endAnnouncement;
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
    
    public function hasLastRun(): bool
    {
        return isset($this->lastRun);
    }    

    /**
     * @return int
     */
    public function getLastRun() : int
    {
        return $this->lastRun;
    }

    /**
     * @param int $lastRun
     */
    public function setLastRun(int $lastRun)
    {
        $this->lastRun = $lastRun;
    }
    
    public function hasPrefixId(): bool
    {
        return isset($this->prefixId);
    }    

    /**
     * @return string
     */
    public function getPrefixId() : string
    {
        return $this->prefixId;
    }

    /**
     * @param string $prefixId
     */
    public function setPrefixId(string $prefixId)
    {
        $this->prefixId = $prefixId;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): RssFeed
    {
        return new RssFeed();
    }
}