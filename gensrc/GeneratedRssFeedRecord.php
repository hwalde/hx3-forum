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

class GeneratedRssFeedRecord implements Record {
    
    /** @var $rssFeedId RecordValue */
    protected $rssFeedId;
    
    /** @var $title RecordValue */
    protected $title;
    
    /** @var $url RecordValue */
    protected $url;
    
    /** @var $port RecordValue */
    protected $port;
    
    /** @var $ttl RecordValue */
    protected $ttl;
    
    /** @var $maxResults RecordValue */
    protected $maxResults;
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $forumId RecordValue */
    protected $forumId;
    
    /** @var $iconId RecordValue */
    protected $iconId;
    
    /** @var $titleTemplate RecordValue */
    protected $titleTemplate;
    
    /** @var $bodyTemplate RecordValue */
    protected $bodyTemplate;
    
    /** @var $searchWords RecordValue */
    protected $searchWords;
    
    /** @var $itemType RecordValue */
    protected $itemType;
    
    /** @var $threadActionDelay RecordValue */
    protected $threadActionDelay;
    
    /** @var $endAnnouncement RecordValue */
    protected $endAnnouncement;
    
    /** @var $options RecordValue */
    protected $options;
    
    /** @var $lastRun RecordValue */
    protected $lastRun;
    
    /** @var $prefixId RecordValue */
    protected $prefixId;

    public function __construct() {
		$this->rssFeedId = new RecordValue();
		$this->title = new RecordValue();
		$this->url = new RecordValue();
		$this->port = new RecordValue();
		$this->ttl = new RecordValue();
		$this->maxResults = new RecordValue();
		$this->userId = new RecordValue();
		$this->forumId = new RecordValue();
		$this->iconId = new RecordValue();
		$this->titleTemplate = new RecordValue();
		$this->bodyTemplate = new RecordValue();
		$this->searchWords = new RecordValue();
		$this->itemType = new RecordValue();
		$this->threadActionDelay = new RecordValue();
		$this->endAnnouncement = new RecordValue();
		$this->options = new RecordValue();
		$this->lastRun = new RecordValue();
		$this->prefixId = new RecordValue();
    }
    
    public function hasRssFeedId(): bool
    {
        return $this->rssFeedId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getRssFeedId() : int
    {
        return $this->rssFeedId->getValue();
    }

    /**
     * @param int $rssFeedId
     */
    public function setRssFeedId(int $rssFeedId)
    {
        $this->rssFeedId->setChanged(true);
        $this->rssFeedId->setValue($rssFeedId);
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
    
    public function hasUrl(): bool
    {
        return $this->url->hasBeenSet();
    }    

    /**
     * @return string|null
     */
    public function getUrl() : ?string
    {
        return $this->url->getValue();
    }

    /**
     * @param string|null $url
     */
    public function setUrl(?string $url)
    {
        $this->url->setChanged(true);
        $this->url->setValue($url);
    }
    
    public function hasPort(): bool
    {
        return $this->port->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPort() : int
    {
        return $this->port->getValue();
    }

    /**
     * @param int $port
     */
    public function setPort(int $port)
    {
        $this->port->setChanged(true);
        $this->port->setValue($port);
    }
    
    public function hasTtl(): bool
    {
        return $this->ttl->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getTtl() : int
    {
        return $this->ttl->getValue();
    }

    /**
     * @param int $ttl
     */
    public function setTtl(int $ttl)
    {
        $this->ttl->setChanged(true);
        $this->ttl->setValue($ttl);
    }
    
    public function hasMaxResults(): bool
    {
        return $this->maxResults->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getMaxResults() : int
    {
        return $this->maxResults->getValue();
    }

    /**
     * @param int $maxResults
     */
    public function setMaxResults(int $maxResults)
    {
        $this->maxResults->setChanged(true);
        $this->maxResults->setValue($maxResults);
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
    
    public function hasIconId(): bool
    {
        return $this->iconId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getIconId() : int
    {
        return $this->iconId->getValue();
    }

    /**
     * @param int $iconId
     */
    public function setIconId(int $iconId)
    {
        $this->iconId->setChanged(true);
        $this->iconId->setValue($iconId);
    }
    
    public function hasTitleTemplate(): bool
    {
        return $this->titleTemplate->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getTitleTemplate() : string
    {
        return $this->titleTemplate->getValue();
    }

    /**
     * @param string $titleTemplate
     */
    public function setTitleTemplate(string $titleTemplate)
    {
        $this->titleTemplate->setChanged(true);
        $this->titleTemplate->setValue($titleTemplate);
    }
    
    public function hasBodyTemplate(): bool
    {
        return $this->bodyTemplate->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getBodyTemplate() : string
    {
        return $this->bodyTemplate->getValue();
    }

    /**
     * @param string $bodyTemplate
     */
    public function setBodyTemplate(string $bodyTemplate)
    {
        $this->bodyTemplate->setChanged(true);
        $this->bodyTemplate->setValue($bodyTemplate);
    }
    
    public function hasSearchWords(): bool
    {
        return $this->searchWords->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getSearchWords() : string
    {
        return $this->searchWords->getValue();
    }

    /**
     * @param string $searchWords
     */
    public function setSearchWords(string $searchWords)
    {
        $this->searchWords->setChanged(true);
        $this->searchWords->setValue($searchWords);
    }
    
    public function hasItemType(): bool
    {
        return $this->itemType->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getItemType() : string
    {
        return $this->itemType->getValue();
    }

    /**
     * @param string $itemType
     */
    public function setItemType(string $itemType)
    {
        $this->itemType->setChanged(true);
        $this->itemType->setValue($itemType);
    }
    
    public function hasThreadActionDelay(): bool
    {
        return $this->threadActionDelay->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getThreadActionDelay() : int
    {
        return $this->threadActionDelay->getValue();
    }

    /**
     * @param int $threadActionDelay
     */
    public function setThreadActionDelay(int $threadActionDelay)
    {
        $this->threadActionDelay->setChanged(true);
        $this->threadActionDelay->setValue($threadActionDelay);
    }
    
    public function hasEndAnnouncement(): bool
    {
        return $this->endAnnouncement->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getEndAnnouncement() : int
    {
        return $this->endAnnouncement->getValue();
    }

    /**
     * @param int $endAnnouncement
     */
    public function setEndAnnouncement(int $endAnnouncement)
    {
        $this->endAnnouncement->setChanged(true);
        $this->endAnnouncement->setValue($endAnnouncement);
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
    
    public function hasLastRun(): bool
    {
        return $this->lastRun->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getLastRun() : int
    {
        return $this->lastRun->getValue();
    }

    /**
     * @param int $lastRun
     */
    public function setLastRun(int $lastRun)
    {
        $this->lastRun->setChanged(true);
        $this->lastRun->setValue($lastRun);
    }
    
    public function hasPrefixId(): bool
    {
        return $this->prefixId->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPrefixId() : string
    {
        return $this->prefixId->getValue();
    }

    /**
     * @param string $prefixId
     */
    public function setPrefixId(string $prefixId)
    {
        $this->prefixId->setChanged(true);
        $this->prefixId->setValue($prefixId);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): RssFeed
    {
        return new RssFeed();
    }
}