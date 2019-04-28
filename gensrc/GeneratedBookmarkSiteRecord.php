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

class GeneratedBookmarkSiteRecord implements Record {
    
    /** @var $bookmarkSiteId int */
    private $bookmarkSiteId;
    
    /** @var $title string */
    private $title;
    
    /** @var $iconPath string */
    private $iconPath;
    
    /** @var $active int */
    private $active;
    
    /** @var $displayOrder int */
    private $displayOrder;
    
    /** @var $url string */
    private $url;
    
    public function hasBookmarkSiteId(): bool
    {
        return isset($this->bookmarkSiteId);
    }    

    /**
     * @return int
     */
    public function getBookmarkSiteId() : int
    {
        return $this->bookmarkSiteId;
    }

    /**
     * @param int $bookmarkSiteId
     */
    public function setBookmarkSiteId(int $bookmarkSiteId)
    {
        $this->bookmarkSiteId = $bookmarkSiteId;
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
    
    public function hasIconPath(): bool
    {
        return isset($this->iconPath);
    }    

    /**
     * @return string
     */
    public function getIconPath() : string
    {
        return $this->iconPath;
    }

    /**
     * @param string $iconPath
     */
    public function setIconPath(string $iconPath)
    {
        $this->iconPath = $iconPath;
    }
    
    public function hasActive(): bool
    {
        return isset($this->active);
    }    

    /**
     * @return int
     */
    public function getActive() : int
    {
        return $this->active;
    }

    /**
     * @param int $active
     */
    public function setActive(int $active)
    {
        $this->active = $active;
    }
    
    public function hasDisplayOrder(): bool
    {
        return isset($this->displayOrder);
    }    

    /**
     * @return int
     */
    public function getDisplayOrder() : int
    {
        return $this->displayOrder;
    }

    /**
     * @param int $displayOrder
     */
    public function setDisplayOrder(int $displayOrder)
    {
        $this->displayOrder = $displayOrder;
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

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): BookmarkSite
    {
        return new BookmarkSite();
    }
}