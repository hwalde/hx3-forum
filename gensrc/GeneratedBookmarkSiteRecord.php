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

class GeneratedBookmarkSiteRecord implements Record {
    
    /** @var $bookmarkSiteId RecordValue */
    protected $bookmarkSiteId;
    
    /** @var $title RecordValue */
    protected $title;
    
    /** @var $iconPath RecordValue */
    protected $iconPath;
    
    /** @var $active RecordValue */
    protected $active;
    
    /** @var $displayOrder RecordValue */
    protected $displayOrder;
    
    /** @var $url RecordValue */
    protected $url;

    public function __construct() {
		$this->bookmarkSiteId = new RecordValue();
		$this->title = new RecordValue();
		$this->iconPath = new RecordValue();
		$this->active = new RecordValue();
		$this->displayOrder = new RecordValue();
		$this->url = new RecordValue();
    }
    
    public function hasBookmarkSiteId(): bool
    {
        return $this->bookmarkSiteId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getBookmarkSiteId() : int
    {
        return $this->bookmarkSiteId->getValue();
    }

    /**
     * @param int $bookmarkSiteId
     */
    public function setBookmarkSiteId(int $bookmarkSiteId)
    {
        $this->bookmarkSiteId->setChanged(true);
        $this->bookmarkSiteId->setValue($bookmarkSiteId);
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
    
    public function hasIconPath(): bool
    {
        return $this->iconPath->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getIconPath() : string
    {
        return $this->iconPath->getValue();
    }

    /**
     * @param string $iconPath
     */
    public function setIconPath(string $iconPath)
    {
        $this->iconPath->setChanged(true);
        $this->iconPath->setValue($iconPath);
    }
    
    public function hasActive(): bool
    {
        return $this->active->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getActive() : int
    {
        return $this->active->getValue();
    }

    /**
     * @param int $active
     */
    public function setActive(int $active)
    {
        $this->active->setChanged(true);
        $this->active->setValue($active);
    }
    
    public function hasDisplayOrder(): bool
    {
        return $this->displayOrder->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getDisplayOrder() : int
    {
        return $this->displayOrder->getValue();
    }

    /**
     * @param int $displayOrder
     */
    public function setDisplayOrder(int $displayOrder)
    {
        $this->displayOrder->setChanged(true);
        $this->displayOrder->setValue($displayOrder);
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
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): BookmarkSite
    {
        return new BookmarkSite();
    }
}