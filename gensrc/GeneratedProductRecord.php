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

class GeneratedProductRecord implements Record {
    
    /** @var $productId string */
    private $productId;
    
    /** @var $title string */
    private $title;
    
    /** @var $description string */
    private $description;
    
    /** @var $version string */
    private $version;
    
    /** @var $active int */
    private $active;
    
    /** @var $url string */
    private $url;
    
    /** @var $versioncheckurl string */
    private $versioncheckurl;
    
    public function hasProductId(): bool
    {
        return isset($this->productId);
    }    

    /**
     * @return string
     */
    public function getProductId() : string
    {
        return $this->productId;
    }

    /**
     * @param string $productId
     */
    public function setProductId(string $productId)
    {
        $this->productId = $productId;
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
    
    public function hasDescription(): bool
    {
        return isset($this->description);
    }    

    /**
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }
    
    public function hasVersion(): bool
    {
        return isset($this->version);
    }    

    /**
     * @return string
     */
    public function getVersion() : string
    {
        return $this->version;
    }

    /**
     * @param string $version
     */
    public function setVersion(string $version)
    {
        $this->version = $version;
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
    
    public function hasVersioncheckurl(): bool
    {
        return isset($this->versioncheckurl);
    }    

    /**
     * @return string
     */
    public function getVersioncheckurl() : string
    {
        return $this->versioncheckurl;
    }

    /**
     * @param string $versioncheckurl
     */
    public function setVersioncheckurl(string $versioncheckurl)
    {
        $this->versioncheckurl = $versioncheckurl;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Product
    {
        return new Product();
    }
}