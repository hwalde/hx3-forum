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

class GeneratedExternalCacheRecord implements Record {
    
    /** @var $cacheHash string */
    protected $cacheHash;
    
    /** @var $text string|null */
    protected $text;
    
    /** @var $headers string|null */
    protected $headers;
    
    /** @var $dateLine int */
    protected $dateLine;
    
    /** @var $forumId int */
    protected $forumId;
    
    public function hasCacheHash(): bool
    {
        return isset($this->cacheHash);
    }    

    /**
     * @return string
     */
    public function getCacheHash() : string
    {
        return $this->cacheHash;
    }

    /**
     * @param string $cacheHash
     */
    public function setCacheHash(string $cacheHash)
    {
        $this->cacheHash = $cacheHash;
    }
    
    public function hasText(): bool
    {
        return isset($this->text);
    }    

    /**
     * @return string|null
     */
    public function getText() : ?string
    {
        return $this->text;
    }

    /**
     * @param string|null $text
     */
    public function setText(?string $text)
    {
        $this->text = $text;
    }
    
    public function hasHeaders(): bool
    {
        return isset($this->headers);
    }    

    /**
     * @return string|null
     */
    public function getHeaders() : ?string
    {
        return $this->headers;
    }

    /**
     * @param string|null $headers
     */
    public function setHeaders(?string $headers)
    {
        $this->headers = $headers;
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

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): ExternalCache
    {
        return new ExternalCache();
    }
}