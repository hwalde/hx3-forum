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

class GeneratedPodcastItemRecord implements Record {
    
    /** @var $postId RecordValue */
    protected $postId;
    
    /** @var $url RecordValue */
    protected $url;
    
    /** @var $length RecordValue */
    protected $length;
    
    /** @var $explicit RecordValue */
    protected $explicit;
    
    /** @var $keywords RecordValue */
    protected $keywords;
    
    /** @var $subTitle RecordValue */
    protected $subTitle;
    
    /** @var $author RecordValue */
    protected $author;

    public function __construct() {
		$this->postId = new RecordValue();
		$this->url = new RecordValue();
		$this->length = new RecordValue();
		$this->explicit = new RecordValue();
		$this->keywords = new RecordValue();
		$this->subTitle = new RecordValue();
		$this->author = new RecordValue();
    }
    
    public function hasPostId(): bool
    {
        return $this->postId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPostId() : int
    {
        return $this->postId->getValue();
    }

    /**
     * @param int $postId
     */
    public function setPostId(int $postId)
    {
        $this->postId->setChanged(true);
        $this->postId->setValue($postId);
    }
    
    public function hasUrl(): bool
    {
        return $this->url->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url->getValue();
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url)
    {
        $this->url->setChanged(true);
        $this->url->setValue($url);
    }
    
    public function hasLength(): bool
    {
        return $this->length->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getLength() : int
    {
        return $this->length->getValue();
    }

    /**
     * @param int $length
     */
    public function setLength(int $length)
    {
        $this->length->setChanged(true);
        $this->length->setValue($length);
    }
    
    public function hasExplicit(): bool
    {
        return $this->explicit->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getExplicit() : int
    {
        return $this->explicit->getValue();
    }

    /**
     * @param int $explicit
     */
    public function setExplicit(int $explicit)
    {
        $this->explicit->setChanged(true);
        $this->explicit->setValue($explicit);
    }
    
    public function hasKeywords(): bool
    {
        return $this->keywords->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getKeywords() : string
    {
        return $this->keywords->getValue();
    }

    /**
     * @param string $keywords
     */
    public function setKeywords(string $keywords)
    {
        $this->keywords->setChanged(true);
        $this->keywords->setValue($keywords);
    }
    
    public function hasSubTitle(): bool
    {
        return $this->subTitle->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getSubTitle() : string
    {
        return $this->subTitle->getValue();
    }

    /**
     * @param string $subTitle
     */
    public function setSubTitle(string $subTitle)
    {
        $this->subTitle->setChanged(true);
        $this->subTitle->setValue($subTitle);
    }
    
    public function hasAuthor(): bool
    {
        return $this->author->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getAuthor() : string
    {
        return $this->author->getValue();
    }

    /**
     * @param string $author
     */
    public function setAuthor(string $author)
    {
        $this->author->setChanged(true);
        $this->author->setValue($author);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PodcastItem
    {
        return new PodcastItem();
    }
}