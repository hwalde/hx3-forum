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

class GeneratedPodcastRecord implements Record {
    
    /** @var $forumId int */
    private $forumId;
    
    /** @var $author string */
    private $author;
    
    /** @var $category string */
    private $category;
    
    /** @var $image string */
    private $image;
    
    /** @var $explicit int */
    private $explicit;
    
    /** @var $enabled int */
    private $enabled;
    
    /** @var $keywords string */
    private $keywords;
    
    /** @var $ownerEmail string */
    private $ownerEmail;
    
    /** @var $ownerName string */
    private $ownerName;
    
    /** @var $subTitle string */
    private $subTitle;
    
    /** @var $summary string|null */
    private $summary;
    
    /** @var $categoryId int */
    private $categoryId;
    
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
    
    public function hasCategory(): bool
    {
        return isset($this->category);
    }    

    /**
     * @return string
     */
    public function getCategory() : string
    {
        return $this->category;
    }

    /**
     * @param string $category
     */
    public function setCategory(string $category)
    {
        $this->category = $category;
    }
    
    public function hasImage(): bool
    {
        return isset($this->image);
    }    

    /**
     * @return string
     */
    public function getImage() : string
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image)
    {
        $this->image = $image;
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
    
    public function hasEnabled(): bool
    {
        return isset($this->enabled);
    }    

    /**
     * @return int
     */
    public function getEnabled() : int
    {
        return $this->enabled;
    }

    /**
     * @param int $enabled
     */
    public function setEnabled(int $enabled)
    {
        $this->enabled = $enabled;
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
    
    public function hasOwnerEmail(): bool
    {
        return isset($this->ownerEmail);
    }    

    /**
     * @return string
     */
    public function getOwnerEmail() : string
    {
        return $this->ownerEmail;
    }

    /**
     * @param string $ownerEmail
     */
    public function setOwnerEmail(string $ownerEmail)
    {
        $this->ownerEmail = $ownerEmail;
    }
    
    public function hasOwnerName(): bool
    {
        return isset($this->ownerName);
    }    

    /**
     * @return string
     */
    public function getOwnerName() : string
    {
        return $this->ownerName;
    }

    /**
     * @param string $ownerName
     */
    public function setOwnerName(string $ownerName)
    {
        $this->ownerName = $ownerName;
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
    
    public function hasSummary(): bool
    {
        return isset($this->summary);
    }    

    /**
     * @return string|null
     */
    public function getSummary() : ?string
    {
        return $this->summary;
    }

    /**
     * @param string|null $summary
     */
    public function setSummary(?string $summary)
    {
        $this->summary = $summary;
    }
    
    public function hasCategoryId(): bool
    {
        return isset($this->categoryId);
    }    

    /**
     * @return int
     */
    public function getCategoryId() : int
    {
        return $this->categoryId;
    }

    /**
     * @param int $categoryId
     */
    public function setCategoryId(int $categoryId)
    {
        $this->categoryId = $categoryId;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Podcast
    {
        return new Podcast();
    }
}