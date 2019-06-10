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

class GeneratedProductRecord implements Record {
    
    /** @var $productId RecordValue */
    protected $productId;
    
    /** @var $title RecordValue */
    protected $title;
    
    /** @var $description RecordValue */
    protected $description;
    
    /** @var $version RecordValue */
    protected $version;
    
    /** @var $active RecordValue */
    protected $active;
    
    /** @var $url RecordValue */
    protected $url;
    
    /** @var $versioncheckurl RecordValue */
    protected $versioncheckurl;

    public function __construct() {
		$this->productId = new RecordValue();
		$this->title = new RecordValue();
		$this->description = new RecordValue();
		$this->version = new RecordValue();
		$this->active = new RecordValue();
		$this->url = new RecordValue();
		$this->versioncheckurl = new RecordValue();
    }
    
    public function hasProductId(): bool
    {
        return $this->productId->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getProductId() : string
    {
        return $this->productId->getValue();
    }

    /**
     * @param string $productId
     */
    public function setProductId(string $productId)
    {
        $this->productId->setChanged(true);
        $this->productId->setValue($productId);
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
    
    public function hasDescription(): bool
    {
        return $this->description->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description->getValue();
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->description->setChanged(true);
        $this->description->setValue($description);
    }
    
    public function hasVersion(): bool
    {
        return $this->version->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getVersion() : string
    {
        return $this->version->getValue();
    }

    /**
     * @param string $version
     */
    public function setVersion(string $version)
    {
        $this->version->setChanged(true);
        $this->version->setValue($version);
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
    
    public function hasVersioncheckurl(): bool
    {
        return $this->versioncheckurl->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getVersioncheckurl() : string
    {
        return $this->versioncheckurl->getValue();
    }

    /**
     * @param string $versioncheckurl
     */
    public function setVersioncheckurl(string $versioncheckurl)
    {
        $this->versioncheckurl->setChanged(true);
        $this->versioncheckurl->setValue($versioncheckurl);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Product
    {
        return new Product();
    }
}