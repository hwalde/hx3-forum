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

class GeneratedPostParsedRecord implements Record {
    
    /** @var $postId RecordValue */
    protected $postId;
    
    /** @var $dateLine RecordValue */
    protected $dateLine;
    
    /** @var $hasImages RecordValue */
    protected $hasImages;
    
    /** @var $pageTextHtml RecordValue */
    protected $pageTextHtml;
    
    /** @var $styleId RecordValue */
    protected $styleId;
    
    /** @var $languageId RecordValue */
    protected $languageId;

    public function __construct() {
		$this->postId = new RecordValue();
		$this->dateLine = new RecordValue();
		$this->hasImages = new RecordValue();
		$this->pageTextHtml = new RecordValue();
		$this->styleId = new RecordValue();
		$this->languageId = new RecordValue();
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
    
    public function hasHasImages(): bool
    {
        return $this->hasImages->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getHasImages() : int
    {
        return $this->hasImages->getValue();
    }

    /**
     * @param int $hasImages
     */
    public function setHasImages(int $hasImages)
    {
        $this->hasImages->setChanged(true);
        $this->hasImages->setValue($hasImages);
    }
    
    public function hasPageTextHtml(): bool
    {
        return $this->pageTextHtml->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPageTextHtml() : string
    {
        return $this->pageTextHtml->getValue();
    }

    /**
     * @param string $pageTextHtml
     */
    public function setPageTextHtml(string $pageTextHtml)
    {
        $this->pageTextHtml->setChanged(true);
        $this->pageTextHtml->setValue($pageTextHtml);
    }
    
    public function hasStyleId(): bool
    {
        return $this->styleId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getStyleId() : int
    {
        return $this->styleId->getValue();
    }

    /**
     * @param int $styleId
     */
    public function setStyleId(int $styleId)
    {
        $this->styleId->setChanged(true);
        $this->styleId->setValue($styleId);
    }
    
    public function hasLanguageId(): bool
    {
        return $this->languageId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getLanguageId() : int
    {
        return $this->languageId->getValue();
    }

    /**
     * @param int $languageId
     */
    public function setLanguageId(int $languageId)
    {
        $this->languageId->setChanged(true);
        $this->languageId->setValue($languageId);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): PostParsed
    {
        return new PostParsed();
    }
}