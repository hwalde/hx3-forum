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

class GeneratedPodcastItemRecord implements Record {
    
    /** @var $postId int */
    private $postId;
    
    /** @var $url string */
    private $url;
    
    /** @var $length int */
    private $length;
    
    /** @var $explicit int */
    private $explicit;
    
    /** @var $keywords string */
    private $keywords;
    
    /** @var $subTitle string */
    private $subTitle;
    
    /** @var $author string */
    private $author;
    
    public function hasPostId(): bool
    {
        return isset($this->postId);
    }    

    /**
     * @return int
     */
    public function getPostId() : int
    {
        return $this->postId;
    }

    /**
     * @param int $postId
     */
    public function setPostId(int $postId)
    {
        $this->postId = $postId;
    }
    
    public function hasUrl(): bool
    {
        return isset($this->url);
    }    

    /**
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url)
    {
        $this->url = $url;
    }
    
    public function hasLength(): bool
    {
        return isset($this->length);
    }    

    /**
     * @return int
     */
    public function getLength() : int
    {
        return $this->length;
    }

    /**
     * @param int $length
     */
    public function setLength(int $length)
    {
        $this->length = $length;
    }
    
    public function hasExplicit(): bool
    {
        return isset($this->explicit);
    }    

    /**
     * @return int
     */
    public function getExplicit() : int
    {
        return $this->explicit;
    }

    /**
     * @param int $explicit
     */
    public function setExplicit(int $explicit)
    {
        $this->explicit = $explicit;
    }
    
    public function hasKeywords(): bool
    {
        return isset($this->keywords);
    }    

    /**
     * @return string
     */
    public function getKeywords() : string
    {
        return $this->keywords;
    }

    /**
     * @param string $keywords
     */
    public function setKeywords(string $keywords)
    {
        $this->keywords = $keywords;
    }
    
    public function hasSubTitle(): bool
    {
        return isset($this->subTitle);
    }    

    /**
     * @return string
     */
    public function getSubTitle() : string
    {
        return $this->subTitle;
    }

    /**
     * @param string $subTitle
     */
    public function setSubTitle(string $subTitle)
    {
        $this->subTitle = $subTitle;
    }
    
    public function hasAuthor(): bool
    {
        return isset($this->author);
    }    

    /**
     * @return string
     */
    public function getAuthor() : string
    {
        return $this->author;
    }

    /**
     * @param string $author
     */
    public function setAuthor(string $author)
    {
        $this->author = $author;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PodcastItem
    {
        return new PodcastItem();
    }
}