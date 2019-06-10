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

class GeneratedExternalCacheRecord implements Record {
    
    /** @var $cacheHash RecordValue */
    protected $cacheHash;
    
    /** @var $text RecordValue */
    protected $text;
    
    /** @var $headers RecordValue */
    protected $headers;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;
    
    /** @var $forumId RecordValue */
    protected $forumId;

    public function __construct() {
		$this->cacheHash = new RecordValue();
		$this->text = new RecordValue();
		$this->headers = new RecordValue();
		$this->dateLine = new RecordValue();
		$this->forumId = new RecordValue();
    }
    
    public function hasCacheHash(): bool
    {
        return $this->cacheHash->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getCacheHash() : string
    {
        return $this->cacheHash->getValue();
    }

    /**
     * @param string $cacheHash
     */
    public function setCacheHash(string $cacheHash)
    {
        $this->cacheHash->setChanged(true);
        $this->cacheHash->setValue($cacheHash);
    }
    
    public function hasText(): bool
    {
        return $this->text->hasBeenSet();
    }    

    /**
     * @return string|null
     */
    public function getText() : ?string
    {
        return $this->text->getValue();
    }

    /**
     * @param string|null $text
     */
    public function setText(?string $text)
    {
        $this->text->setChanged(true);
        $this->text->setValue($text);
    }
    
    public function hasHeaders(): bool
    {
        return $this->headers->hasBeenSet();
    }    

    /**
     * @return string|null
     */
    public function getHeaders() : ?string
    {
        return $this->headers->getValue();
    }

    /**
     * @param string|null $headers
     */
    public function setHeaders(?string $headers)
    {
        $this->headers->setChanged(true);
        $this->headers->setValue($headers);
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
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): ExternalCache
    {
        return new ExternalCache();
    }
}