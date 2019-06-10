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

class GeneratedPodcastRecord implements Record {
    
    /** @var $forumId RecordValue */
    protected $forumId;
    
    /** @var $author RecordValue */
    protected $author;
    
    /** @var $category RecordValue */
    protected $category;
    
    /** @var $image RecordValue */
    protected $image;
    
    /** @var $explicit RecordValue */
    protected $explicit;
    
    /** @var $enabled RecordValue */
    protected $enabled;
    
    /** @var $keywords RecordValue */
    protected $keywords;
    
    /** @var $ownerEmail RecordValue */
    protected $ownerEmail;
    
    /** @var $ownerName RecordValue */
    protected $ownerName;
    
    /** @var $subTitle RecordValue */
    protected $subTitle;
    
    /** @var $summary RecordValue */
    protected $summary;
    
    /** @var $categoryId RecordValue */
    protected $categoryId;

    public function __construct() {
		$this->forumId = new RecordValue();
		$this->author = new RecordValue();
		$this->category = new RecordValue();
		$this->image = new RecordValue();
		$this->explicit = new RecordValue();
		$this->enabled = new RecordValue();
		$this->keywords = new RecordValue();
		$this->ownerEmail = new RecordValue();
		$this->ownerName = new RecordValue();
		$this->subTitle = new RecordValue();
		$this->summary = new RecordValue();
		$this->categoryId = new RecordValue();
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
    
    public function hasCategory(): bool
    {
        return $this->category->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getCategory() : string
    {
        return $this->category->getValue();
    }

    /**
     * @param string $category
     */
    public function setCategory(string $category)
    {
        $this->category->setChanged(true);
        $this->category->setValue($category);
    }
    
    public function hasImage(): bool
    {
        return $this->image->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getImage() : string
    {
        return $this->image->getValue();
    }

    /**
     * @param string $image
     */
    public function setImage(string $image)
    {
        $this->image->setChanged(true);
        $this->image->setValue($image);
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
    
    public function hasEnabled(): bool
    {
        return $this->enabled->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getEnabled() : int
    {
        return $this->enabled->getValue();
    }

    /**
     * @param int $enabled
     */
    public function setEnabled(int $enabled)
    {
        $this->enabled->setChanged(true);
        $this->enabled->setValue($enabled);
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
    
    public function hasOwnerEmail(): bool
    {
        return $this->ownerEmail->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getOwnerEmail() : string
    {
        return $this->ownerEmail->getValue();
    }

    /**
     * @param string $ownerEmail
     */
    public function setOwnerEmail(string $ownerEmail)
    {
        $this->ownerEmail->setChanged(true);
        $this->ownerEmail->setValue($ownerEmail);
    }
    
    public function hasOwnerName(): bool
    {
        return $this->ownerName->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getOwnerName() : string
    {
        return $this->ownerName->getValue();
    }

    /**
     * @param string $ownerName
     */
    public function setOwnerName(string $ownerName)
    {
        $this->ownerName->setChanged(true);
        $this->ownerName->setValue($ownerName);
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
    
    public function hasSummary(): bool
    {
        return $this->summary->hasBeenSet();
    }    

    /**
     * @return string|null
     */
    public function getSummary() : ?string
    {
        return $this->summary->getValue();
    }

    /**
     * @param string|null $summary
     */
    public function setSummary(?string $summary)
    {
        $this->summary->setChanged(true);
        $this->summary->setValue($summary);
    }
    
    public function hasCategoryId(): bool
    {
        return $this->categoryId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getCategoryId() : int
    {
        return $this->categoryId->getValue();
    }

    /**
     * @param int $categoryId
     */
    public function setCategoryId(int $categoryId)
    {
        $this->categoryId->setChanged(true);
        $this->categoryId->setValue($categoryId);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Podcast
    {
        return new Podcast();
    }
}